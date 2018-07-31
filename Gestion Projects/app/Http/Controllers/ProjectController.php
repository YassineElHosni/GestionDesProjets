<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Input;
use App\Task;
use App\Project;
use App\User;
use App\Client;
use Session;
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
              'startDate' => '2018-07-26 11:36:04',
              'finishDate' => '2018-07-26 11:36:04',
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
     * D0isplay the  Project.
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

        return view('projects.show')->withProject($p)->withClient($c)->withChef($u)->withTasks($tasks);
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

        $c=Client::find($p->client_id);

        $u=User::find($p->user_id);
        /*old radio button values*/
        $displacement=$p->displacement;
        $state=$p->state;
        /*all chef_projets*/
        $project_managers=User::where('role','Like','PROJECT_MANAGER')->get();

        return view('projects.edit',compact('p','c','u','project_managers'))->withDisplacement($displacement)->withState($state);
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
      $project =Project::find($id);//get the data with request

      $project->title =$request->title;
      $project->description =$request->description;
      $project->limitDate =$request->limitDate;
      $project->displacement =($request->has('displacement'));//true == 1 == oui and false == 0 == no
      $project->state =($request->state_RadioBtn);//true == 1 == en-cours and false == 0 == fini
      $project->comment =$request->comment;
      $project->user_id =$request->user_id[0];
      $project->client_id =$request->client_id;

      $project->save();

      flash('project Saved Successfully !')->success();

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
