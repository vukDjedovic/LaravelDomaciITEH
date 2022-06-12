<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PutovanjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datumPolaska' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gradPolazak' => $this->faker->city(),
            'gradDolazak' => $this->faker->city(),
            'brojPutnika' => $this->faker->numberBetween($min = 5, $max = 500),
            'vodic_id' => $this->faker->numberBetween($min = 1, $max = 70),
        ];
    }
}
