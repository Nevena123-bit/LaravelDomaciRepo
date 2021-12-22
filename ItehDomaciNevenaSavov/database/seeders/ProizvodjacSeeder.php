<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProizvodjacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\proizvodjac::factory()->count(10)->create();

    }
}
