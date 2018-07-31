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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     *voir une tache choisit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $t=Task::find($id);/*get tache*/
      $p=Project::find($t->project_id);/*get the projet related to this task*/
        return view('tasks.show')->withTask($t)->withProject($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /*
    *  Update progress / state
    */
    public function updateProgress(Request $request, $id)
    {
          $tache =Tache::find($id);

          $tache->déroulement=$request->déroulement;
          if($request->déroulement=="100")
            $tache->état='fini';

          $tache->save();

          flash('Tache Saved !')->success();
          return redirect()->route('Taches.show',$tache->id)->withTache($tache);
    }
    /*
    *  Gérant validate or not the task
    */
    public function updateValidate(Request $request, $id)
    {


    }
    /**
     * Update Task
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task =Task::find($id);//get the data with request
        $task->update($request->only(['progress']));

        $project->save();
        // echo "<pre>";print_r($request->RangeProgress);exit;

        flash('Tache Saved !')->success();
        return redirect()->route('Task.show',$tache->id)->withTask($task);
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
