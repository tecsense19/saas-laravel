<?php

namespace App\Http\Controllers\App;

use App\Models\{
    ScanBarcode, User
};
use App\Exports\RedemptionExport;
use App\Imports\RedemptionImport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;

use Validator;

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
                    ->where('scan_type', 'Credit')
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

        $totalCredit = (ScanBarcode::where('scan_type', 'Credit')->where('user_id', $id)->sum('total_point') - ScanBarcode::where('scan_type', 'Debit')->where('user_id', $id)->where('paid_status', 'Success')->sum('total_point'));
        $totalDebit = ScanBarcode::where('scan_type', 'Debit')->where('paid_status', 'Success')->where('user_id', $id)->sum('total_point');
        $total = (ScanBarcode::where('user_id', $id)->sum('total_point') - ScanBarcode::where('scan_type', 'Debit')->where('user_id', $id)->sum('total_point'));

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

    public function redeemRequest(Request $request)
    {
        return view('app.redeem.export');
    }

    public function redeemRequestList(Request $request)
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
                    ->where('scan_type', 'Debit')
                    ->orderBy('id', 'desc')
                    ->paginate($perPage);
        
        return view('app.redeem.requestlist', compact('redeemDataList'));
    }

    public function exportRedemption(Request $request)
    {
        $redeemDataList = ScanBarcode::with(['getUser', 'getGeneratedQR', 'getProduct', 'getQrPoint'])
                                    ->where('scan_type', 'Debit')
                                    ->where('paid_status', 'Pending')
                                    ->orderBy('created_at', 'asc')
                                    ->get();

        $filename = 'members-rediption-request_' . date('Y-m-d') . '.csv';

        return Excel::download(new RedemptionExport($redeemDataList), $filename);
    }

    public function importRedemption(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'file' => 'required|mimes:csv,txt'
        ]);

        // If validation fails, return the first error message
        if ($validator->fails()) {
            return redirect()->back()->withError($validator->errors()->first());
        }

        // Import the data from the uploaded file
        $import = new RedemptionImport;
        Excel::import($import, $request->file('file'));

        // Check if header sequence is valid and handle accordingly
        if ($import->isValidHeaderSequence()) {
            return redirect()->back()->withSuccess('Data imported successfully!');
        } else {
            // Handle the case where header sequence is invalid
            return redirect()->back()->withError('Invalid header sequence!');
        }
    }
}
