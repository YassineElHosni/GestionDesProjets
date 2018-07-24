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


      //$chef_projets=new User();
      //$n=User::count();  App\User::count()
     $chef_projets=User::hasRole('CHEF_PROJET')->get();
      $select=[];
        foreach($chef_projets as $chef_projet){
         $select[$chef_projet->id] =$chef_projet->Nom;
       }
    //  $employe=User::hasRole(EMPLOYE)->getall();
    //$select=array('hello','goodbye');="2";

     return view('projets.create',compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $Projet=Projet::create($request->all());
        return redirect()->view('projets.show');*/
        return 'test';
    }

    /**
     * Display the specified Project.
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
