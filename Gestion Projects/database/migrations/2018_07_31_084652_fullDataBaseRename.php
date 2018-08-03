<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FullDataBaseRename extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->longText('description');
            $table->dateTime('limitDate');
            $table->dateTime('startDate')->nullable();
            $table->dateTime('finishDate')->nullable();
            $table->boolean('displacement');//true == 1 == Oui and false == 0 == Non
            $table->boolean('state');////true == 1 == en-cours and false == 0 == clos
            $table->longText('comment');

            $table->timestamps();
        });
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('title');
            $table->DateTime('limitDate');
            $table->enum('state',array('IN_PROGRESS','FINISHED','VALIDATED'));//'en-cours', 'fini', 'validée'
            $table->integer('progress');
            $table->integer('priority');//1==DoRightAway,2==PlanToDoASAP,3==Delegate,4==DumpOrPostPone
            $table->longText('comment');

            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',array('ADMIN','MANAGER','PROJECT_MANAGER','EMPLOYEE'));
            $table->longText('comment');

            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registrationNumber',80)->unique();/*num de série..*/
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phoneNumber',15);
            $table->longText('comment');

            $table->timestamps();
        });
        Schema::create('task_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('task_id')->unsigned()->index();
            $table->foreign('task_id')->references('id')->on('tasks');

            $table->primary(['task_id','user_id']);

            $table->DateTime('startDate')->nullable();
            $table->DateTime('finishDate')->nullable();

            $table->timestamps();

        });
        Schema::table('tasks', function(Blueprint $table)
        {
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')
                ->on('projects')->onDelete('cascade');
        });
        Schema::table('projects', function(Blueprint $table)
        {
            $table->integer('client_id')->nullable()->unsigned();
            $table->foreign('client_id')->references('id')
                ->on('clients')->onDelete('cascade');
        });
        Schema::table('projects', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
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
        //
    }
}
