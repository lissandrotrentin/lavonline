<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ImagesWashing extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'washing_id'
    ];

    public function washing()
    {
        return $this->belongsTo('App\Models\Washing');
    }
}
