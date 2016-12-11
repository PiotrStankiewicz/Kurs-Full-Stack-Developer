<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            $product = new \App\Products();        //podnosimy obiekt modelu
            $product->name = $faker->name;       //tworzymy tabele
            $product->price = $faker->text(10);
            $product->categories_id = rand(1,9);
            $product->group_keys_id = rand(1,9);
            $product->save();
        }
    }
}
