<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\{ ScanBarcode, GeneratedQR };

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\BaseController as BaseController;

use DB;
use Validator;

class BarcodeController extends BaseController
{
    /**
     * Scan a barcode and store the scan details if valid and not already scanned.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function scanCode(Request $request)
    {
        try {
            // Get all input data from the request
            $input = $request->all();

            // Extract token and check if user_id exists
            $extractToken = extractToken($request);
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                
                // Validate the incoming request data
                $validator = Validator::make($input, [
                    'code_uuid' => 'required|string',
                ]);

                // If validation fails, return the first error message
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                // Retrieve the barcode details along with associated product and QR point
                $barcode = GeneratedQR::with(['getProduct', 'getQrPoint'])
                                      ->where('code_uuid', $request->code_uuid)
                                      ->first();

                // If barcode is not found, return an error
                if (!$barcode) {
                    return $this->sendError('Invalid barcode.');
                }

                // Check if the barcode has already been scanned by the user
                $alreadyScanned = ScanBarcode::where([
                    'user_id' => $extractToken['user_id'],
                    'generated_qr_id' => $barcode->id
                ])->exists();

                // If already scanned, return an error
                if ($alreadyScanned) {
                    return $this->sendError('This barcode has already been scanned.');
                }

                // Create a new scan record
                $scanBarcodeArr = ScanBarcode::create([
                    'user_id' => $extractToken['user_id'],
                    'generated_qr_id' => $barcode->id,
                    'qr_point_id' => $barcode->getQrPoint->id,
                    'product_id' => $barcode->getProduct->id,
                    'total_point' => $barcode->getQrPoint->qr_amount,
                    'scan_type' => 'Credit',
                    'scan_date' => now(), // Use Laravel's helper for current timestamp
                    'created_by' => $extractToken['user_id']
                ]);

                // Return a successful response with the scan details
                return $this->sendResponse($scanBarcodeArr, 'Barcode scanned successfully.');
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