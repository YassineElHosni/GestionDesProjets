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
		<th>Title</th>
		<th>Client</th>
		{{-- <th>description</th> --}}
		<th scope="col">date limite</th>
		<th scope="col">date debut</th>
		<th scope="col">date fin</th>
		<th scope="col">deplacement</th>
		<th scope="col">etat</th>
		<th scope="col"></th>
		<th scope="col"></th>
		{{-- <th>commentaire</th> --}}
	</tr>
</thead>
<tbody>
	@foreach($ps as $p)
	<tr>
		<th scope="row">{{$p->title}}</th>
		{{-- <td>{{$p->description}}</td> --}}
		<td>{{$p->client_name}}</td>
		<td>{{date('Y-m-d', strtotime($p->limitDate))}}</td>
		<td>{{date('Y-m-d', strtotime($p->startDate))}}</td>
		<td>{{date('Y-m-d', strtotime($p->finishDate))}}</td>
		<td>{{($p->displacement)?'Oui':'No'}}</td>
		<td>{{($p->state)?'en-cours':'clos'}}</td>
		<td>
			<form action="{{ route('Projects.show',$p->id) }}" method="get">
				<input type="submit" value="Voir" class="btn btn-primary">
			</form>
		</td>
		<td>
			<form action="{{ route('Projects.edit',$p->id) }}" method="get">
				<input type="submit" value="Modifier" class="btn btn-primary">
			</form>
		<td>
				<form action="{{ route('Projects.destroy',$p->id) }}" method="post">
					{!! method_field('delete') !!}
					{!! csrf_field() !!}
					<button class="btn btn-danger" type="submit">Delete</button>
		 	</form>


</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
