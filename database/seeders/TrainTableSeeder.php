<?php

namespace Database\Seeders;

// aggiunte
use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Uso ciclo foreach per generarne 10 alla volta

        $trains = range(1, 10);

        foreach ($trains as $train) {
            $newTrainInfo = new Train();
            $newTrainInfo->company = $faker->company;
            $newTrainInfo->departure_station = $faker->city;
            $newTrainInfo->arrival_station = $faker->city;
            $newTrainInfo->departure_time = $faker->dateTimeThisMonth();
            $newTrainInfo->arrival_time = $faker->dateTimeThisMonth();
            $newTrainInfo->train_code = $faker->unique()->randomNumber(9);
            $newTrainInfo->number_of_carriages = $faker->numberBetween(9, 15);
            $newTrainInfo->on_time = $faker->boolean;
            $newTrainInfo->cancelled = $faker->boolean;
            // Salvo
            $newTrainInfo->save();
        }
    }
}
