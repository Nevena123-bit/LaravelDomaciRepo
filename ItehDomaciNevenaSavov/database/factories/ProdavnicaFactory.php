<?php

namespace Database\Factories;

use App\Models\prodavnica;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdavnicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=prodavnica::class;
    public function definition()
    {
        return [
            'Naziv'=>$this->faker->name(),
            'Ocena'=>$this->faker->numberBetween(1,5),
            'starost'=>$this->faker->numberBetween(1,30),
           
            'Grad'=>$this->faker->name(),
            'proizvodjac_id'=>$this->faker->numberBetween(1,9)


        ];
    }
}
