<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv'=>$this->faker->userName(),
            'Grad'=>$this->faker->userName(),

        ];
    }
}
