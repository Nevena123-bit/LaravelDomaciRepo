<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdavnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\prodavnica::factory()->count(10)->create();

    }
}
