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
        // $us = factory(App\User::class, 3)->make();
        // foreach ($us as $u)
        //   $u->save();
        // $cs = factory(App\Client::class, 5)->make();
        // foreach ($cs as $c)
        //   $c->save();
        // $ps = factory(App\Projet::class, 5)->make();
        // foreach ($ps as $p)
        //     $p->save();
        $ts = factory(App\Tache::class, 5)->make();
        foreach ($ts as $t)
            $t->save();

    }
}
