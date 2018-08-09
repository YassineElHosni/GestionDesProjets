@extends('layouts.structure')

@section('jss')
@parent
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#users_table').DataTable();
} );
</script>
@endsection

@section('csss')
	@parent
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
	<style> h2{ color: green; } i{padding-top: 10%;}</style>
@endsection

@section('content')

@include('flash::message')
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Liste des Users</h2>  </div>
</div>
<br><br>
<table class="table table-responsive-lg" id="users_table" data-order='[[ 1, "asc" ]]' data-page-length='5'>
<thead>
	<tr>
		<th scope="col">name</th>
		<th scope="col" class="d-none d-lg-block" style="border-bottom:none;">email</th>
		{{-- <th scope="col">password</th> --}}
		<th scope="col">role</th>
		<th scope="col" class="d-none d-lg-block" style="border-bottom:none;">comment</th>
		<th scope="col"></th>

	</tr>
</thead>
<tbody>
	@foreach($users as $u)
	<tr>
		<th scope="row">{{$u->name}}</th>
		<td scope="row" class="d-none d-lg-block">{{$u->email}}</th>
		{{-- <td scope="row">{{$u->password}}</th> --}}
		<td scope="row">
			{{
				($u->role=='EMPLOYEE')?'Employé':(($u->role=='MANAGER')?'Gérant':(($u->role=='PROJECT_MANAGER')?'Chef de Projet':'Admin'))
			}}
		</th>
		<td scope="row" class="d-none d-lg-block">{{$u->comment}}</th>
		<td scope="row">
			<form action="{{ route('Users.show',$u->id) }}" method="get">
				<input hidden type="submit" id="show{{$u->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Users.edit',$u->id) }}" method="get">
				<input hidden type="submit" id="edit{{$u->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Users.destroy',$u->id) }}" method="post">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<input hidden type="submit" class="btn btn-danger" id="delete{{$u->id}}">
			</form>
			<div class="btn-group" role="group" aria-label="Basic example">
				<i class="btn btn-success far fa-eye text-dark" onclick="$('#show{{$u->id}}').click();"
					{{-- id="voir{{$u->id}}"
					onmouseover="$('#voir{{$u->id}}').val('voir');"
					onmouseout="$('#voir{{$u->id}}').val('v');" --}}
				value="v"></i>
        @can('edit',$user)
				<i class="btn btn-primary fa fa-pencil-alt text-dark" onclick="$('#edit{{$u->id}}').click();" value="m"></i>
        @endcan
        @can('delete',$user)
				<i class="btn btn-danger fas fa-times text-dark" onclick="$('#delete{{$u->id}}').click();" value="s"></i>
        @endcan
      </div>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
