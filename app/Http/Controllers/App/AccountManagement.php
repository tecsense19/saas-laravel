<?php

namespace App\Http\Controllers\App;

use App\Models\{
    ScanBarcode, User
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class AccountManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.redeem.index');
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        $redeemDataList = ScanBarcode::with(['getUser', 'getGeneratedQR', 'getProduct', 'getQrPoint'])
                    ->when($searchQuery, function ($query) use ($searchQuery) {
                        $query->whereHas('getUser', function ($q) use ($searchQuery) {
                            $q->where('name', 'like', '%' . $searchQuery . '%')
                                ->orWhere('email', 'like', '%' . $searchQuery . '%');
                        });
                    })
                    ->select('scan_barcode.*', \DB::raw('SUM(total_point) as total_points'))
                    ->groupBy('scan_barcode.user_id')
                    ->paginate($perPage);
        
        return view('app.redeem.list', compact('redeemDataList'));
    }

    public function view($id)
    {
        $id = decrypt($id);

        $checkUser = User::where('id', $id)->first();
        if(!$checkUser)
        {
            return redirect()->route('redeem.index')->withError('Invalid user.');
        }

        $totalCredit = ScanBarcode::where('scan_type', 'Credit')->where('user_id', $id)->sum('total_point');
        $totalDebit = ScanBarcode::where('scan_type', 'Debit')->where('user_id', $id)->sum('total_point');
        $total = ScanBarcode::where('user_id', $id)->sum('total_point');

        $id = encrypt($id);

        return view('app.redeemhistory.index', compact('id', 'checkUser', 'totalCredit', 'totalDebit', 'total'));
    }

    public function redeemHistory(Request $request)
    {
        // Retrieve search query parameter
        $userId = decrypt($request->input('user_id'));
        $searchQuery = $request->input('search');

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);

        $redeemDataList = ScanBarcode::with(['getUser', 'getGeneratedQR', 'getProduct', 'getQrPoint'])
                    ->when($searchQuery, function ($query) use ($searchQuery) {
                        $query->whereHas('getUser', function ($q) use ($searchQuery) {
                            $q->where('name', 'like', '%' . $searchQuery . '%')
                                ->orWhere('email', 'like', '%' . $searchQuery . '%');
                        });
                    })
                    ->where('scan_barcode.user_id', $userId)
                    ->orderBy('id', 'desc')
                    ->paginate($perPage);
        
        return view('app.redeemhistory.list', compact('redeemDataList'));
    }
}
