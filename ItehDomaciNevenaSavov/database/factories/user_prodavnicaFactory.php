<?php

namespace Database\Factories;

use App\Models\user_prodavnica;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_prodavnicaFactory extends Factory
{
    protected $model=user_prodavnica::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prodavnica_id'=>$this->faker->numberBetween(1,10),
            'user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
