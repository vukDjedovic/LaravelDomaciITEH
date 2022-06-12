<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VodicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'brojTelefona' => $this->faker->unique()->tollFreePhoneNumber(),
            'agencija_id' => $this->faker->numberBetween($min = 1, $max = 40)
        ];
    }
}
