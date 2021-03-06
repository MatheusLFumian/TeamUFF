<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;


class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email'
    ];

    protected $hidden = [
        'company_id'
    ];
}
