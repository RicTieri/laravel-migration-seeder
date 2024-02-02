<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            $train->company = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->travel_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->departure_time = $faker->time;
            $train->arrival_time = $faker->time;
            $train->train_code = $faker->word;
            $train->number_of_coaches = $faker->numberBetween(6, 12);
            $train->on_time = $faker->boolean;
            $train->canceled = $faker->boolean;
            $train->save();
        }
    }
}