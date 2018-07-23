@extends('layouts.structure')

@section('content')
    <div class="col-sm-12">
    	<label class="col-sm-4">intitulee</label>
    	<div>{{ $projet->intitulee }}</div>
    </div>
    <div class="col-sm-12">
    	<label class="col-sm-4">description</label>
    	<div class="col-sm-8">{{$projet->description}}</div>
    </div>
    <div class="col-sm-12">
    	<label class="col-sm-4">deplacement</label>
    	<div class="col-sm-8">{{$projet->deplacement}}</div>
    </div>
    <div class="col-sm-12">
    	<label class="col-sm-4">date_debut</label>
    	<div class="col-sm-8">{{date("M j,Y", strtotime($projet->date_debut))}}</div>
    </div>
    <div class="col-sm-12">
    	<label class="col-sm-4">date_fin</label>
    	<div class="col-sm-8">{{date("M j,Y", strtotime($projet->date_fin))}}</div>
    </div>
    <div class="col-sm-12">
    	<label class="col-sm-4">date_limite</label>
    	<div class="col-sm-8">{{date("M j,Y", strtotime($projet->date_limite))}}</div>
    </div>
@endsection