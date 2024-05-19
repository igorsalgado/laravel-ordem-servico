<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome_cliente',
        'email_cliente',
        'telefone_cliente',
        'logradouro_cliente',
        'numero_endereco_cliente',
        'bairro_cliente',
        'cidade_cliente',
        'estado_cliente',
        'cep_cliente'

    ];

    // public function veiculos()
    // {
    //     return $this->hasMany(Veiculo::class);
    // }
}
