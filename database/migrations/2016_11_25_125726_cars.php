<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    //do stworzenia tabeli
    {
        Schema::create('cars', function (Blueprint $table) {   //tworzy tabele sites
            $table->increments('id');   //tworzy tabele id i dalej title content
            $table->string('name');
            $table->integer('engine');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //usuwa
    {
        Schema::drop('cars');  //usuwa tablice sites

    }
}
