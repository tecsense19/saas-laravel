<?php

namespace App\Http\Controllers\App;

use App\Models\{
    User,
    Variant,
    VariantOption,
};
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.variant.index');
    }

    public function checkVariantName(Request $request)
    {
        $variantName = $request->input('variant_name');
        $variantId = $request->input('variant_id') ? decrypt($request->input('variant_id')) : '';
        
        // Check if a variant with the given name exists
        if($variantId)
        {
            $variantExists = Variant::where('variant_name', $variantName)->where('id', '!=', $variantId)->exists();
        }
        else
        {
            $variantExists = Variant::where('variant_name', $variantName)->exists();
        }

        // Return JSON response indicating if variant name is unique
        echo json_encode(!$variantExists);
    }
    
    public function checkVariantOptionName(Request $request)
    {
        $variantOptName = $request->input('variant_option');
        $variantOptId = $request->input('variant_id') ? decrypt($request->input('variant_id')) : '';
        
        $variantOptExists = true;
        // Check if a variant with the given name exists
        if($variantOptId)
        {
            $variantOptExists = VariantOption::where('name', $variantOptName)->where('id', '!=', $variantOptId)->exists();
        }
        else
        {
            $variantOptExists = VariantOption::where('name', $variantOptName)->exists();
        }

        // Return JSON response indicating if variant name is unique
        echo json_encode(!$variantOptExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter
        $searchQuery = $request->input('search');

        // Query to retrieve variants with variant options
        $query = Variant::with('variantOptions');

        // Apply search filter if search query is provided
        if ($searchQuery) {
            $query->where('variant_name', 'like', "%$searchQuery%")
                ->orWhereHas('variantOptions', function ($query) use ($searchQuery) {
                    $query->where('name', 'like', "%$searchQuery%");
                });
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $variantList = $query->paginate($perPage);
        
        return view('app.variant.list', compact('variantList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variantId = $request->input('variant_id') ? decrypt($request->input('variant_id')) : '';

        $validatedData = $request->validate([
            'variant_name' => ['required', 'string', 'max:255']
        ]);

        if($variantId)
        {
            Variant::where('id', $variantId)->update([
                'variant_name' => $request->variant_name
            ]);

            if(count($request->variant_option) > 0)
            {
                VariantOption::where('variant_id', $variantId)->whereNotIn('id', $request->variant_option_ids)->forceDelete();

                foreach ($request->variant_option as $key => $value) 
                {
                    if($value) {
                        if(isset($request->variant_option_ids[$key]))
                        {
                            $variantOption = VariantOption::where('id', $request->variant_option_ids[$key])->update([
                                'name' => $value,
                            ]);
                        }
                        else
                        {
                            $variantOption = VariantOption::create([
                                'variant_id' => $variantId,
                                'name' => $value,
                            ]);
                        }
                    }
                }
            }

            return redirect()->route('variant.index')->withSuccess('Variant updated successfully.');
        }
        else
        {
            $variant = Variant::create([
                'variant_name' => $request->variant_name
            ]);

            if(count($request->variant_option) > 0)
            {
                foreach ($request->variant_option as $key => $value) 
                {
                    if($value) {
                        $variantOption = VariantOption::create([
                            'variant_id' => $variant->id,
                            'name' => $value,
                        ]);
                    }
                }
            }

            return redirect()->route('variant.index')->withSuccess('Variant created successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->variant_id);
            $variant = Variant::findOrFail($id);
            $variant->variantOptions()->forceDelete();
            $variant->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Variant deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete variant.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
