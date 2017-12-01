<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()
            ->references('id')->on('users');
             $table->integer('location_id')->unsigned()
            ->references('id')->on('locations');
            $table->string('des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_plans');
    }
}
