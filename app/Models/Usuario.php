<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'ci',
        'rango',
        'numeroDePlaca',
        'fechaDeNacimiento',
        'sexo',
        'direccion',
        'celular',
        'email',
        'password',
        'tipo',
    ];
}
