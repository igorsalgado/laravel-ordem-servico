<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{

    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_cliente' => $this->faker->name,
            'email_cliente' => $this->faker->email,
            'telefone_cliente' => $this->faker->phoneNumber,
            'logradouro_cliente' => $this->faker->streetAddress,
            'numero_endereco_cliente' => $this->faker->buildingNumber,
            'bairro_cliente' => $this->faker->citySuffix,
            'cidade_cliente' => $this->faker->city,
            'estado_cliente' => $this->faker->state,
            'cep_cliente' => $this->faker->postcode
        ];
    }
}
