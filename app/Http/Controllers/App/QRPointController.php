<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User,
    QRPoint
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class QRPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.qrpoint.index');
    }

    public function checkQRPoint(Request $request)
    {
        $qrName = $request->input('qr_amount');
        $qrId = $request->input('qr_id') ? decrypt($request->input('qr_id')) : '';
        
        // Check if a hsnsac with the given name exists
        if($qrId)
        {
            $qrExists = QRPoint::where('qr_amount', $qrName)->where('id', '!=', $qrId)->exists();
        }
        else
        {
            $qrExists = QRPoint::where('qr_amount', $qrName)->exists();
        }

        // Return JSON response indicating if hsnsac name is unique
        echo json_encode(!$qrExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve QR Amount codes
        $query = QRPoint::query();

        // Apply search filter if search query is provided
        if ($searchQuery) {
            $query->where('qr_amount', 'like', "%$searchQuery%");
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $qrPointList = $query->paginate($perPage);
               
        return view('app.qrpoint.list', compact('qrPointList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $qrId = $request->input('qr_id') ? decrypt($request->input('qr_id')) : '';

        $validatedData = $request->validate([
            'qr_amount' => ['required', 'string', 'max:255'],
            'qr_status' => ['required', 'string', 'max:255'],
        ]);

        if($qrId)
        {
            QRPoint::where('id', $qrId)->update([
                'qr_amount' => $request->qr_amount,
                'qr_status' => $request->qr_status,
            ]);

            return redirect()->route('qrpoint.index')->withSuccess('QR point updated successfully.');
        }
        else
        {
            $variant = QRPoint::create([
                'qr_amount' => $request->qr_amount,
                'qr_status' => $request->qr_status
            ]);

            return redirect()->route('qrpoint.index')->withSuccess('QR point created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->qr_id);
            $hsnsac = QRPoint::findOrFail($id);
            $hsnsac->forceDelete();
            $response = [
                'status' => true,
                'message' => 'QR point deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete QR point.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
