<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
//use Input;
use App\Task;
use App\Project;
use App\User;
use App\Client;
use App\Task_User;
use Session;
use Carbon\Carbon;
class ProjectController extends Controller
{
    /**
     * Display a listing of all Projects
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps = Project::all();
        foreach ($ps as $p) {
          // $c[$p->id]=Client::find($p->client_id)->Nom;
          $p->client_name=Client::find($p->client_id)->name;
          /*chef de projet*/
          $p->chef=User::find($p->user_id)->name;
        }

      return view('projects.index' ,compact('ps','c'));
    }

    /**
     * Show the form for creating a new Project
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*--get all representatives--*/
        $project_managers=User::where('role','Like','PROJECT_MANAGER')->get();
        // get all clients
        $clients=Client::all();
     return view('projects.create',compact('project_managers','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*storing all the new data in new project*/
        $newProjet = new project([
              'title' => $request->title,
              'description' => $request->description,
              'limitDate' => $request->limitDate,
              'startDate' => date('Y-m-d H:i:s'),
               //'finishDate' => '0000-00-00 00:00:00', NULL
              'displacement' =>($request->has('displacement')),
              'state' =>($request->state_RadioBtn),
              'comment' => $request->comment,
              'user_id' =>$request->user_id[0],
              'client_id'=>$request->client_id[0],
            ]);
        $newProjet->save();

        flash('Project created Successfully !')->success();

        return redirect()->route('Projects.index');
    }
    /**
     * Display the  Project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Project::find($id);

        $c=Client::find($p->client_id);

        $u=User::find($p->user_id);

        $tasks=Task::where('project_id','Like',$p->id)->get();/*get all tasks related */
             foreach($tasks as $task){/*get the users_id related to this task_id*/
              $task->worker = User::whereIn('id',Task_User::where('task_id','=',$task->id)
                    ->get(['user_id']))
                      ->get(['name']);
              // dd($task->worker);
               // $ids_user=Task_User::where('task_id','=',$task->$id)->get(['user_id']);
               // $task->worker=User::whereIn('id',$ids_user)->get(['name','email','comment']);
             }
    // $t->us=User::whereIn('id', $id_us)->get(['name','email','comment']);/*get infos of thoes employee from user table*/
    // dd($tasks);
    //          dd($tasks);
        return view('projects.show',compact('tasks'))->withProject($p)->withClient($c)->withChef($u)->withTasks($tasks);
    }
    /**
     * Display all  Projects of one Projects_Manager.
     * en cours..
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ManagerProjets($id)
    {
      $ps = Project::where('user_id','Like',$id)->get();
      foreach ($ps as $p) {
        $c=Client::find($p->client_id);
      }
      $func=1;
      return view('projects.index',compact('ps'))->withFunc($func);
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p= Project::find($id);
        $p->client_name=Client::find($p->client_id)->name;

        /*all chef_projets*/
        $project_managers=User::where('role','Like','PROJECT_MANAGER')->get();

        return view('projects.edit',compact('p','project_managers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // get the current time  - 2015-12-19 10:10:54
      $current=Carbon::now();
      $current=new Carbon();

      $project =Project::find($id);

      $project->title =$request->title;
      $project->description =$request->description;
      $project->limitDate =$request->limitDate;
      $project->displacement =($request->has('displacement'));//true == 1 == oui and false == 0 == no
      $project->state =($request->state_RadioBtn);//true == 1 == en-cours and false == 0 == clos
      $project->comment =$request->comment;
      $project->user_id =$request->user_id[0];

      if(  $project->state ==0){/*si le projet est clos*/
          $project->finishDate=$current;/*on precise la date de fin*/
      }else{
        // $project->finishDate='0000-00-00 00:00:00';
      }
      $project->save();

      flash('Project Saved Successfully !')->success();

      return redirect()->route('Projects.show',$project->id)->withProject($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project =project::find($id);
      $u=User::find($project->user_id);

      $project->delete();

      flash('project Deleted Successfully !')->warning();
      return redirect()->route('Projects.index',$project->id);
    }
}
