<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\{ Tenant, User, Country, State, City, DeviceToken };

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Token;
use App\Http\Controllers\Api\BaseController as BaseController;
use DB;
use Validator;

class HomeController extends BaseController
{
    /**
     * Retrieve all companies.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCompany(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Get all companies from the Tenant model
            $getAllCompany = Tenant::all();

            // Return the companies with a success message
            return $this->sendResponse($getAllCompany, 'Companies retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            // Extract company_id from request headers
            $companyId = $request->header('company-id');

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $user = User::where('email', $request->email)->first();

            // Create custom claims array with company_id
            $customClaims = ['company_id' => $companyId, 'user_id' => $user->id];

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

    public function sendOtp(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Validate the request data
            $validator = Validator::make($input, [
                'country_code' => 'required|string',
                'mobile_no' => 'required|string',
                'user_role' => 'required|string',
            ]);
        
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            $checkUser = User::where('mobile_no', $request->mobile_no)
                                ->whereHas('roles', function ($query) use ($request) {
                                    $query->where('id', $request->user_role);
                                })
                                ->first();

            if($checkUser)
            {
                User::where('id', $checkUser->id)->update(['mobile_otp' => '112233']);

                return $this->sendResponse(['otp' => '112233'], 'OTP send successfully.');
            }
            else
            {
                return $this->sendError('User not found.');
            }

        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function verifyOtp(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Validate the request data
            $validator = Validator::make($input, [
                'country_code' => 'required|string',
                'mobile_no' => 'required|string',
                'mobile_otp' => 'required|string',
                'user_role' => 'required|string',
            ]);
        
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            $checkUser = User::where(['mobile_no' => $request->mobile_no, 'mobile_otp' => $request->mobile_otp])
                                ->whereHas('roles', function ($query) use ($request) {
                                    $query->where('id', $request->user_role);
                                })
                                ->first();

            if($checkUser)
            {
                // Create custom claims array with company_id
                $customClaims = ['company_id' => $request->header('company-id'), 'user_id' => $checkUser->id];

                $tokenWithClaims = JWTAuth::claims($customClaims)->fromUser($checkUser); // Assuming $user is the authenticated user

                $authData['userDetails'] = $checkUser;
                $authData['token'] = $tokenWithClaims;
                $authData['token_type'] = 'bearer';
                $authData['expires_in'] = JWTAuth::factory()->getTTL() * 60 * 24;

                return $this->sendResponse($authData, 'User login successfully.');
            }
            else
            {
                return $this->sendError('Invalid otp.');
            }

        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'device_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            // if ($validator->fails()) 
            // {
            //     $data['error'] = '';
            //     if ($validator->errors()->has('user_id')) {
            //         $data['error'] = 'User id is required.';
            //     } elseif ($validator->errors()->has('device_id')) {
            //         $data['error'] = 'Device id is required.';
            //     } 

            //     return $this->sendError($data['error']);
            // }

            $extractToken = extractToken($request);
            if(isset($extractToken['user_id']) && $extractToken['user_id'] != '')
            {
                $userData = User::where('id', $extractToken['user_id'])->first();
                if($userData)
                {
                    $deviceInfo = DeviceToken::where(['id' => $extractToken['user_id'], 'device_id' => $input['device_id']])->forceDelete();
                    return $this->sendResponse($extractToken['user_id'], 'User logout successfully.');
                }
                else
                {
                    return $this->sendError('Invalid user id.');
                }
            }
            else
            {
                return $this->sendError($extractToken);
            }            
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Retrieve all users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllUser(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Get all users from the User model
            $getAllUser = User::all();
                
            // Return the users with a success message
            return $this->sendResponse($getAllUser, 'Users retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Retrieve all roles except 'Admin'.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllRole(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Get all roles where the name is not 'Admin'
            $getAllRole = Role::where('name', '!=', 'Admin')->get();
                
            // Return the roles with a success message
            return $this->sendResponse($getAllRole, 'Roles retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Retrieve all countries.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCountry(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Get all countries
            $countries = Country::all();
            
            // Return the countries with a success message
            return $this->sendResponse($countries, 'Country list retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Retrieve states based on the given country ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function countryWiseState(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Validate the request data
            $validator = Validator::make($input, [
                'country_id' => 'required|integer'
            ]);
        
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            // Get states by country ID
            $states = State::where('country_id', $request->country_id)->get();
                
            // Return the states with a success message
            return $this->sendResponse($states, 'States retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }
    
    /**
     * Retrieve cities based on the given state ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function stateWiseCity(Request $request)
    {
        try {
            // Retrieve all input data from the request
            $input = $request->all();

            // Validate the request data
            $validator = Validator::make($input, [
                'state_id' => 'required|integer'
            ]);
        
            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first());
            }

            // Get cities by state ID
            $cities = City::where('state_id', $request->state_id)->get();
                
            // Return the cities with a success message
            return $this->sendResponse($cities, 'Cities retrieved successfully.');
        } catch (\Exception $e) {
            // Return the error message if an exception occurs
            return $this->sendError($e->getMessage());
        }
    }
}