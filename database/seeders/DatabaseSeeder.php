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
        \App\Models\Titre::factory(40)->create();
        \App\Models\Resume::factory(10)->create();


        $this->call([
            CoordonneeSeeder::class,
            StatistiquesSeeder::class,
            CompetenceSeeder::class,
            PhotoSeeder::class
        ]);
    }
}
