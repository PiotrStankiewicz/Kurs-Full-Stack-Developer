<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('name');
            $table->increments('email');
            $table->integer('category_id')->unsigned();
            $table->integer('groups_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('groups_id')
                ->references('id')
                ->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');

    }
}
