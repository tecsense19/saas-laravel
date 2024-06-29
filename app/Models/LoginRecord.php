<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Carbon\Carbon;

class LoginRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'device',
        'ip_address',
        'location',
        'login_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getLoginTimeForHumansAttribute()
    {
        // Retrieve the 'login_time' attribute (assuming it's a date/datetime column in your database)
        $loginTime = $this->login_time;

        // Define the Indian time zone
        $indianTimeZone = new \DateTimeZone('Asia/Kolkata');

        try {
            // Parse the 'login_time' attribute and set the timezone
            $loginDateTime = Date::parse($loginTime)->setTimezone($indianTimeZone);

            // Get the current time in IST
            $now = Date::now($indianTimeZone);

            // Calculate the difference
            $interval = $now->diff($loginDateTime);

            // Format the difference
            if ($interval->y > 0) {
                return $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
            } elseif ($interval->m > 0) {
                return $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
            } elseif ($interval->d > 0) {
                return $interval->d . ' day' . ($interval->d > 1 ? 's' : '') . ' ago';
            } elseif ($interval->h > 0) {
                return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
            } elseif ($interval->i > 0) {
                return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
            } else {
                return $interval->s . ' second' . ($interval->s > 1 ? 's' : '') . ' ago';
            }
        } catch (\Exception $e) {
            // Handle any DateTime parsing exceptions
            return 'Error: ' . $e->getMessage();
        }
    }
}
