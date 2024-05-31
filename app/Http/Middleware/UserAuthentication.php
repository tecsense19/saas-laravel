<?php

namespace App\Http\Middleware;

use Closure;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use App\Models\User;
use App\Http\Controllers\Api\BaseController as BaseController;

class UserAuthentication {

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $requestHeader = substr($request->header('content-type'), 0, strpos($request->header('content-type'), ';'));
        //dd($request->headers->all());
        if ($request->header('authorization') !== null) {
            try {
                if(!$user = JWTAuth::parseToken()->authenticate()) {
                    $data = [
                        'message' => 'Invalid User.'
                    ];
                    return BaseController::sendError($data['message']);
                }
                if(JWTAuth::parseToken()->authenticate()->is_delete=="Yes") {
                    $token = JWTAuth::getToken();
                    JWTAuth::parseToken()->invalidate($token);
                    $data = [
                        'message' => 'Invalid Token.'
                    ];
                    return BaseController::sendError($data['message']);
                }
            } catch (\PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException $e) {
                if ($e instanceof \PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException) {
                    $data = [
                        'message' => 'Token Expired.',
                    ];
                } elseif ($e instanceof \PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException) {
                    $data = [
                        'message' => 'Invalid Token.',
                    ];
                } else {
                    $data = [
                        'message' => 'Token not found.',
                    ];
                }
                return BaseController::sendError($data['message']);
            }

            $request->merge(["user" => $user]);
            $response = $next($request);
            $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Content-Range, Content-Disposition, Content-Description, X-Auth-Token');
            $response->header('Access-Control-Allow-Methods', 'GET,POST,OPTIONS,DELETE,PUT');

            return $response;
        }else{
            return BaseController::sendError('Unauthorized.');
        }
    }

}