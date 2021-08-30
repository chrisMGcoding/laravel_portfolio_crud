<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatistiquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistiques')->insert([
            [
                "titre"=>"Happy Clients",
                "nombre"=>232
            ],
            [
                "titre"=>"Projects",
                "nombre"=>521
            ],
            [
                "titre"=>"Hours of Support",
                "nombre"=>1463
            ],
            [
                "titre"=>"Hard workers",
                "nombre"=>15
            ],
        ]);
    }
}
