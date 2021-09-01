<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
                [
                    "nom"=>"portfolio-1.jpg"
                ],
                [
                    "nom"=>"portfolio-2.jpg"
                ],
                [
                    "nom"=>"portfolio-3.jpg"
                ],
                [
                    "nom"=>"portfolio-4.jpg"
                ],
                [
                    "nom"=>"portfolio-5.jpg"
                ],
                [
                    "nom"=>"portfolio-6.jpg"
                ],
                [
                    "nom"=>"portfolio-7.jpg"
                ],
                [
                    "nom"=>"portfolio-8.jpg"
                ],
                [
                    "nom"=>"portfolio-9.jpg"
                ],
           ]);
    }
}
