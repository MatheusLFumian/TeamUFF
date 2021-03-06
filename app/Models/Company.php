<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cnpj',
        'cidade',
        'estado'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
