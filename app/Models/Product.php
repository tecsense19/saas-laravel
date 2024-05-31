<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $fillable = [
        'id', 'category_id', 'qr_id', 'hsnsac_id', 'product_name', 'product_price', 'distributor_price', 'product_description', 'product_variant_options', 'product_image', 'product_coupon_image'
    ];

    public function getProductImageAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return url('/') . '/public/uploads/product.png';
    }

    public function getProductCouponImageAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return '';
    }

    public function getCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
