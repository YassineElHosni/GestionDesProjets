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

        //


////////////////////////////////////////////////////////////////////

//Full DataBase example 1:
    // Faker\Generator $faker;
function createUser($val){
    $nus = new App\User(['name'=>$val[0],'email'=>$val[1],'password'=>bcrypt($val[2]),'role'=>$val[3],'comment'=>$val[4],'remember_token'=>'u_remember_token_'.str_random(10)]);
    $nus->save();
}
function createClient($val){
    $nus = new App\User(['registrationNumber'=>'c_registrationNumber'.random_int(10000, 90000),'name'=>$val[0],'email'=>$val[1],'address'=>$val[2],'phoneNumber'=>random_int(10000, 90000),'comment'=>$val[3]]);
    $nus->save();
}
function createProject($val){
    $nus = new App\User(['title'=>$val[0],'description'=>$val[1],'limitDate'=>$val[2],'startDate'=>$val[3],'finishDate'=>$val[4],'displacement'=>$val[5],'state'=>$val[6],'comment'=>$val[7],'client_id'=>$val[8],'user_id'=>$val[9]]);
    $nus->save();
}
function createTask(){
    
}

    // App\User // name,email,password,role,comment,remember_token
    createUser(['u_name1','u_email1','password1','ADMIN','u_comment1']);
    createUser(['u_name2','u_email2','password2','ADMIN','u_comment2']);

    createUser(['u_name3','u_email3','password3','MANAGER','u_comment3']);
    createUser(['u_name4','u_email4','password4','MANAGER','u_comment4']);

    createUser(['u_name5','u_email5','password5','PROJECT_MANAGER','u_comment5']);
    createUser(['u_name6','u_email6','password6','PROJECT_MANAGER','u_comment6']);

    createUser(['u_name7','u_email7','password7','EMPLOYEE','u_comment7']);
    createUser(['u_name8','u_email8','password8','EMPLOYEE','u_comment8']);
    createUser(['u_name9','u_email9','password9','EMPLOYEE','u_comment9']);
    createUser(['u_name10','u_email10','password10','EMPLOYEE','u_comment10']);
    createUser(['u_name11','u_email11','password11','EMPLOYEE','u_comment11']);
    createUser(['u_name12','u_email12','password12','EMPLOYEE','u_comment12']);



    // App\Client // registrationNumber,name,email,address,phoneNumber,comment
        // new App\User({'c_registrationNumber'.$faker->numberBetween($min = 10000, $max = 90000),
        //     'c_name1','c_email1','c_address1',$faker->e164PhoneNumber,'c_comment1'})->save();
        // new App\User({'c_registrationNumber'.$faker->numberBetween($min = 10000, $max = 90000),
        //     'c_name2','c_email2','c_address2',$faker->e164PhoneNumber,'c_comment2'})->save();
        // new App\User({'c_registrationNumber'.$faker->numberBetween($min = 10000, $max = 90000),
        //     'c_name3','c_email3','c_address3',$faker->e164PhoneNumber,'c_comment3'})->save();

    createClient(['c_name1','c_email1','c_address1','c_comment1']);
    createClient(['c_name2','c_email2','c_address2','c_comment2']);
    createClient(['c_name3','c_email3','c_address3','c_comment3']);

    // App\Project // title,description,limitDate,startDate,finishDate,displacement,state, comment,client_id,user_id
    createProject(['p_title1','p_description1','18-09-2018','12-09-2018',null        ,0,1,'p_comment1',1,5]);
    createProject(['p_title2','p_description2','19-09-2018','13-09-2018','18-09-2018',1,0,'p_comment2',2,6]);//2
    createProject(['p_title3','p_description3','20-09-2018','14-09-2018',null        ,0,1,'p_comment3',3,5]);
    createProject(['p_title4','p_description4','21-09-2018','15-09-2018','20-09-2018',1,0,'p_comment4',2,6]);//4
    // App\Task // title,limitDate,state,progress,priority,comment
    new App\Task({'t_title1','15-09-2018','IN_PROGRESS',50,1,'t_comment1',1})->save();
    new App\Task({'t_title2','16-09-2018','FINISHED',100,2,'t_comment2',1})->save();
    new App\Task({'t_title3','17-09-2018','IN_PROGRESS',75,3,'t_comment3',1})->save();

    new App\Task({'t_title4','16-09-2018','VALIDATED',100,1,'t_comment4',2})->save();
    new App\Task({'t_title5','17-09-2018','VALIDATED',100,2,'t_comment5',2})->save();
    new App\Task({'t_title6','18-09-2018','VALIDATED',100,3,'t_comment6',2})->save();

    new App\Task({'t_title7','17-09-2018','FINISHED',100,1,'t_comment7',3})->save();
    new App\Task({'t_title8','18-09-2018','IN_PROGRESS',45,2,'t_comment8',3})->save();
    new App\Task({'t_title9','19-09-2018','IN_PROGRESS',90,3,'t_comment9',3})->save();

    new App\Task({'t_title10','18-09-2018','VALIDATED',100,1,'t_comment10',4})->save();
    new App\Task({'t_title11','19-09-2018','VALIDATED',100,2,'t_comment11',4})->save();
    new App\Task({'t_title12','20-09-2018','VALIDATED',100,3,'t_comment12',4})->save();
    // // App\Task_User // user_id,task_id,startDate,finishDate

    //  //en cours 12 n 18, 15 16 17
    // new App\Task({10,1,'12-09-2018',null})->save();
    // new App\Task({7,1,'13-09-2018',null})->save();

    // new App\Task({7,2,'12-09-2018','15-09-2018'})->save();
    // new App\Task({8,2,'14-09-2018','16-09-2018'})->save();

    // new App\Task({9,3,'14-09-2018',null})->save();
    //  //validee 13 18 19, 16 17 18
    // new App\Task({10,4,'13-09-2018','16-09-2018'})->save();

    // new App\Task({8,5,'13-09-2018','15-09-2018'})->save();
    // new App\Task({9,5,'14-09-2018','16-09-2018'})->save();
    // new App\Task({11,5,'14-09-2018','15-09-2018'})->save();

    // new App\Task({10,6,'16-09-2018','18-09-2018'})->save();
    // new App\Task({12,6,'17-09-2018','18-09-2018'})->save();
    //  //en-cours 14 n 20, 17 18 19
    // new App\Task({10,7,'15-09-2018','16-09-2018'})->save();

    // new App\Task({11,8,'16-09-2018',null})->save();
    // new App\Task({8,8,'17-09-2018',null})->save();

    // new App\Task({12,9,'18-09-2018',null})->save();
    // new App\Task({9,9,'18-09-2018',null})->save();
    // //validee 15 20 21, 18 19 20
    // new App\Task({7,10,'18-09-2018','12-09-2018'})->save();
    // new App\Task({9,10,'19-09-2018','20-09-2018'})->save();

    // new App\Task({10,11,'19-09-2018','19-09-2018'})->save();
    // new App\Task({8,11,'19-09-2018','19-09-2018'})->save();

    // new App\Task({9,12,'20-09-2018','21-09-2018'})->save();



////////////////////////////////////////////////////////////////////





    }
}
