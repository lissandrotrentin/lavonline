<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Washing extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nome_fantasia',
        'rua',
        'bairro',
        'numero',
        'cidade',
        'cep',
        'owner_id',
        'image'
    ];


    public function owner()
    {
        return $this->belongsTo('App\Models\Owner');
    }

    public function mores()
    {
        return $this->hasMany('App\Models\WashingMore');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }


}
