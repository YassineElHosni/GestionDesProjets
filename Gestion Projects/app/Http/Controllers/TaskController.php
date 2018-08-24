<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
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
         * Display a listing of the tasks employee ($id).
         *
         * @return \Illuminate\Http\Response
         */
        public function MyTasks($id)
        {

          $id_ts=Task_User::where('user_id','=',$id)->get(['task_id']);/*get the tasks_id related to this user_id*/

              //foreach ($id_ts as $id_t) {/*for each task|user get :  */

              $ts=Task::whereIn('id', $id_ts)->get(); /*the infos of each task from Tasks table*/
              $s_d=Task_User::where('user_id','=',$id)->get(['startDate']); /*the start_date */
              $f_d=Task_User::where('user_id','=',$id)->get(['finishDate']); /*the end_date*/

                  foreach ($ts as $t) {
                      //get the name of the project that the current task belongs to.
                      $t->project_title=Project::find($t->project_id)->title;

                  }
              //}


            return view('tasks.mesTaches' ,compact('ts'));
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
      flash('Tache créer avec succé !')->success();
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

      $task = Task::find($id);
      $task->project_title = Project::find($task->project_id)->title;
      //get all project to display on project select input
      $projects = Project::all();
      //Get current employees for the current task
      //  and other employees (not working on this task),
      //Then add for each employee his task count
      $us_id = Task_User::where('task_id', '=', $task->id)->get(['user_id']);
        $currentEmployees = User::whereIn('id', $us_id)->get(['id', 'name']);
        $otherEmployees = User::whereNotIn('id', $us_id)
          ->where('role', 'like', 'EMPLOYEE')->get(['id', 'name']);
        foreach ($currentEmployees as $u) {
          $u->taskCount = Task_User::where('user_id',$u->id)->count();
        }
        foreach ($otherEmployees as $u) {
          $u->taskCount = Task_User::where('user_id',$u->id)->count();
        }
      return view('tasks.edit',compact('task', 'projects', 'currentEmployees', 'otherEmployees'));
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
          flash('Tache Enregistré avec succé !')->success();
          return redirect()->route('Tasks.show',$task->id)->withTask($task);
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

      $add = explode(",", $request->addTable);
      $rm = explode(",", $request->removeTable);
      // $aaa=Task_User::where('task_id', '=', $id)->get(['user_id']);
      if(count($add)>0 && $add[0]!="")
        foreach ($add as $u_id) {
          if(!Task_User::Contains($u_id, $id)){
            $employee=User::where('id', $u_id)->first();
            $employee->tasks()->attach($task);
          }
        }
      if(count($rm)>0 && $rm[0]!="")
        foreach ($rm as $u_id) {
          if(Task_User::Contains($u_id, $id)){
            $employee=User::where('id', $u_id)->first();
            $employee->tasks()->detach($task);
          }
        }
      //dd($add, $rm, $aaa, Task_User::where('task_id', '=', $id)->get(['user_id']));

      $task->title =$request->title;
      $task->limitDate =$request->limitDate;
      $task->priority =($request->priority_RadioBtn);
      $task->comment =$request->comment;

      if ($request->has('validation')) {
        $task->state = 'VALIDATED';
        $task->progress = 100;
      }else  $task->state = 'IN_PROGRESS';
      $task->save();

      flash('Tache Enregistré avec succé!')->success();
       return redirect()->route('Tasks.show',$task->id)->withTask($task);
    }
    /*
    * add employee to a spesific Task
    */
    public function addEmployee($id,$empid){
      $task=Task::find($id);
      $employee=User::where('id', $empid)->first();/*get infos of thoes employee from user table*/
      $employee->tasks()->attach($task);
    }
    /*
    * add Task to a spesific Project
    */
    public function addTaskToPrj($id){

     /*--get all free employee--*/
     $employees=User::where('role','Like','EMPLOYEE')->get();
     $project=Project::find($id);/*current project*/
     return view('tasks.create',compact('employees','project'));
    }
    /*
    * remove employee to from a spesific Task
    */
    public function removeEmployee($id,$empid){
      $task=Task::find($id);
      $employee=User::where('id', $empid)->first();/*the employee we want to detach*/
      $employee->tasks()->detach($task);
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
