<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalogue extends Model
{
    use SoftDeletes;

    protected $table = 'catalogue';

    protected $fillable = [
        'id', 'catalogue_title', 'file_path'
    ];

    public function getFilePathAttribute($value)
    {
        if ($value) {
            return url('/').'/'.$value;
        }

        return '';
    }
}