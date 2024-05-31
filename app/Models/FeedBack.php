<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeedBack extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedback';

    protected $fillable = [
        'id', 'user_id', 'comment_text', 'comment_img'
    ];

    /**
     * Get the profile picture URL attribute.
     *
     * @return string
     */
    public function getCommentImgAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return '';
    }

    public function userDetails(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
