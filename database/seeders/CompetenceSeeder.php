<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert([
            [
                "competence"=>"HTML",
                "pourcentage"=>"100%"
            ],
            [
                "competence"=>"CSS",
                "pourcentage"=>"80%"
            ],
            [
                "competence"=>"Javascript",
                "pourcentage"=>"75%"
            ],
            [
                "competence"=>"PHP",
                "pourcentage"=>"50%"
            ],
            [
                "competence"=>"WordPressCMS",
                "pourcentage"=>"90%"
            ],
            [
                "competence"=>"PhotoShop",
                "pourcentage"=>"80%"
            ]
        ]);
    }
}
