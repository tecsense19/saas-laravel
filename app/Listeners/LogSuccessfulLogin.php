<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Request;
use App\Models\LoginRecord;
use Stevebauman\Location\Facades\Location;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        $user = $event->user;
        $ipAddress = Request::ip();
        $location = Location::get($ipAddress);
        $device = $this->getDevice();

        LoginRecord::create([
            'user_id' => $user->id,
            'status' => 'success',
            'device' => $device,
            'ip_address' => $ipAddress,
            'location' => $location ? $location->city . ', ' . $location->regionName . ', ' . $location->countryName : 'Unknown',
        ]);
    }

    private function getDevice()
    {
        $agent = $_SERVER['HTTP_USER_AGENT'];

        // Detect device
        if (preg_match('/mobile/i', $agent)) {
            $device = 'Mobile';
        } elseif (preg_match('/tablet/i', $agent)) {
            $device = 'Tablet';
        } elseif (preg_match('/linux/i', $agent)) {
            $device = 'Linux';
        } elseif (preg_match('/macintosh|mac os x/i', $agent)) {
            $device = 'Mac';
        } elseif (preg_match('/windows|win32/i', $agent)) {
            $device = 'Windows';
        } else {
            $device = 'Unknown';
        }

        // Detect browser
        if (preg_match('/MSIE|Trident/i', $agent)) {
            $browser = 'Internet Explorer';
        } elseif (preg_match('/Firefox/i', $agent)) {
            $browser = 'Firefox';
        } elseif (preg_match('/Chrome/i', $agent)) {
            $browser = 'Chrome';
        } elseif (preg_match('/Safari/i', $agent) && !preg_match('/Chrome/i', $agent)) {
            $browser = 'Safari';
        } elseif (preg_match('/Opera|OPR/i', $agent)) {
            $browser = 'Opera';
        } elseif (preg_match('/Edge/i', $agent)) {
            $browser = 'Edge';
        } else {
            $browser = 'Unknown';
        }

        return $device . ' - ' . $browser;
    }
}
