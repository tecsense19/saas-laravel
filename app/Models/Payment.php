<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment';

    protected $fillable = [
        'id', 'tenant_id', 'subscription_id', 'plan_id', 'payment_getway', 'transaction_id', 'amount', 'currency', 'status'
    ];
}
