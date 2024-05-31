<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\BankAccount;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\BaseController as BaseController;

use App\Services\ImageUploadService;

use DB;
use Validator;

class BankAccountController extends BaseController
{
    /**
     * Add or update a bank account for the authenticated user.
     * 
     * @param \Illuminate\Http\Request $request The incoming request containing bank account details and the authorization token.
     * @return \Illuminate\Http\JsonResponse The response indicating success or failure of the operation.
     */
    public function addBankAccount(Request $request) 
    {
        try {
            // Retrieve all input data from the request.
            $input = $request->all();

            // Extract the token from the request header.
            $extractToken = extractToken($request);
            
            // Check if the user_id is present in the extracted token.
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                // Validate the request input to ensure all required fields are provided.
                $validator = Validator::make($input, [
                    'branch_name' => 'required|string',
                    'bank_name' => 'required|string',
                    'account_number' => 'required|string',
                    'ifsc_code' => 'required|string',
                    'ac_holder_name' => 'required|string',
                ]);
                
                // If validation fails, return an error response.
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                // Check if the bank account already exists for the user.
                $existingAccount = BankAccount::where(function ($query) use ($request, $extractToken) {
                    $query->where(['account_number' => $request->account_number, 'user_id' => $extractToken['user_id']]);
                    if ($request->has('bank_account_id')) {
                        $query->where('id', '!=', $request->bank_account_id);
                    }
                })->first();

                // If the account already exists, return an error response.
                if ($existingAccount) {
                    return $this->sendError('Bank account already exists.');
                }

                // Check if 'bank_account_id' exists in the request and is not null or empty.
                if (@$request->bank_account_id) {
                    // Query the 'BankAccount' model to find a record with the provided 'bank_account_id'.
                    $checkAccount = BankAccount::where('id', $request->bank_account_id)->first();
                    if (!$checkAccount) {
                        // If no record is found, return an error response indicating an invalid bank account ID.
                        return $this->sendError('Invalid bank account id.');
                    }
                }                

                // Define the data to be updated or created.
                $data = [
                    'user_id' => $extractToken['user_id'],
                    'branch_name' => $request->branch_name,
                    'bank_name' => $request->bank_name,
                    'account_number' => $request->account_number,
                    'ifsc_code' => $request->ifsc_code,
                    'ac_holder_name' => $request->ac_holder_name,
                ];
        
                // Use updateOrCreate to either update an existing record or create a new one.
                $bankAccount = BankAccount::updateOrCreate(
                    ['id' => $request->bank_account_id],
                    $data
                );
                
                // Determine the message based on whether the record was created or updated.
                $message = $bankAccount->wasRecentlyCreated ? 'Bank account created successfully' : 'Bank account updated successfully';

                // Return a success response with the bank account data and message.
                return $this->sendResponse($bankAccount, $message);
            } else {
                // If the user_id is not present in the extracted token, return an error response.
                return $this->sendError($extractToken);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response.
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * List all bank accounts for the authenticated user.
     * 
     * @param \Illuminate\Http\Request $request The incoming request containing the authorization token.
     * @return \Illuminate\Http\JsonResponse The response with the list of bank accounts or an error message.
     */
    public function listBankAccount(Request $request)
    {
        try {
            // Retrieve all input data from the request.
            $input = $request->all();

            // Extract the token from the request header.
            $extractToken = extractToken($request);
            
            // Check if the user_id is present in the extracted token.
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                // Retrieve all bank accounts for the user, ordered by ID in descending order.
                $listAllAcount = BankAccount::where('user_id', $extractToken['user_id'])
                    ->orderBy('id', 'desc')
                    ->get();

                // Return a success response with the list of bank accounts.
                return $this->sendResponse($listAllAcount, 'Bank account list retrieved successfully.');
            } else {
                // If the user_id is not present in the extracted token, return an error response.
                return $this->sendError($extractToken);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response.
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Delete a bank account for the authenticated user.
     * 
     * @param \Illuminate\Http\Request $request The incoming request containing the bank account ID and the authorization token.
     * @return \Illuminate\Http\JsonResponse The response indicating success or failure of the deletion.
     */
    public function deleteBankAccount(Request $request)
    {
        try {
            // Retrieve all input data from the request.
            $input = $request->all();

            // Extract the token from the request header.
            $extractToken = extractToken($request);
            
            // Check if the user_id is present in the extracted token.
            if (isset($extractToken['user_id']) && $extractToken['user_id'] != '') {
                // Validate the request input to ensure 'bank_account_id' is provided.
                $validator = Validator::make($input, [
                    'bank_account_id' => 'required|string'
                ]);
                
                // If validation fails, return an error response.
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                // Delete the bank account with the given ID.
                $deleteBankAccount = BankAccount::where('id', $request->bank_account_id)->forceDelete();

                // Return a success response if the deletion was successful.
                return $this->sendResponse($deleteBankAccount, 'Bank account deleted successfully.');
            } else {
                // If the user_id is not present in the extracted token, return an error response.
                return $this->sendError($extractToken);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return an error response.
            return $this->sendError($e->getMessage());
        }
    }
}