<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;


class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'tipo',
        'peso',
        'volume',
        'valor_frete'
    ];

    protected $hidden = [
        'company_id',
        'seller_id'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
