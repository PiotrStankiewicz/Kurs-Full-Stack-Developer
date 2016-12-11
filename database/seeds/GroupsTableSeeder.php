<?php

use Illuminate\Database\Seeder;
use App\Groups;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();  //tworzymy sobie zmienna
        for ($i=0; $i<10; $i++) {      //petla
            $site = new \App\Groups();        //podnosimy obiekt modelu
            $site->name = $faker->text(10);       //tworzymy tabele
            $site->save();
        }
    }
}
