<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceMark extends Model
{
    use HasFactory;


    protected $fillable = [
        'service',
        'id_user'
    ];
}
