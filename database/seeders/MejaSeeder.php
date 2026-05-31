<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MejaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('meja')->insert([
                'merkmeja' => 'Meja ' . $faker->firstName,
                'stockmeja' => $faker->numberBetween(0, 100),
                'tersedia' => $faker->randomElement(['Y', 'N'])
            ]);
        }
    }
}