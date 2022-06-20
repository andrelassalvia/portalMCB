<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumberWithExtension(),
            'email' => $this->faker->unique()->safeEmail(),
            'firma_aberta' => 0,
            'cnh' => 0,
            'cpf' => 0,
            'certificacao_digital' => 0,
            'statuscliente_id' => 1,
        ];
    }
}
