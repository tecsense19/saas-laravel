<?php

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Token;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Api\BaseController as BaseController;

if (!function_exists('asset_url')) {
    function asset_url($path)
    {
        // Get the current subdomain from the request
        $subdomain = request()->getHost();

        // Construct the asset URL based on the subdomain and port
        $port = request()->getPort();
        $baseUrl = config('app.asset_base_url');

        // Adjust the base URL format based on whether a port is present
        $baseUrlFormat = $port ? 'http://%s:%d/%s' : 'http://%s/%s';

        // return sprintf($baseUrlFormat, $subdomain, $port, ltrim('saasdemo/public/'.$path, '/'));
        return sprintf($baseUrlFormat, $subdomain, $port, ltrim($path, '/'));
    }
}

if (!function_exists('extractToken')) {
    function extractToken($request)
    {
        $tokenString = $request->header('Authorization');
        if($tokenString)
        {
            // Extract the JWT token from the Authorization header
            if (Str::startsWith($tokenString, 'Bearer ')) {
                $tokenString = Str::substr($tokenString, 7);
            }

            // Create a Token object from the token string
            $token = new Token($tokenString);

            try {
                // Decode the JWT token
                $payload = JWTAuth::manager()->decode($token);
                if(isset($payload['user_id']) && $payload['user_id'] == '')
                {
                    return 'Token is invalid! User id is missing.';
                }
                else
                {
                    return $payload;
                }
            } catch (TokenExpiredException $e) {
                // Handle token expired exception
                return 'Token has expired';
            } catch (TokenInvalidException $e) {
                // Handle token invalid exception
                return 'Token is invalid';
            } catch (JWTException $e) {
                // Handle any other JWT exceptions
                return 'Could not decode token';
            }
        }

        return false;
    }
}

// if (!function_exists('asset_url')) {
//     function asset_url($path)
//     {
//         $baseUrl = config('app.asset_base_url');
//         return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
//     }
// }
