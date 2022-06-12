<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgencijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'brojTelefona' => $this->faker->unique()->tollFreePhoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
