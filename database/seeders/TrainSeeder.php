<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 50; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure = $faker->city();
            $new_train->arrival = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time= $faker->time();
            $new_train->code_transport= $faker->unique()->bothify('??-#####');
            $new_train->carriage= $faker->randomNumber(2);
            $new_train->margin_time= $faker->randomNumber(2);
            $new_train->cancelled= $faker->boolean();

            dump($new_train);

            $new_train->save();



        }
    }
}
