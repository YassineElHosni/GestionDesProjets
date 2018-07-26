<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Input;
use App\Projet;
use App\User;
use App\Client;
use Session;
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
        foreach ($ps as $p) {
          $c=Client::find($p->client_id);
        }

        return view('projets.index' ,compact('ps','c'));
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
   /*deplacement & état from radiobox*/
   $dep=($request['deplacement']=='yes')?'O':'N';
   $etat=($request['état']=='no')?'en_cours':'clos';

    /* converting string from array */
          $id_chef_array=$request['user_id'];
          $id_chef= array_shift($id_chef_array);
          $id_client_array=$request['client_id'];
          $id_client= array_shift($id_client_array);

          /*storing all the new data in new projet*/
        $newProjet=Projet::create([
              'intitulee' => request('intitulee'),'description' => request('description'),
              'date_limite' => request('date_limite'),'deplacement' =>$dep,
              'état' =>$etat,'commentaire' => request('commentaire'),
              'user_id' =>$id_chef,'client_id'=>$id_client,
            ]);
       $newProjet->save();


  /*attaching newProjet to the user (representant)*/
    $rep=User::where('id',$id_chef)->first();
      $rep->projets()->attach($newProjet);
   //Session::flash('success','Projet enregistré!');
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
        $c=Client::find($p->client_id);
          return view('projets.show')->withProjet($p)->withClient($c);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p= Projet::find($id);

        $c=Client::find($p->client_id);

        $u=User::find($p->user_id);
        /*old radio button values*/
        $deplacement=$p->deplacement;
        $etat=$p->état;
        /*all chef_projets*/
        $chef_projets=User::where('role','Like','CHEF_PROJET')->get();

        return view('projets.edit',compact('p','c','u','chef_projets'))->withDep($deplacement)->withEtat($etat);
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
      $projet =Projet::find($id);//get the data with request

      $projet->intitulee =$request->input('intitulee');//setint the coloms with the new values..
      $projet->description =$request->input('description');
      $projet->date_limite =$request->input('date_limite');
      $projet->deplacement =$request->input('deplacement');
      $projet->état =$request->input('état');//setint the coloms with the new values..
      $projet->commentaire =$request->input('commentaire');
      $projet->user_id =$request->input('user_id');
      $projet->client_id =$request->input('client_id');

      $projet->save();  /*save*/
      /*flash data with success message*/
      Session::flash('success','Modification enregistré!');
      //redirect to show whith the flash messg
      return redirect()->view('projets.show')->withProjet($projet);
    }
    /*
    * changer le chef de projet
    */
   public function chef_modify($chef){

   return "modify chef..";
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
