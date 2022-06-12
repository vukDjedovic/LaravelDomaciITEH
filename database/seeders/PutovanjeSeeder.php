<?php

namespace Database\Seeders;

use App\Models\Putovanje;
use Illuminate\Database\Seeder;

class PutovanjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Putovanje::factory()->count(120)->create();
    }
}
