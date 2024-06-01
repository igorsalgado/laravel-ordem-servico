<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'veiculo_id',
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
    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'ordem_servico_servicos');
    }
}
