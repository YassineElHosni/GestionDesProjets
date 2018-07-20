<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacheUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tache_user', function (Blueprint $table) {
          $table->unsignedInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         $table->unsignedInteger('tache_id');
         $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');

         $table->DateTime('date_debut');
         $table->DateTime('date_fin');

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tache_user');
    }
}
