<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'id_veiculo',
        'id_servico',
        'valor_total',
        'data_criacao'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function servicos()
    {
        return $this->belongsToMany(Servico::class);
    }
}