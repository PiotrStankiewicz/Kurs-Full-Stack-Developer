<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();  //tworzymy sobie zmienna
        for ($i=0; $i<100; $i++) {      //petla
            $site = new \App\Products();        //podnosimy obiekt modelu
            $site->name = $faker->name;       //tworzymy tabele
            $site->price = $faker->text(10);
            $site->categories_id = rand(1,9);
            $site->group_keys_id = rand(1,9);
            $site->save();
        }
    }
}
