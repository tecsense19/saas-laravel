<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'user_id', 'branch_name', 'bank_name', 'account_number', 'ifsc_code', 'ac_holder_name'
    ];
}