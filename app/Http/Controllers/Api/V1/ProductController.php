<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\{ Product, Variant, VariantOption };

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\BaseController as BaseController;

use DB;
use Validator;

class ProductController extends BaseController
{
    /**
     * Scan a barcode and store the scan details if valid and not already scanned.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function productList(Request $request)
    {
        try {
            // Get all input data from the request
            $input = $request->all();

            // Extract token and check if user_id exists
            $extractToken = extractToken($request);
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                
                // // Validate the incoming request data
                // $validator = Validator::make($input, [
                //     'code_uuid' => 'required|string',
                // ]);

                // // If validation fails, return the first error message
                // if ($validator->fails()) {
                //     return $this->sendError($validator->errors()->first());
                // }

                $productList = Product::with(['getCategory'])->get();

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

                // Return a successful response with the scan details
                return $this->sendResponse($productList, 'Product list get successfully.');
            } else {
                // If user_id is not found in the token, return the token extraction error
                return $this->sendError($extractToken);
            }
        } catch (\Exception $e) {
            // Catch any exception and return the error message
            return $this->sendError($e->getMessage());
        }
    }
}