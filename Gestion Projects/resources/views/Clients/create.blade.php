@extends('layouts.structure')

@section('content')
@include('flash::message')
<br>
<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Nouveau Client </h2>  </div>
</div>
<br><br>
<form role="form" method="post" action="{{action('ClientController@store')}}">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

	<div class="form-group">
		<label for="title" class="col-form-label">Registration Number:</label>
		<input type="text" class="form-control" name="registrationNumber" >
	</div>

 <div class="form-row">
  	<div class="form-group col-6">
  		<label for="title" class="col-form-label">Client Name:</label>
  		<input type="text" class="form-control" name="name" >
  	</div>

  	<div class="col">
      <div class="form-group">
          <label for="title" class="col-form-label">Email:</label>
          <input type="text" class="form-control" name="email" placeholder="email@exemple.com" >
      </div>
    </div>
</div>

 <div class="form-row">
  	<div class="form-group col-6">
  		<label for="title" class="col-form-label">Address:</label>
  		<input type="text" class="form-control" name="address" >
  	</div>

  	<div class="col">
      <div class="form-group">
          <label for="title" class="col-form-label">Phone Number:</label>
          <input type="text" class="form-control" name="phoneNumber" >
      </div>
    </div>
</div>
	<div class="form-group">
		<label class="col-form-label">Commentaire</label>
		<textarea type="text" class="form-control" name="comment" value="comment"></textarea>
	</div>


<input type="submit" class="btn btn-success btn-h1-spacing fas fa-plus float-lg-right" value="Ajouter">
</form>

@endsection
