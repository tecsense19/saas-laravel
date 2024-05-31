<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceToken extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'device_token';

    protected $fillable = [
        'user_id',
        'device_id'
    ];
}
