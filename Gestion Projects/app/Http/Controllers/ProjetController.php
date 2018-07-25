<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Input;
use App\Projet;
use App\User;
use App\Client;
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
      /*--select representant--*/
      $chef_projets=User::where('role','Like','CHEF_PROJET')->get();

      /*$select=array();
      $selected_id=array();

        foreach($chef_projets as $chef_projet){
         $select[] =$chef_projet->Nom;
         $selected_id[]=$chef_projet->id;
        }

       /*--select client--*/
       $clients=Client::all();
     return view('projets.create',compact('chef_projets','clients'));//,compact('chef_projets','selected_client_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    /* converting string from array */
          $id_chef_array=$request['user_id'];
          $id_chef= array_shift($id_chef_array);
          $id_client_array=$request['client_id'];
          $id_client= array_shift($id_client_array);

          /*storing all the new data in new projet*/
        $newProjet=Projet::create([
              'intitulee' => request('intitulee'),'description' => request('description'),
              'date_limite' => request('date_limite'),'deplacement' => request('deplacement'),
              'état' => request('état'),'commentaire' => request('commentaire'),
              'user_id' =>$id_chef,'client_id'=>$id_client,
            ]);
       $newProjet->save();


  /*attaching newProjet to the user (representant)*/
    $rep=User::where('id',$id_chef)->first();
      $rep->projets()->attach($newProjet);

        return redirect()->view('projets.index')->with('flash','Projet created!');
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
