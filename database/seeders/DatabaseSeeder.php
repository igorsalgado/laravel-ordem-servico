<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Veiculo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Cliente::factory(10)->create()->each(function ($cliente) {
            Veiculo::factory(2)->create(['id_cliente' => $cliente->id]);
        });

        Servico::factory(10)->create();
        //Veiculo::factory(10)->create();
    }
}
