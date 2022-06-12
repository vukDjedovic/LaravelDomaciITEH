<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $agencijaSeeder = new AgencijaSeeder();
        $agencijaSeeder->run();

        $vodicSeeder = new VodicSeeder();
        $vodicSeeder->run();

        $putovanjeSeeder = new PutovanjeSeeder();
        $putovanjeSeeder->run();
    }
}
