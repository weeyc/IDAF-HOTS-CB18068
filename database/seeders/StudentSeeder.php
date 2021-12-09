<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $value){
            DB::table('students') -> insert([
                'Name' => $faker->name,
                'Gender' => $faker->randomElement(['male', 'female']),
                'Address' =>  $faker->address,
                'Age' => rand(18,90),

            ]);
        }
    }
}
