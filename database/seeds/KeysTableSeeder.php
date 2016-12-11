<?php

use Illuminate\Database\Seeder;
use App\Keys;

class KeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $keys = new \App\Keys();
            $keys->key = $faker->creditCardNumber;
            $keys->save();
        }
    }
}
