<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{

    use HasFactory;
    protected $fillable = [
        'id_cliente',
        'modelo_veiculo',
        'placa_veiculo',
        'ano_veiculo',
        'cor_veiculo'
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
}
