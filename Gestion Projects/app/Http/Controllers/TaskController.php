<?php

namespace App\Http\Controllers;
use App\User;
use App\Task;
use App\Project;
use App\Task_User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ts = Task::all();
        foreach ($ts as $t) {
            //get the name of the project that the current task belongs to.
            $t->project_title=Project::find($t->project_id)->title;

            //get the smallest 'date_debut' that all user have on the current task
            $t->d_d=Task_User::where('task_id',$t->id)
                ->min('startDate');

        }
        // dd($ts);
        return view('tasks.index' ,compact('ts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /*--get all free employee--*/
      $employees=User::where('role','Like','EMPLOYEE')->get();
      $projects=Project::all();
      return view('tasks.create',compact('employees','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $newTask = new Task([
            'title' => $request->title,
            'limitDate' => $request->limitDate,
            'state' =>'IN_PROGRESS',
            'progress' => 0,
            'priority' => ($request->priority_RadioBtn),
            'comment' => $request->comment,
            'user_id' =>$request->user_id[0],
            'project_id'=>$request->project_id[0],
          ]);
      $newTask->save();

      flash('Task created Successfully !')->success();

      return redirect()->route('Tasks.show',$newTask->id)->withTask($newTask);
    }

    /**
     *voir une task choisit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $t=Task::find($id);/*get task*/
      $p=Project::find($t->project_id);/*get the projet related to this task*/
      $id_us=Task_User::where('task_id','=',$t->id)->get(['user_id']);/*get the employee related to this task*/
      $us=User::whereIn('id', $id_us)->get(['name','email','comment']);/*get infos of thoes employee from user table*/

        return view('tasks.show')->withTask($t)->withProject($p)->withUsers($us);
    }
    /*
    * checking if id user already exist in an array of current users
    * in order todisplay just the other users not related to an x task
    */
    public function IDexist($id,$id_us){
      if(!in_array("id",$id_us)){/*user not in current workers*/
        return true;
      }else {
        return false;
      }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

      $t=Task::find($id);
      $p=Project::find($t->project_id);/*get the projet related to this task*/
      $id_us=Task_User::where('task_id','=',$t->id)->get(['user_id']);/*get the employee related to this task*/
      ///////////////// getting the array of worker'ids
      $id=array();
      foreach ($id_us as $id_u) {
        $id[]= $id_u->user_id;
      }
      ////////////////
      $us=User::whereIn('id', $id_us)->get(['id','name','email','comment']);/*get infos of thoes employee from user table*/


      $employees=User::where('role','Like','EMPLOYEE')->whereNotIn('id',$id)->get();/*all other employees*/
      foreach ($employees as $e) { /*count nbr de taches de chaque emplyee*/
        $e->taskCount = Task_User::where('user_id',$e->id)->get(['task_id'])->count();
      }
      $projects=Project::all();/*all projects*/


      return view('tasks.edit',compact('employees','projects','us'))->withTask($t)->withProject($p);
    }
    /*
    *  Employee Update progress / state
    */
    public function updateProgress(Request $request, $id)
    {
          $task =Task::find($id);

          $task->progress=$request->progress;
          if($request->progress=="100" && $task->state=='IN_PROGRESS')
            $task->state='FINISHED';

          $task->save();

          flash('Task Saved Successfully !')->success();
          return redirect()->route('Tasks.show',$task->id)->withTask($task);
    }
    /*
    *  Project-Manager validate or not the task
    */
    public function updateValidate(Request $request, $id)
    {


    }
    /**
     * Update Task (Project Manager..)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $task=Task::find($id);

      $task->title =$request->title;
      $task->limitDate =$request->limitDate;
      $task->state =(($request->validation)?'VALIDATED':'IN_PROGRESS');
      $task->priority =($request->priority_RadioBtn);/* level1= Urgent == 1  level2 == 2 level3 == 3 level4 == 4*/
      $task->comment =$request->comment;
      //$task->project_id =$request->project_id;

        $task->save();
        // echo "<pre>";print_r($request->RangeProgress);exit;

        flash('Task Saved Successfully!')->success();
        return redirect()->route('Tasks.show',$task->id)->withTask($task);
    }
    /*
    * add employee to a spesific Task
    */
    public function addEmployee($id,$empid){

      $task=Task::find($id);
      $employee=User::where('id', $empid)->first();/*get infos of thoes employee from user table*/

      $employee->tasks()->attach($task);
      return redirect()->back();
    }
    /*
    * remove employee to from a spesific Task
    */
    public function deleteEmployee($id,$empid){

      $task=Task::find($id);
      $employee=User::where('id', $empid)->first();/*the employee we want to detach*/
      $employee->tasks()->detach($task);
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Task::find($id);
        $t->delete();
        return redirect()->route('Tasks.index');
    }
}
