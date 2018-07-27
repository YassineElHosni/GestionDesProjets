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
          // $c[$p->id]=Client::find($p->client_id)->Nom;
          $p->client_Nom=Client::find($p->client_id)->Nom;
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
        /*storing all the new data in new projet*/
        $newProjet = new Projet([
              'intitulee' => $request->intitulee,
              'description' => $request->description,
              'date_limite' => $request->date_limite,
              'date_debut' => '2018-07-26 11:36:04',
              'date_fin' => '2018-07-26 11:36:04',
              'deplacement' =>($request->has('deplacement'))?'O':'N',
              'état' =>(!$request->Etat_RadioBtn)?'en-cours':'clos',
              'commentaire' => $request->commentaire,
              'user_id' =>$request->user_id[0],
              'client_id'=>$request->client_id[0],
            ]);
      $newProjet->save();

     flash('Projet created !')->success();

      return redirect()->route('Projets.index');
    }
    /**
     * D0isplay the  Project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Projet::find($id);
        //dd($p);
        $c=Client::find($p->client_id);

         $u=User::find($p->user_id);

        return view('projets.show')->withProjet($p)->withClient($c)->withChef($u);
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

      $projet->intitulee =$request->intitulee;//setint the coloms with the new values..
      $projet->description =$request->description;
      $projet->date_limite =$request->idate_limite;
      $projet->deplacement =($request->deplacement)?'O':'N';
      $projet->état =(!$request->Etat_RadioBtn)?'en-cours':'clos';
      $projet->commentaire =$request->commentaire;
      $projet->user_id =$request->user_id[0];
      $projet->client_id =$request->client_id;
    //  echo "<pre>";print_r($request->description);exit;
//dd($request->get('client_id'));
      //$projet->save();  /*save*/

    //  Session::flash('success','Modification enregistré!');
      //redirect to show whith the flash messg
      flash('Projet Saved !')->success();
      return redirect()->route('Projets.show',$projet->id)->withProjet($projet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $projet =Projet::find($id);
      //$c=Client::find($p->client_id);

      $u=User::find($projet->user_id);
    /*
      $projet->Users()->detach(User::where('id',$u)->first());
      $projet->Clients()->dissociate();
     */
      $projet->delete();
    flash('Projet Deleted !')->warning();
      return redirect()->route('Projets.index',$projet->id);
    }
}
