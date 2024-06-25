<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Token;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Api\BaseController as BaseController;

class IdentifyTenant
{
    public function handle(Request $request, Closure $next)
    {
        // $host = $request->getHost();

        $tenantId = $request->header('company-id');

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
                $tenantId = $payload['company_id'];
            } catch (TokenExpiredException $e) {
                // Handle token expired exception
                return BaseController::sendError('Token has expired');
            } catch (TokenInvalidException $e) {
                // Handle token invalid exception
                return BaseController::sendError('Token is invalid');
            } catch (JWTException $e) {
                // Handle any other JWT exceptions
                return BaseController::sendError('Could not decode token');
            }
        } 

        if($tenantId)
        {
            $tenant = Tenant::where('id', $tenantId)->first();
            
            if (!$tenant) {
                $response = [
                    'success' => false,
                    'message' => 'Invalid company id.',
                ];
                return response()->json($response, '404');
            }

            $dbName = '';
            $dbUserName = '';
            $dbPassword = '';

            if(request()->getPort() != 443) {
                $dbName = 'tenant' . $tenant->id;
                $dbUserName = env('DB_USERNAME', 'root');
                $dbPassword = env('DB_PASSWORD', '');
            } else {
                $dbName = config('app.cpanel_user_name') . '_' . $tenant->id;
                $dbUserName = config('app.cpanel_user_name') . '_' . explode('-', $tenant->id)[0];
                $dbPassword = $tenant->id;
            }


            // Set the database connection dynamically
            config(['database.connections.tenant.database' => $dbName]);
            config(['database.connections.tenant.username' => $dbUserName]);
            config(['database.connections.tenant.password' => $tenant->id]);
            DB::purge('tenant');
            DB::reconnect('tenant');
            
            // Set the tenant ID globally
            // app()->instance('tenant_id', $tenant->tenant_id);

            DB::setDefaultConnection('tenant');

            return $next($request);
        }
        else
        {
            return $next($request);
        }
    }
}
