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
use Auth;
class ProjectController extends Controller
{

  public function __construct(){
    
      $this->middleware('auth');
  }
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
      $this->authorize('create', Project::class);
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

        $newProjet->title = 'project "' .$newProjet->title.'" created';
        \Notification::send(User::find($request->user_id[0]), new \App\Notifications\UserNotification($newProjet));
        \Notification::send(User::whereIn('role',array('ADMIN','MANAGER'))->get(), new \App\Notifications\UserNotification($newProjet));

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

       $this->authorize('show',$p);
    
        $c=Client::find($p->client_id);

        $u=User::find($p->user_id);

        $daysCount = 0;

        $tasks=Task::where('project_id','Like',$p->id)->get();/*get all tasks related */
             foreach($tasks as $task){/*get the users_id related to this task_id*/
              $task->worker = User::whereIn('id',Task_User::where('task_id','=',$task->id)
                    ->get(['user_id']))
                      ->get(['id', 'name']);
              if ($task->state == 'IN_PROGRESS') {
                $from = Carbon::parse($task->created_at);
                $to = Carbon::now();
              }else{
                $from = Carbon::parse($task->created_at);
                $to = Carbon::parse($task->updated_at);
              }
              $daysCount = $p->daysCount + $to->diffInWeekdays($from);
               }

             if($p->projetClos()){
               $p->finishDate=date('Y-m-d H:i:s');
             }else{
                // $project->finishDate='0000-00-00 00:00:00';
             }
               $p->save();
               $p->daysCount = $daysCount;
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
       $this->authorize('ManagerProjets', Project::class);

      $ps = Project::where('user_id','Like',$id)->get();

      foreach ($ps as $p) {
          $p->client_name=Client::find($p->client_id)->name;
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
         $this->authorize('edit', $p);
        $p->client_name=Client::find($p->client_id)->name;

        /*all chef_projets*/
        $project_managers=User::where('role','Like','PROJECT_MANAGER')->get();

        return view('projects.edit',compact('p','project_managers'));
    }

    public function updateDateEnd(Request $request, $id){


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

      $project =Project::find($id);

      $project->title =$request->title;
      $project->description =$request->description;
      $project->limitDate =$request->limitDate;
      $project->displacement =($request->has('displacement'));//true == 1 == oui and false == 0 == no
      $project->state =($request->state_RadioBtn);//true == 1 == en-cours and false == 0 == clos
      $project->comment =$request->comment;
      $project->user_id =$request->user_id[0];

      $project->save();

      $project->title = 'project "' .$project->title.'" updated';
      \Notification::send(User::find($request->user_id[0]), new \App\Notifications\UserNotification($project));
      \Notification::send(User::whereIn('role',array('ADMIN','MANAGER'))->get(), new \App\Notifications\UserNotification($project));

      if($project->finishDate){
        flash('Project Cloturé !')->success();
      }else{
        flash('Modification enregistré !')->success();
      }
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
       $this->authorize('delete', $project);
      $u=User::find($project->user_id);

      $project->delete();

      $project->title = 'project "' .$project->title.'" deleted';
      \Notification::send(User::find($request->user_id[0]), new \App\Notifications\UserNotification($project));
      \Notification::send(User::whereIn('role',array('ADMIN','MANAGER'))->get(), new \App\Notifications\UserNotification($project));

      flash('project Deleted Successfully !')->warning();
      return redirect()->route('Projects.index',$project->id);
    }
}
