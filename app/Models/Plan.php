<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plans';

    protected $fillable = [
        'id', 'plan_title', 'plan_description', 'plan_currency', 'plan_month_price', 'plan_year_price', 'plan_month_text', 'plan_year_text','plan_status', 'button_string'
    ];

    public function getPlanOptions(): HasMany
    {
        return $this->HasMany(PlanOption::class, 'plan_id', 'id');
    }
}
