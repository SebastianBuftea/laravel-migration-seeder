<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->word();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTime();
            $new_train->number_train = $faker->numberBetween(0, 99999);
            $new_train->number_wagons = $faker->numberBetween(0, 100);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->delated = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
