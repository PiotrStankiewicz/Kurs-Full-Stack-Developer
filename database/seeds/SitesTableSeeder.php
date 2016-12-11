<?php

use Illuminate\Database\Seeder;
use App\Sites;
class SitesTableSeeder extends Seeder
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
            $site = new \App\Sites();        //podnosimy obiekt modelu
            $site->title = $faker->city;       //tworzymy tabele
            $site->content = $faker->text(200);
            $site->category_id = rand(1,9);
            $site->save();
        }
    }
}
