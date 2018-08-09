@extends('layouts.structure')

@section('content')

@include('flash::message')
<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Liste des Projets</h2>  </div>
</div>
<br><br>
<table class="table table-responsive-lg">
<thead>
	<tr>
		<th scope="col">Title</th>
		<th scope="col">Client</th>
		{{-- <th>description</th> --}}
		{{-- <th scope="col">date limite</th> --}}
		<th scope="col">date debut</th>
		<th scope="col">date fin</th>
		<th scope="col">deplacement</th>
		<th scope="col">etat</th>
		<th scope="col"></th>
		<th scope="col"></th>
		<th scope="col"></th>
		{{-- <th>commentaire</th> --}}
	</tr>
</thead>
<tbody>
	@foreach($ps as $p)
	<tr>
		<td scope="row">{{$p->title}}</th>
		{{-- <td>{{$p->description}}</td> --}}
		<td>{{$p->client_name}}</td>
		{{-- <td>{{date('Y-m-d', strtotime($p->limitDate))}}</td> --}}
		<td>{{date('Y-m-d', strtotime($p->startDate))}}</td>
		<td>{{date('Y-m-d', strtotime($p->finishDate))}}</td>
		<td>{{($p->displacement)?'Oui':'No'}}</td>
		<td>{{($p->state)?'en-cours':'clos'}}</td>
		<td>
		<td>
			<form action="{{ route('Projects.show',$p->id) }}" method="get">
				<input hidden type="submit" id="show{{$p->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Projects.edit',$p->id) }}" method="get">
				<input hidden type="submit" id="edit{{$p->id}}" class="btn btn-primary">
			</form>
			<form action="{{ route('Projects.destroy',$p->id) }}" method="post">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<input hidden type="submit" class="btn btn-danger" id="delete{{$p->id}}">
			</form>
			<div class="btn-group" role="group" aria-label="Basic example">
				<input type="submit" class="btn btn-success" onclick="$('#show{{$p->id}}').click();"
					{{-- id="voir{{$p->id}}"
					onmouseover="$('#voir{{$p->id}}').val('voir');"
					onmouseout="$('#voir{{$p->id}}').val('v');" --}}
				value="v">
        @can('edit',Auth::user())
				<input type="submit" class="btn btn-primary" onclick="$('#edit{{$p->id}}').click();" value="m">
        @endcan
        @can('delete',Auth::user())
      	<input type="submit" class="btn btn-danger" onclick="$('#delete{{$p->id}}').click();" value="s">
        @endcan
      </div>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
