<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'event_uuid', 'event_title', 'sort_description','description','event_location','state_id','city_id','event_date','event_time','event_image','qr_code'
    ];

    /**
     * Get the profile picture URL attribute.
     *
     * @return string
     */
    public function getEventImageAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return url('/') . '/public/uploads/event.png';
    }
    
    public function getQrCodeAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return '';
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
