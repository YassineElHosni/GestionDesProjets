<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Projet;
use App\User;
class ProjetController extends Controller
{
    /**
     * Display a listing of all Projects
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps = Projet::all();
        return view('projets.index' ,compact($ps))->withProjets($ps);
    }

    /**
     * Show the form for creating a new Project
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    //  $user=User::where('id','=',auth()->id())->first();/*l'user authentifié*/
      $chef_projets=User::where('role','Like','CHEF_PROJET')->get();
      $select=array();
      $selected_id=array();

        foreach($chef_projets as $chef_projet){
         $select[] =$chef_projet->Nom;
         $selected_id[]=$chef_projet->id;
       }
      // $select[]=$user->Nom;
     return view('projets.create',compact('select'),compact('selected_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Projet=new Projet;
        /*attribuer le representant /au projet -->avec la table pivot*/
        //$rep=User::where('id',$selected_id)->first();
        $name_chef=$request['ChefProjet'];
        $rep=User::where('Nom',$name_chef)->first();
       /* attaching project to the responsable(chef Projet)*/
      $Projet=Projet::create($request->all());

      $rep->Projet()->attach($Projet);/*attaching role to the user*/

        return redirect()->view('projets.show')->with('flash','Projet created!');
    }
/*
* Attribuer représentant User(CHEF_PROJET)->Projets
*/
public function AttribuerRep(Request $request,$id){
    $chef=User::get($id);
    $chef=request['ChefProjet'];
    $Projet->Users()->attach(User::where('Nom',$chef)->first());

}
    /**
     * Display the  Project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Projet::find($id);
        return view('projets.show')->withProjet($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Project::find($id);
        return view('projets.update')->withProjets($p);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
