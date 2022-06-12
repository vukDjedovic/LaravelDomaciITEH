<?php

namespace Database\Seeders;

use App\Models\Agencija;
use Illuminate\Database\Seeder;

class AgencijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agencija::factory()->count(40)->create();
    }
}
