@extends('layouts.structure')

@section('content')
<style> h2{border-bottom:1px dashed green;
           color: green; } </style>
  <div class='container'>

    <div class="form-group align-center">
    	 <h2>{{ $projet->intitulee }} </h2>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Client </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{ $client->Nom }}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Description </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{$projet->description}}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Deplacement </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{($projet->deplacement=='O')?'OUI':'NON'}}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Etat </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{($projet->Etat=='en_cours')?'en_cours':'clos'}}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Date Debut </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_debut))}}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Date Fin </label></strong>
    	<div class="col-lg-10 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_fin))}}</div>
    </div>
    <div class="form-group row">
    	<strong><label class="col-lg-2 col-sm-12 col-form-label-lg">Date Limite </label></strong>
    	<div class="col-lg-10 col-sm-12 form-control-plaintext">{{date("M j Y h:m:s", strtotime($projet->date_limite))}}</div>
    </div>

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
