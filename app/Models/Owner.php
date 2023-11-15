<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;



    protected $fillable = [
        'cnpj',
        'razao_social',
        'cpf_responsavel', 
        'nome_responsavel', 
        'data_nasc', 
        'contato',
        'cidade'
    ];


    public function washings(){

       return $this->hasMany('App\Models\Washing');

    }
}
