<?php

use Illuminate\Database\Seeder;
use App\Vacation;
use Faker\Generator as Faker;

class VacationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) { 

            $new_vacation = new Vacation();
            // $new_vacation->id
            $new_vacation->departure_date = $faker->date('Y_m_d');
            $new_vacation->return_date = $faker->date('Y_m_d');;
            $new_vacation->destination = $faker->country();
            $new_vacation->price = '£' . $faker->numberBetween(500, 800);
            // $new_vacation->timestamps;
            $new_vacation->save();
        }

    }
}
