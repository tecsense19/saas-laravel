<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Token;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class IdentifyTenant
{
    public function handle(Request $request, Closure $next)
    {
        // $host = $request->getHost();

        $tenantId = $request->header('company_id');

        $tokenString = $request->header('Authorization');
        if($tokenString)
        {
            // Extract the JWT token from the Authorization header
            if (Str::startsWith($tokenString, 'Bearer ')) {
                $tokenString = Str::substr($tokenString, 7);
            }

            // Create a Token object from the token string
            $token = new Token($tokenString);

            // Decode the JWT token
            $payload = JWTAuth::manager()->decode($token);

            $tenantId = $payload['company_id'];
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

            // Set the database connection dynamically
            config(['database.connections.tenant.database' => 'tenant'.$tenant->id]);
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
