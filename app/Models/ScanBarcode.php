<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScanBarcode extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scan_barcode';

    protected $fillable = [
        'id', 'user_id', 'generated_qr_id', 'qr_point_id', 'product_id', 'total_point', 'scan_type', 'scan_date', 'created_by', 'updated_by'
    ];

    public function getUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function getGeneratedQR(): BelongsTo
    {
        return $this->belongsTo(GeneratedQR::class, 'generated_qr_id', 'id');
    }
    
    public function getProduct(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
    public function getQrPoint(): BelongsTo
    {
        return $this->belongsTo(QRPoint::class, 'qr_point_id', 'id');
    }
}
