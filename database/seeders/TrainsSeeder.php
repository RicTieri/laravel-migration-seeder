<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use League\Csv\Reader;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('csv/trains.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $record) {
            Train::create([
                'company' => $record['company'],
                'departure_station' => $record['departure_station'],
                'arrival_station' => $record['arrival_station'],
                'travel_date' => $record['travel_date'],
                'departure_time' => $record['departure_time'],
                'arrival_time' => $record['arrival_time'],
                'train_code' => $record['train_code'],
                'number_of_coaches' => $record['number_of_coaches'],
                'on_time' => $record['on_time'],
                'canceled' => $record['canceled'],
            ]);
        }
    }
}