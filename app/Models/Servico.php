<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao', 'valor'
    ];

    public function ordensServicos()
    {
        return $this->belongsToMany(OrdemServico::class);
    }
}
