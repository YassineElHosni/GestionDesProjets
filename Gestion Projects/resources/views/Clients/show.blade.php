@extends('layouts.structure')


@section('content')
@include('flash::message')

<style> h2{ color: green; }

</style>
<div class="page-header">
  <div style="border-bottom:1px dashed green" class="form-group form-inline align-center">
        <h2 style="color :green" > Modifier Client : </h2>
        <h3 style="color :gray" class="ml-5">{{ $client->name }}</h3>
  </div>
</div>
<br>
  <form action="{{ route('Clients.edit',$client->id) }}" method="get">
  	<button type="submit" class="btn btn-primary float-right"><i class="fa fa-edit"></i> Modifier</button>
  </form>
<br><hr>

<div class='container'>

  <div class="col-sm">
  	<div class="form-row">
      <div class="form-group mr-4 col-4">
        <strong><label class="col-form-label mr-3">Nom Client: </label>
         <div class="form-control" name="name">{{ $client->name }}</div>
      </div>
    	<div class="form-group col-6">
    		<label for="title" class="col-form-label mr-4 ">Numero:</label>
      	<div class=" col-8" name="registrationNumber">{{$client->registrationNumber}}</div>
    	</div>
    </div>
  </div>

  <div class="col-sm">
  	<div class="form-row">
  				 <div class="form-group mr-4 col-4">
  						<label class="col-form-label mr-3">Email: </label>
  						<div class="form-control" name="email">{{ $client->email }}</div>
  				 </div>
  					<div class="form-group col-6">
  						<label class="col-form-label mr-4 ">Adresse :</label>
  				  	<textarea type="text" class="form-control col-8" name="address" disabled>{{ $client->address }}</textarea>
  					</div>
      </div>
  </div>

  <div class="col">
  	<div class="form-group">
      <label class="col-form-label mr-3">Numero Telephone: </label>
      <div class="form-control col-4" name="phoneNumber">{{ $client->phoneNumber }}</div>
  	</div>
  </div>

  	<div class="form-group ml-3">
  		<label class="col-form-label">Commentaire :</label></strong>
  		<textarea type="text" class="form-control col-8" name="comment" disabled>{{$client->comment}}</textarea>
  	</div><br>

</div>
@endsection
