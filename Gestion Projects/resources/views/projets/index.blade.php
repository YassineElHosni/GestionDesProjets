@extends('layouts.structure')

@section('content')

@include('flash::message')
<style> h2{ color: green; } </style>
		<div class="form-group align-center">
			     	 <h2>Liste des Projets</h2>  </div>

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
		<th scope="row">{{$p->intitulee}}</th>
		{{-- <td>{{$p->description}}</td> --}}
		<td>{{$c[$p->id]}}</td>
		<td>{{date('d-m-Y', strtotime($p->date_limite))}}</td>
		<td>{{date('d-m-Y', strtotime($p->date_debut))}}</td>
		<td>{{date('d-m-Y', strtotime($p->date_fin))}}</td>
		<td>{{($p->deplacement=='O')?'OUI':'NO'}}</td>
		<td>{{$p->état}}</td>
		<td>
			<form action="{{ route('Projets.show',$p->id) }}" method="get">
				<input type="submit" value="Voir" class="btn btn-primary">
			</form>
		</td>
		<td>
			<form action="{{ route('Projets.edit',$p->id) }}" method="get">
				<input type="submit" value="Modifier" class="btn btn-primary">
			</form>
		<td>
				<form action="{{ route('Projets.destroy',$p->id) }}" method="post">
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
