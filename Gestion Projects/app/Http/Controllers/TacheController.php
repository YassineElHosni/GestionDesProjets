<?php

namespace App\Http\Controllers;
use App\User;
use App\Tache;
use App\Projet;

use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ts = Tache::all();
        foreach ($ts as $t) {
          $p[$t->id]=Projet::find($t->projet_id)->intitulee;
        }

        return view('projets.index' ,compact('ts','p'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     *voir une tache choisit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $t=Tache::find($id);/*get tache*/
      $p=Projet::find($t->projet_id);/*get the projet related to this task*/
        return view('taches.show')->withTache($t)->withProjet($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
      $tache =Tache::find($id);//get the data with request
     $tache->update($request->only(['déroulement']));

     $projet->save();
echo "<pre>";print_r($request->RangeProgress);exit;

      flash('Tache Saved !')->success();
      return redirect()->route('Tache.show',$tache->id)->withTache($tache);

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
