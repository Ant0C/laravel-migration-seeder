<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TableTrain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $companies = ['FrecciaRossa','Italo','FrecciaArgento','Regionale'];
        $stations = ['Milano','Roma','Napoli','Firenze'];
        $statuses = ['Cancellato','Operativo'];

        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train-> company = $faker->randomElement($companies);
            $new_train-> departure_station = $faker->randomElement($stations);
            $new_train-> arrival_station = $faker->randomElement($stations);
            $new_train-> arrival_time = $faker->date('Y-m-d H:i:s');
            $new_train-> departure_time = $faker->date('Y-m-d H:i:s');
            $new_train-> train_code = $faker->numberBetween(4000, 9000);
            $new_train-> number_of_carriages = $faker->numberBetween(4,12);
            $new_train-> delay_time = $faker->numberBetween(0,100);
            $new_train-> status = $faker->randomElement($statuses);

            $new_train->save();
        }
    }
}
