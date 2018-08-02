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
      $id_us=Task_User::where('task_id','=',$t->id)->get(['user_id']);
      $us=User::whereIn('id', $id_us)->get(['name','email','comment']);

        return view('tasks.show')->withTask($t)->withProject($p)->withUsers($us);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

      $employees=User::where('role','Like','EMPLOYEE')->get();
      $projects=Project::all();
      $t=Task::find($id);
      return view('tasks.edit',compact('employees','projects'))->withTask($t);
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

          flash('task Saved !')->success();
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
      $task->project_id =$request->project_id;
      $task->limitDate =$request->limitDate;
      $task->priority =($request->priority_RadioBtn);/* level1= Urgent == 1  level2 == 2 level3 == 3 level4 == 4*/
      $task->comment =$request->comment;
      $task->user_id =$request->user_id[0];/* a revoir */
      $task->progress =$request->progress;
      $task->state =(($request->state)?'VALIDATED':'En-Cours');

        $task->save();
        // echo "<pre>";print_r($request->RangeProgress);exit;

        flash('Task Saved Successfully!')->success();
        return redirect()->route('Task.show',$task->id)->withTask($task);
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
        return redirect()->route('Task.index');
    }
}
