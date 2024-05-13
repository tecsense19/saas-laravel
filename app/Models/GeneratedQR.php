<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneratedQR extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'generated_qr';

    protected $fillable = [
        'id', 'product_id', 'qr_point_id', 'code_uuid', 'banch_code', 'qr_code_image', 'valid_on'
    ];

    public function getProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
    public function getQrPoint(): BelongsTo
    {
        return $this->belongsTo(QRPoint::class, 'qr_point_id', 'id');
    }

    public function getQrCodeImageAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return '';
    }
}
