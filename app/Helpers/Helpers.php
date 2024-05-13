<?php

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

// if (!function_exists('asset_url')) {
//     function asset_url($path)
//     {
//         $baseUrl = config('app.asset_base_url');
//         return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
//     }
// }
