<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20 ; $i++) { 

            $new_vacation = new Vacation();
            // $new_vacation->id
            $new_vacation->departure_date = '2021-1-1';
            $new_vacation->return_date = '2021-1-1';
            $new_vacation->destination = 'Tenerife';
            $new_vacation->price = '£800';
            // $new_vacation->timestamps;
            $new_vacation->save();
        }

    }
}
