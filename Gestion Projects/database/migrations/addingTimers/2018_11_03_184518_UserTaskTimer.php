<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTaskTimer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Timers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('startDate')->nullable();
            $table->dateTime('pauseDate')->nullable();
            // $table->integer('idTask');
            $table->timestamps();
        });
        Schema::table('Timers', function(Blueprint $table)
        {
            $table->integer('idTask')->unsigned();
            $table->foreign('idTask')->references('id')
                ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Timers');
    }
}
