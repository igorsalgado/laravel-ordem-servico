<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('email_cliente')->nullable();;
            $table->string('telefone_cliente');
            $table->string('logradouro_cliente');
            $table->string('numero_endereco_cliente');
            $table->string('bairro_cliente');
            $table->string('cidade_cliente');
            $table->string('estado_cliente',);
            $table->string('cep_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
