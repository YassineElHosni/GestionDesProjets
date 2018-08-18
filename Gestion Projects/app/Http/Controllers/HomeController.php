<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Task;
use App\Client;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{

  /*
  *  check if the database of users is empty
  */
   public function CheckFirstRegistration(){

     return($n=User::count()==0);//true -> empty ;; false -> full
   }
   public function registerIndex(){
        return view('auth.register');
   }
   public function adminRegisterIndex(){
        return view('AdminRegistration');
   }
   public function firstAdminStore(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'comment' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
//         if ($validator->fails())
// {
//     // The given data did not pass validation
// }
        $u = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'ADMIN',
            'comment' => $request->comment,
        ]);
         // dd($request->all(),$u);
        $u->save();

        return  redirect()->route('login');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function All_Cols(){
        return [    'Projects'  =>['id', 'title', 'description'],
                    'Tasks'     =>['id', 'title', 'state'],
                    'Clients'   =>['id', 'name', 'email'],
                    'Users'     =>['id', 'name', 'email']
            ];
    }
    public function index()
    {
    if($this->CheckFirstRegistration()==false){

        $ps=Project::orderBy('updated_at', 'ASC')
            ->where('state','=',1)
            ->take(3)
            ->get(['id', 'title', 'state', 'updated_at']);

        $ts=Task::orderByRaw('priority - updated_at', 'ASC')
            ->where('state','like','IN_PROGRESS')
            ->take(3)
            ->get(['id', 'title', 'state', 'priority', 'updated_at']);

        return view('index')->with('LastFewProjects',$ps)->with('LastFewTasks',$ts);
      }else
        return redirect()->route('admin.register.index');
    }
    public function index2($name){
        return view('welcome')
        ->withCurrent($name)
        ->withCols(array_slice(HomeController::All_Cols()[$name], 1));
    }
    
    public function getData($name)
    {
        $GLOBALS['cName'] = $name;
        $vals=HomeController::All_Cols()[$name];
        switch($name)
        {
            case 'Projects' :
                $obj = Project::select($vals);
                break;
            case 'Tasks' :
                $obj = Task::select($vals);
                break;
            case 'Clients' :
                $obj = Client::select($vals);
                break;
            case 'Users' :
                $obj = User::select($vals);
                break;

            default :
                return back()->with('message', 'nothing happened!');
        }
        return Datatables::of($obj)->make(true);

    }
    function removedata(Request $request, $name)
    {
        switch($name)
        {
            case 'Projects' :
                $obj = Project::find($request->input('id'));
                break;
            case 'Tasks' :
                $obj = Task::find($request->input('id'));
                break;
            case 'Clients' :
                $obj = Client::find($request->input('id'));
                break;
            case 'Users' :
                $obj = User::find($request->input('id'));
                break;

            default :
                return back()->with('message', 'nothing happened!');

            if($obj->delete())
            {
                return back()->with('message', 'Data Deleted '.$request->input('id'));
            }
            
            return back()->with('message', 'nothing happened!!');
        }
    }

    function massremove(Request $request, $name)
    {
        switch($name)
        {
            case 'Projects' :
                $obj = Project::whereIn('id', $request->input('id'));
                break;
            case 'Tasks' :
                $obj = Task::whereIn('id', $request->input('id'));
                break;
            case 'Clients' :
                $obj = Client::whereIn('id', $request->input('id'));
                break;
            case 'Users' :
                $obj = User::whereIn('id', $request->input('id'));
                break;

            default :
                return back()->with('message', 'nothing happened!');
        }
        if($obj->delete())
        {   
            flash('Data Deleted Successfully !')->success();
            return back();
        }
    
        flash('Nothing happened !')->success();
        return back();
    }
}
