<?php

namespace App\Http\Controllers\App;

use App\Models\{User, Category, HsnSac, QRPoint, Variant, VariantOption, Product };
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.product.index');
    }

    public function create()
    {
        $categoryList = Category::get();
        $hsnSacList = HsnSac::get();
        $qrPointList = QRPoint::get();
        $variantList = Variant::with('variantOptions')->get();

        return view('app.product.create', compact('categoryList', 'hsnSacList', 'qrPointList', 'variantList'));
    }

    public function checkProductName(Request $request)
    {
        $productName = $request->input('product_name');
        $productId = $request->input('product_id') ? decrypt($request->input('product_id')) : '';

        // Check if a category with the given name exists
        if($productId)
        {
            $productExists = Product::where('product_name', $productName)->where('id', '!=', $productId)->exists();
        }
        else
        {
            $productExists = Product::where('product_name', $productName)->exists();
        }

        // Return JSON response indicating if product name is unique
        echo json_encode(!$productExists);
    }

    public function list(Request $request)
    {
        // Retrieve search query parameter for product name
        $searchName = $request->input('search');

        // Query to retrieve products with their categories
        $query = Product::with('getCategory');

        // Apply search filter if category name search query is provided
        if ($searchName) {
            $query->whereHas('getCategory', function ($query) use ($searchName) {
                $query->where('category_name', 'like', "%$searchName%");
            });
        }

        // Apply search filter if product name search query is provided
        if ($searchName) {
            $query->orWhere('product_name', 'like', "%$searchName%");
        }

        // Paginate the results
        $perPage = env('PER_PAGE_RECORD_COUNT', 10);
        $productList = $query->paginate($perPage);

        foreach ($productList as $key => $value) {
            // Check if $value is null or doesn't have 'product_variant_options'
            if (!$value || !isset($value->product_variant_options)) {
                continue; // Skip to the next iteration if invalid
            }
        
            $selectedVariants = collect(json_decode($value->product_variant_options));
        
            $variants = $selectedVariants->map(function ($selectedVariant) {
                $variant = Variant::with('variantOptions')->find($selectedVariant->variant_id[0]);
        
                if ($variant) {
                    $variantName = $variant->variant_name;
                    $optionNames = $variant->variantOptions->whereIn('id', $selectedVariant->variant_opt_id)->pluck('name')->toArray();
        
                    return (object) [
                        'variant_name' => $variantName,
                        'variant_opt_name' => $optionNames,
                    ];
                }
        
                return null;
            })->filter();
        
            // Assign variants only if $value is not null and has 'product_variant_options'
            if ($value && isset($value->product_variant_options)) {
                $value->variant = $variants->all();
            }
        }
        
        return view('app.product.list', compact('productList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mapping = [];
        if(isset($request->product_variant)) {
            foreach ($request->product_variant as $key => $variant) 
            {
                if(isset($request->product_variant_options[$key])) {
                    $newObj = new \StdClass;
                    $newObj->variant_id = $variant;
                    $newObj->variant_opt_id = isset($request->product_variant_options[$key]) ? $request->product_variant_options[$key] : [];
                    $mapping[] = $newObj;
                }
            }
        }

        $productId = $request->input('product_id') ? decrypt($request->input('product_id')) : '';
        $message = '';

        $validatedData = $request->validate([
            'product_name' => ['required', 'string', 'max:255']
        ]);

        if($productId)
        {
            $category = Product::where('id', $productId)->update([
                'category_id' => $request->category_id,
                'qr_id' => $request->qr_id,
                'hsnsac_id' => $request->hsnsac_id,
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'distributor_price' => $request->distributor_price,
                'product_description' => $request->product_description,
                'product_variant_options' => json_encode($mapping),
            ]);

            $message = 'Product updated successfully.';
        }
        else
        {
            $product = Product::create([
                'category_id' => $request->category_id,
                'qr_id' => $request->qr_id,
                'hsnsac_id' => $request->hsnsac_id,
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'distributor_price' => $request->distributor_price,
                'product_description' => $request->product_description,
                'product_variant_options' => json_encode($mapping),
            ]);

            $productId = $product->id;
            $message = 'Product created successfully.';
        }

        if($file = $request->file('product_image'))
        {
            $path = 'public/uploads/product/';

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);

            $img = 'public/uploads/product/' . $filename;

            if($productId)
            {
                $getDetails = Product::where('id', $productId)->first();
                if ($getDetails) {
                    $proFilePath = $getDetails->product_image;
                    $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                    if (file_exists(public_path('/public/'.$proPath))) {
                        \File::delete(public_path('/public/'.$proPath));
                    }
                }
            }
            
            Product::where('id', $productId)->update([
                'product_image' => $img,
            ]);
        }
        
        if($file = $request->file('product_coupon_image'))
        {
            $path = 'public/uploads/product_coupon/';

            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);

            $img = 'public/uploads/product_coupon/' . $filename;

            if($productId)
            {
                $getDetails = Product::where('id', $productId)->first();
                if ($getDetails) {
                    $proFilePath = $getDetails->product_coupon_image;
                    $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                    if (file_exists(public_path('/public/'.$proPath))) {
                        \File::delete(public_path('/public/'.$proPath));
                    }
                }
            }
            
            Product::where('id', $productId)->update([
                'product_coupon_image' => $img,
            ]);
        }

        return redirect()->route('product.index')->withSuccess($message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($productId)
    {
        $id = decrypt($productId);
        $categoryList = Category::get();
        $hsnSacList = HsnSac::get();
        $qrPointList = QRPoint::get();
        $variantList = Variant::with('variantOptions')->get();

        $productDetails = Product::where('id', $id)->first();

        if($productDetails) {    
            $selectedVariants = collect(json_decode($productDetails->product_variant_options));
        
            $variants = $selectedVariants->map(function ($selectedVariant) {
                $variant = Variant::with('variantOptions')->find($selectedVariant->variant_id[0]);
        
                if ($variant) {
                    $variantName = $variant->variant_name;
                    $optionNames = $variant->variantOptions->whereIn('id', $selectedVariant->variant_opt_id)->pluck('id')->toArray();
        
                    return (object) [
                        'variant_name' => $variantName,
                        'variant_opt_name' => $optionNames,
                    ];
                }
        
                return null;
            })->filter();
        
            // Assign variants only if $value is not null and has 'product_variant_options'
            if ($productDetails && isset($productDetails->product_variant_options)) {
                $productDetails->variant = $variants->all();
            }
        }

        return view('app.product.edit', compact('categoryList', 'hsnSacList', 'qrPointList', 'variantList', 'productDetails', 'productId'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $id = decrypt($request->product_id);
            $product = Product::findOrFail($id);
            if ($product) {
                $proFilePath = $product->product_image;
                $proPath = substr(strstr($proFilePath, 'public/'), strlen('public/'));
                if (file_exists(public_path('/public/'.$proPath))) {
                    \File::delete(public_path('/public/'.$proPath));
                }
            }
            $product->forceDelete();
            $response = [
                'status' => true,
                'message' => 'Product deleted successfully.', // Add your additional data here
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Failed to delete product.', // Add your additional data here
            ];
            return response()->json($response);
        }
    }
}
