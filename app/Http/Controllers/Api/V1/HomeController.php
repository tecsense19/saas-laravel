<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Tenant;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Token;
use App\Http\Controllers\Api\BaseController as BaseController;
use DB;
use Validator;

class HomeController extends BaseController
{
    public function getAllCompany(Request $request)
    {
        try {
            $input = $request->all();

            $getAllCompany = Tenant::get();
                
            return $this->sendResponse($getAllCompany, 'Company get successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            // Extract company_id from request headers
            $companyId = $request->header('company_id');

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $user = User::where('email', $request->email)->first();

            // Create custom claims array with company_id
            $customClaims = ['company_id' => $companyId, 'login_user_id' => $user->id];

            $tokenWithClaims = JWTAuth::claims($customClaims)->fromUser($user); // Assuming $user is the authenticated user

            $authData['userDetails'] = $user;
            $authData['token'] = $tokenWithClaims;
            $authData['token_type'] = 'bearer';
            $authData['expires_in'] = JWTAuth::factory()->getTTL() * 60 * 24;

            return $this->sendResponse($authData, 'Login successfully.');

        } catch (\Exception $e) {
            Log::error([
                'method' => __METHOD__,
                'error' => [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'message' => $e->getMessage()
                ],
                'created_at' => now()->format("Y-m-d H:i:s")
            ]);
            return $this->sendError($e->getMessage());
        }
    }

    public function getAllUser(Request $request)
    {
        try {
            $input = $request->all();

            // $validator = Validator::make($input, [
            //     'phone_code' => 'required|string',
            //     'mobile_no' => 'required|numeric'
            // ]);
        
            // if ($validator->fails()) {
            //     return $this->sendError($validator->errors()->first());
            // }
            // $getAllUser = DB::connection('tenant')->table('users')->get();
            $getAllUser = User::get();
                
            return $this->sendResponse($getAllUser, 'User get successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}