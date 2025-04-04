<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Pagamento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagamento>
 */
class PagamentoFactory extends Factory
{
    protected $model = PagamentoFactory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            // 'valor' => $this->faker->randomFloat(2, 10, 1000),
            // 'metodo_pagamento' => $this->faker->randomElement(['Cartão de Crédito', 'Boleto', 'Pix']),
            // 'status_pagamento' => $this->faker->randomElement(['pendente', 'concluído', 'cancelado']),
            // 'data_pagamento' => $this->faker->dateTimeBetween('-1 year', 'now'),
            // Adicione outros campos conforme necessário
        ];
    }

    // <!-- ESSA CLASSE VAI FICAR POR ULTIMO POR CONTA DAS CHAVES ESTRANGEIRAS -->
}
