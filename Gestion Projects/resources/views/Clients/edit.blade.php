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
<br><br>

<div class='container'>

  <form role="form" method="post" action="{{route('Clients.update',$client->id)}}">
     <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">

  <div class="col-sm">
  	<div class="form-row">
      <div class="form-group mr-4 col-4">
         <label class="col-form-label mr-3">Nom Client: </label>
         <input type="text" class="form-control " name="name" value="{{ $client->name }}">
      </div>
    	<div class="form-group col-6">
    		<label for="title" class="col-form-label mr-4">Registration Number:</label>
    		<input type="text" class="form-control col-8" name="registrationNumber" value="{{$client->registrationNumber}}">
    	</div>
    </div>
  </div>

  <div class="col-sm">
  	<div class="form-row">
  				 <div class="form-group mr-4 col-4">
  						<label class="col-form-label mr-3">Email: </label>
               <input type="text" class="form-control " name="email" value="{{ $client->email }}">
  				 </div>

  					<div class="form-group col-6">
  						<label class="col-form-label mr-4 ">Adresse :</label>
  				  	<textarea type="text" class="form-control col-8" name="address" >{{ $client->address }}</textarea>
  					</div>
      </div>
  </div>

  <div class="col">
  	<div class="form-group">
      <label class="col-form-label mr-3">Numero Telephone: </label>
      <input type="text" class="form-control col-4" name="phoneNumber" value="{{ $client->phoneNumber }}">
  	</div>
  </div>

  	<div class="form-group ml-3">
  		<label class="col-form-label">Commentaire :</label>
  		<textarea type="text" class="form-control col-8" name="comment" >{{$client->comment}}</textarea>
  	</div><br>
  <hr>
    <input type="submit" class="btn btn-success btn-h1-spacing float-lg-right" value="Enregistrer">
    </form>

  </div>
</div>
@endsection
