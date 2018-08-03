@extends('layouts.structure')

@section('csss')
	@parent
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
	<style> h2{ color: green; } i{padding-top: 10%;}</style>
@endsection

@section('content')

@include('flash::message')
<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Liste des Clients</h2>  </div>
</div>
<br><br>

<div class="float-right">
  <a class="nav-link" href="{{ route('Clients.create') }}">Nouveau Client</a>
</div>

<table class="table">
<thead>
	<tr>
		<th scope="col" class="d-none d-lg-block" style="border-bottom:none;">email</th>
		<th scope="col">registrationNumber</th>
		<th scope="col" class="d-none d-lg-block" style="border-bottom:none;">phoneNumber</th>
		<th scope="col">name</th>
		<th scope="col" class="d-none d-lg-block" style="border-bottom:none;">comment</th>
		<th scope="col"></th>
	</tr>
</thead>
<tbody>
	@foreach($clients as $c)
	<tr>
		<td scope="row" class="d-none d-lg-block">{{$c->email}}</th>
		<th scope="row">{{$c->registrationNumber}}</th>
		<td scope="row" class="d-none d-lg-block">{{$c->phoneNumber}}</th>
		<td scope="row">{{$c->name}}</th>
		<td scope="row" class="d-none d-lg-block">{{$c->comment}}</th>
		<td scope="row">
			<form action="{{ route('Clients.show',$c->id) }}" method="get">
				<input hidden type="submit" id="show{{$c->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Clients.edit',$c->id) }}" method="get">
				<input hidden type="submit" id="edit{{$c->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Clients.destroy',$c->id) }}" method="post">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<input hidden type="submit" class="btn btn-danger" id="delete{{$c->id}}">
			</form>
			<div class="btn-group" role="group" aria-label="Basic example">
				<i class="btn btn-success far fa-eye text-dark" onclick="$('#show{{$c->id}}').click();"
					{{-- id="voir{{$c->id}}"
					onmouseover="$('#voir{{$c->id}}').val('voir');"
					onmouseout="$('#voir{{$c->id}}').val('v');" --}}
				value="v"></i>
				<i class="btn btn-primary fa fa-pencil-alt text-dark" onclick="$('#edit{{$c->id}}').click();" value="m"></i>
				<i class="btn btn-danger fas fa-times text-dark" onclick="$('#delete{{$c->id}}').click();" value="s"></i>
			</div>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
