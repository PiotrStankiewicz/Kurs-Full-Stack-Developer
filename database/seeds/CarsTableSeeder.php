<?php

use Illuminate\Database\Seeder;
use App\Cars;
class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   //uzupelnia tabele danymi, dodaje rekordy do bazy danych
    {
        $faker = \Faker\Factory::create();  //tworzymy sobie zmienna
        for ($i=0; $i<100; $i++) {      //petla
            $car = new \App\Cars();        //podnosimy obiekt modelu
            $car->name = $faker->city;       //tworzymy tabele
            $car->engine = $faker->text();
            $car->save();
        }
    }
}
