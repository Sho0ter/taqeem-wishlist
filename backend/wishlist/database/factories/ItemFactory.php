<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(6),
            'seller' => $this->faker->name(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 1000)
        ];
    }
}
