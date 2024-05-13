<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User,
    HsnSac
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class HSNSACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.hsnsac.index');
    }

    public function checkHSNSACName(Request $request)
    {
        $hsnsacName = $request->input('hsnsac_name');
        $hsnsacId = $request->input('hsnsac_id') ? decrypt($request->input('hsnsac_id')) : '';
        
        // Check if a hsnsac with the given name exists
        if($hsnsacId)
        {
            $hsnsacExists = HsnSac::where('hsnsac_name', $hsnsacName)->where('id', '!=', $hsnsacId)->exists();
        }
        else
        {
            $hsnsacExists = HsnSac::where('hsnsac_name', $hsnsacName)->exists();
        }

        // Return JSON response indicating if hsnsac name is unique
        echo json_encode(!$hsnsacExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve HSN/SAC codes
        $query = HsnSac::query();

        // Apply search filter if search query is provided
        if ($searchQuery) {
            $query->where('hsnsac_name', 'like', "%$searchQuery%");
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $hsnsacList = $query->paginate($perPage);
        
        return view('app.hsnsac.list', compact('hsnsacList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hsnsacId = $request->input('hsnsac_id') ? decrypt($request->input('hsnsac_id')) : '';

        $validatedData = $request->validate([
            'hsnsac_name' => ['required', 'string', 'max:255']
        ]);

        if($hsnsacId)
        {
            HsnSac::where('id', $hsnsacId)->update([
                'hsnsac_name' => $request->hsnsac_name,
                'hsnsac_value' => $request->hsnsac_value,
            ]);

            return redirect()->route('hsnsac.index')->withSuccess('HSN/SAC updated successfully.');
        }
        else
        {
            $variant = HsnSac::create([
                'hsnsac_name' => $request->hsnsac_name,
                'hsnsac_value' => $request->hsnsac_value
            ]);

            return redirect()->route('hsnsac.index')->withSuccess('HSN/SAC created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->hsnsac_id);
            $hsnsac = HsnSac::findOrFail($id);
            $hsnsac->forceDelete();
            $response = [
                'status' => true,
                'message' => 'HSN/SAC deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete HSN/SAC.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
