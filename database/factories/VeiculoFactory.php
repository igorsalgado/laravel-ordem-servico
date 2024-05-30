<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Veiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{

    protected $model = Veiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::factory(),
            'modelo_veiculo' => $this->faker->firstName(),
            'placa_veiculo' => strtoupper($this->faker->bothify('???####')),
            'ano_veiculo' => $this->faker->year,
            'cor_veiculo' => $this->faker->safeColorName

        ];
    }
}
