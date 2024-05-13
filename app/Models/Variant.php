<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'variants';

    protected $fillable = [
        'id', 'variant_name'
    ];

    public function variantOptions(): HasMany
    {
        return $this->HasMany(VariantOption::class, 'variant_id', 'id');
    }
}
