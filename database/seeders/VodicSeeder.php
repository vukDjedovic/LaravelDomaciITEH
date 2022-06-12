<?php

namespace Database\Seeders;

use App\Models\Vodic;
use Illuminate\Database\Seeder;

class VodicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vodic::factory()->count(70)->create();
    }
}
