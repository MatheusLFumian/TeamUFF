<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;


class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagem',
    ];
}
