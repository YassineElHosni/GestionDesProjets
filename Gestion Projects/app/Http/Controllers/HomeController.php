<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\Tache;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps=Projet::orderBy('updated_at', 'ASC')
            ->where('état','like','en-cours')
            ->take(3)
            ->get(['id', 'intitulee', 'état', 'updated_at']);

        $ts=Tache::orderByRaw('priorité - updated_at', 'ASC')
            ->where('état','like','en-cours')
            ->take(3)
            ->get(['id', 'description', 'état', 'priorité', 'updated_at']);
            
        return view('index')->with('LastFewProjects',$ps)->with('LastFewTasks',$ts);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
