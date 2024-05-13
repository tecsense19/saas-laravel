<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WildcardCorsHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the request is for a font file
        if ($this->isFontFileRequest($request)) {
            // Get the value of the Origin header
            $origin = $request->header('Origin');

            // Set the Access-Control-Allow-Origin header to the value of the Origin header
            return $next($request)
                ->header('Access-Control-Allow-Origin', $origin)
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');
        }

        // Proceed with the request without adding CORS headers
        return $next($request);
    }

    private function isFontFileRequest($request)
    {
        // Check if the request path ends with a font file extension
        return preg_match('/\.(ttf|otf|woff|woff2)$/i', $request->getPathInfo());
    }
}
