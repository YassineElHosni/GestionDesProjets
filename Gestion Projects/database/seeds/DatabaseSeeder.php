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
function example1(){
    $cM = "2018-11-";//currentMonth
    // Faker\Generator $faker;

    function createUser($val){
        $new = new App\User(['name'=>$val[0],'email'=>$val[1],'password'=>bcrypt($val[2]),'role'=>$val[3],'comment'=>$val[4],'remember_token'=>'u_remember_token_'.str_random(10)]);
        // $new->save();
    }
    function createClient($val){
        $new = new App\Client(['registrationNumber'=>'c_registrationNumber'.random_int(100, 900),'name'=>$val[0],'email'=>$val[1],'address'=>$val[2],'phoneNumber'=>random_int(10000, 90000),'comment'=>$val[3]]);
        // $new->save();
    }
    function createProject($val){
        $new = new App\Project(['title'=>$val[0],'description'=>$val[1],'limitDate'=>$val[2],'startDate'=>$val[3],'finishDate'=>$val[4],'displacement'=>$val[5],'state'=>$val[6],'comment'=>$val[7],'client_id'=>$val[8],'user_id'=>$val[9]]);
        // $new->save();
    }
    function createTask($val){//title,limitDate,state,progress,priority,comment
        $new = new App\Task(['title'=>$val[0],'limitDate'=>$val[1],'state'=>$val[2],'progress'=>$val[3],'priority'=>$val[4],'comment'=>$val[5],'project_id'=>$val[6]]);
        // $new->save();
    }

    function createTask_User($val){//user_id,task_id,startDate,finishDate,hoursCount,needCalculating 
        $new = new App\Task_User(['user_id'=>$val[0],'task_id'=>$val[1],'startDate'=>$val[2],
                                    'finishDate'=>$val[3],'hoursCount'=>$val[4],'needCalculating'=>$val[5]]);
        $new->save();
    }

        // App\User // name,email,password,role,comment,remember_token
        createUser(['u_name1','u_email1@mail.com','password1','ADMIN','u_comment1']);
        createUser(['u_name2','u_email2@mail.com','password2','ADMIN','u_comment2']);

        createUser(['u_name3','u_email3@mail.com','password3','MANAGER','u_comment3']);
        createUser(['u_name4','u_email4@mail.com','password4','MANAGER','u_comment4']);

        createUser(['u_name5','u_email5@mail.com','password5','PROJECT_MANAGER','u_comment5']);
        createUser(['u_name6','u_email6@mail.com','password6','PROJECT_MANAGER','u_comment6']);

        createUser(['u_name7','u_email7@mail.com','password7','EMPLOYEE','u_comment7']);
        createUser(['u_name8','u_email8@mail.com','password8','EMPLOYEE','u_comment8']);
        createUser(['u_name9','u_email9@mail.com','password9','EMPLOYEE','u_comment9']);
        createUser(['u_name10','u_email10@mail.com','password10','EMPLOYEE','u_comment10']);
        createUser(['u_name11','u_email11@mail.com','password11','EMPLOYEE','u_comment11']);
        createUser(['u_name12','u_email12@mail.com','password12','EMPLOYEE','u_comment12']);

        // App\Client // registrationNumber,name,email,address,phoneNumber,comment
        createClient(['c_name1','c_email1@mail.com','c_address1','c_comment1']);
        createClient(['c_name2','c_email2@mail.com','c_address2','c_comment2']);
        createClient(['c_name3','c_email3@mail.com','c_address3','c_comment3']);

        // App\Project // title,description,limitDate,startDate,finishDate,displacement,state, comment,client_id,user_id
        createProject(['p_title1','p_description1',$cM.'18',$cM.'12',null        ,0,1,'p_comment1',1,5]);
        createProject(['p_title2','p_description2',$cM.'19',$cM.'13',$cM.'18',1,0,'p_comment2',2,6]);//2
        createProject(['p_title3','p_description3',$cM.'20',$cM.'14',null        ,0,1,'p_comment3',3,5]);
        createProject(['p_title4','p_description4',$cM.'21',$cM.'15',$cM.'20',1,0,'p_comment4',2,6]);//4
        // App\Task // title,limitDate,state,progress,priority,comment
        createTask(['t_title1',$cM.'15','IN_PROGRESS',50,1,'t_comment1',1]);
        createTask(['t_title2',$cM.'16','FINISHED',100,2,'t_comment2',1]);
        createTask(['t_title3',$cM.'17','IN_PROGRESS',75,3,'t_comment3',1]);

        createTask(['t_title4',$cM.'16','VALIDATED',100,1,'t_comment4',2]);
        createTask(['t_title5',$cM.'17','VALIDATED',100,2,'t_comment5',2]);
        createTask(['t_title6',$cM.'18','VALIDATED',100,3,'t_comment6',2]);

        createTask(['t_title7',$cM.'17','FINISHED',100,1,'t_comment7',3]);
        createTask(['t_title8',$cM.'18','IN_PROGRESS',45,2,'t_comment8',3]);
        createTask(['t_title9',$cM.'19','IN_PROGRESS',90,3,'t_comment9',3]);

        createTask(['t_title10',$cM.'18','VALIDATED',100,1,'t_comment10',4]);
        createTask(['t_title11',$cM.'19','VALIDATED',100,2,'t_comment11',4]);
        createTask(['t_title12',$cM.'20','VALIDATED',100,3,'t_comment12',4]);
        // App\Task_User // user_id,task_id,startDate,finishDate

         //en cours 12 n 18, 15 16 17
        createTask_User([10,1,$cM.'12 8:30:00',$cM.'12 10:00:00',2,1]);
        createTask_User([7,1,$cM.'13 8:30:00',$cM.'13 10:30:00',2.5,1]);

        createTask_User([7,2,$cM.'15 8:30:00',$cM.'15 13:00:00',4,1]);
        createTask_User([8,2,$cM.'16 8:30:00',$cM.'16 11:00:00',5.2,1]);

        createTask_User([9,3,$cM.'14 8:30:00',null,5,0]);
         //validee 13 18 19, 16 17 18
        createTask_User([10,4,$cM.'16 8:30:00',$cM.'16 11:00:00',2.3,1]);

        createTask_User([8,5,$cM.'15 8:30:00',$cM.'15 13:02:00',3.6,1]);
        createTask_User([9,5,$cM.'16 8:30:00',$cM.'16 09:06:00',4.6,1]);
        createTask_User([11,5,$cM.'15 8:30:00',$cM.'15 10:50:00',5,1]);

        createTask_User([10,6,$cM.'18 8:30:00',$cM.'18 13:00:00',5,1]);
        createTask_User([12,6,$cM.'18 8:30:00',$cM.'18 12:00:00',1.5,1]);
         //en-cours 14 n 20, 17 18 19
        createTask_User([10,7,$cM.'16 8:30:00',$cM.'16 09:30:00',3,1]);

        createTask_User([11,8,$cM.'16 8:30:00',null,5,0]);
        createTask_User([8,8,$cM.'17 8:30:00',null,2,0]);

        createTask_User([12,9,$cM.'18 8:30:00',null,4.1,0]);
        createTask_User([9,9,$cM.'18 8:30:00',null,3,0]);
        //validee 15 20 21, 18 19 20
        createTask_User([7,10,$cM.'20 8:30:00',$cM.'20 13:00:00',4.1,1]);
        createTask_User([9,10,$cM.'20 8:30:00',$cM.'20 13:00:00',3.9,1]);

        createTask_User([10,11,$cM.'19 8:30:00',$cM.'19 13:00:00',2,1]);
        createTask_User([8,11,$cM.'19 8:30:00',$cM.'19 13:00:00',3,1]);

        createTask_User([9,12,$cM.'21 8:30:00',$cM.'21 13:00:00',2.3,1]);



    ////////////////////////////////////////////////////////////////////
}


    example1();

    }
}

