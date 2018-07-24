@extends('layouts.structure')

@section('content')

    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Intitulee :</label>
    	<div class="col-sm-10 form-control-plaintext">{{ $projet->intitulee }}</div>
    </div>
    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Description :</label>
    	<div class="col-sm-10 form-control-plaintext">{{$projet->description}}</div>
    </div>
    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Deplacement :</label>
    	<div class="col-sm-10 form-control-plaintext">{{($projet->deplacement=='O')?'OUI':'NON'}}</div>
    </div>
    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Date Debut :</label>
    	<div class="col-sm-10 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_debut))}}</div>
    </div>
    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Date Fin :</label>
    	<div class="col-sm-10 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_fin))}}</div>
    </div>
    <div class="form-group row">
    	<label class="col-sm-2 col-form-label-lg">Date Limite :</label>
    	<div class="col-sm-10 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_limite))}}</div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
