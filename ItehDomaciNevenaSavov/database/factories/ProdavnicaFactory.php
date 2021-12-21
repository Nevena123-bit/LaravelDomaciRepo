<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdavnicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv'=>$this->faker->name(),
            'Ocena'=>$this->faker->numberBetween(1,5),
            'starost'=>$this->faker->numberBetween(1,30),
            'poreklo_id'=>$this->faker->numberBetween(1,9),
            'Grad'=>$this->faker->name(),
            'proizvodjac_id'=>$this->faker->numberBetween(1,9)


        ];
    }
}
