<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*running faker
        $user = factory(App\User::class)->make();
	//for ($i=0; $i < 3; $i++) {
		$user->save();

	$tasks = factory(App\Tache::class)->make();
	//for ($i=0; $i < 3; $i++) {
		$tasks->save();
	}*/
        // $us = factory(App\User::class, 5)->make();
        // foreach ($us as $u)
        //   $u->save();
        // $cs = factory(App\Client::class, 10)->make();
        // foreach ($cs as $c)
        //   $c->save();
        // $ps = factory(App\Project::class, 5)->make();
        // foreach ($ps as $p)
        //     $p->save();
        // $ts = factory(App\Task::class, 5)->make();
        // foreach ($ts as $t)
        // {
        //     if($t->state!='IN_PROGRESS')$t->progress=100;
        //         else if($t->progress==100)$t->progress=1;
        //     $t->save();
        // }

    }
}
