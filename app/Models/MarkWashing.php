<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MarkWashing extends Model
{
    use HasFactory;

    protected $fillable = [

            'dia',
            'horario_retirada',
            'horario_entrega',
            'observacao',
            'id_washing',
            'user_id'

    ];



    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
