<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\{ ScanBarcode, GeneratedQR, BankAccount, Event, EventUsers };

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

    public function redeemRequest(Request $request)
    {
        try {
            // Get all input data from the request
            $input = $request->all();

            // Extract token and check if user_id exists
            $extractToken = extractToken($request);
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {               
                
                // Validate the incoming request data
                $validator = Validator::make($input, [
                    'total_point' => 'required|numeric|gt:0',
                ]);

                // If validation fails, return the first error message
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                $checkBankAccount = BankAccount::where('user_id', $extractToken['user_id'])->first();
                if(!$checkBankAccount) {
                    return $this->sendError('Please update your bank account details for redeem amount.');
                }                

                $totalCredit = ScanBarcode::where('scan_type', 'Credit')->where('user_id', $extractToken['user_id'])->sum('total_point');
                $totalDebit = ScanBarcode::where('scan_type', 'Debit')->where('user_id', $extractToken['user_id'])->sum('total_point');
                $total = ScanBarcode::where('user_id', $extractToken['user_id'])->sum('total_point');

                $totalCrAmount = ($totalCredit - $totalDebit);

                if($totalCrAmount < $request->total_point)
                {
                    return $this->sendError('You have not sufficient balance.');
                }

                // Create a new scan record
                $redeemArr = ScanBarcode::create([
                    'user_id' => $extractToken['user_id'],
                    'total_point' => $request->total_point,
                    'scan_type' => 'Debit',
                    'scan_date' => now(), // Use Laravel's helper for current timestamp
                    'created_by' => $extractToken['user_id']
                ]);

                // Return a successful response with the scan details
                return $this->sendResponse($redeemArr, 'Redeem request send successfully.');
            } else {
                // If user_id is not found in the token, return the token extraction error
                return $this->sendError($extractToken);
            }
        } catch (\Exception $e) {
            // Catch any exception and return the error message
            return $this->sendError($e->getMessage());
        }
    }

    public function scanEventBarcode(Request $request)
    {
        try {
            // Get all input data from the request
            $input = $request->all();

            // Extract token and check if user_id exists
            $extractToken = extractToken($request);
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                
                // Validate the incoming request data
                $validator = Validator::make($input, [
                    'event_uuid' => 'required|string',
                ]);

                // If validation fails, return the first error message
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                // Retrieve the barcode details along with associated product and QR point
                $barcode = Event::where('event_uuid', $request->event_uuid)
                                      ->first();

                // If barcode is not found, return an error
                if (!$barcode) {
                    return $this->sendError('Invalid barcode.');
                }

                // Check if the barcode has already been scanned by the user
                $alreadyScanned = EventUsers::where([
                    'user_id' => $extractToken['user_id'],
                    'event_id' => $barcode->id
                ])->exists();

                // If already scanned, return an error
                if ($alreadyScanned) {
                    return $this->sendError('This barcode has already been scanned.');
                }

                // Create a new scan record
                $scanBarcodeArr = EventUsers::create([
                    'user_id' => $extractToken['user_id'],
                    'event_id' => $barcode->id,
                    'event_join_date' => now()
                ]);

                // Return a successful response with the scan details
                return $this->sendResponse($scanBarcodeArr, 'Event join successfully.');
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