<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;


class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor_venda',
        'valor_frete',
        
    ];

    protected $hidden = [
        'company_id',
        'seller_id'
    ];

    protected $casts = [
        'data_saida',
        'data_chegada'
    ];

}
