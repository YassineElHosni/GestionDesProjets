@extends('layouts.structure')

@section('content')
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
	@foreach($ts as $t)
	<tr>
		<th scope="row">{{$t->intitulee}}</th>
		{{-- <td>{{$t->description}}</td> --}}
		<td>{{$c[$t->id]}}</td>
		<td>{{date('d-m-Y', strtotime($t->date_limite))}}</td>
		<td>{{date('d-m-Y', strtotime($t->date_debut))}}</td>
		<td>{{date('d-m-Y', strtotime($t->date_fin))}}</td>
		<td>{{($t->deplacement=='O')?'OUI':'NO'}}</td>
		<td>{{$t->état}}</td>
		<td>
			<form action="{{ route('Projets.show',$t->id) }}" method="get">
				<input type="submit" value="Voir" class="btn btn-primary">
			</form>
		</td>
		<td>
			<form action="{{ route('Projets.edit',$t->id) }}" method="get">
				<input type="submit" value="Modifier" class="btn btn-primary">
			</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
