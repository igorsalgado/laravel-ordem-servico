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
        Schema::create('ordemservicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servico');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_veiculo');
            $table->decimal('valor_total');
            $table->date('data_criacao');
            $table->timestamps();

            $table->foreign('id_servico')->references('id')->on('servicos')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_veiculo')->references('id')->on('veiculos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordemservicos');
    }
};
