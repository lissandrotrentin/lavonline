<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class WashingMore extends Model
{
    use HasFactory;


    protected $fillable = [ 
        'comentario',
        'avaliacao',
        'washing_id'
    ];


    public function washing(){

        return $this->belongsTo('App\Models\Washing');

    }

}
