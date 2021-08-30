<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoordonneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordonnees')->insert([
            [
                "anniversaire"=>"14 Oct 1993",
                "website"=>"molengeek.com",
                "phone"=>"0472 69 25 89",
                "ville"=>"Bruxelles",
                "age"=>"27ans",
                "diplome"=>"Bâchelier en tourisme",
                "email"=>"chris.degroef@gmail.com",
                "freelance"=>"disponible"
            ],
        ]);
    }
}
