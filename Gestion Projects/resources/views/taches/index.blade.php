@extends('layouts.structure')

@section('content')
<table class="table table-responsive-lg">
<thead>
	<tr>
		<th scope="col">Description</th>
		<th scope="col">Projet</th>
		<th scope="col">Date limite</th>
		<th scope="col">Date debut</th>
		<th scope="col">Priorité</th>
		<th scope="col">Etat</th>
		<th scope="col">Déroulement</th>
		{{-- <th>commentaire</th> --}}
		<th scope="col"></th>
		<th scope="col"></th>
	</tr>
</thead>
<tbody>
	@foreach($ts as $t)
	<tr>
		<td>{{$t->description}}</td>
		<td>{{$t->projet_Intitulee}}</td>
		<td>{{date('Y-m-d', strtotime($t->date_limite))}}</td>
		<td>{{($t->d_d)?date('Y-m-d', strtotime($t->d_d)):'-'}}</td>
		<td>{{$t->priorité}}</td>
		<td>{{$t->état}}</td>
		<td>{{$t->déroulement}}</td>
		<td>
			<form action="{{ route('Taches.show',$t->id) }}" method="get">
				<input type="submit" value="Voir" class="btn btn-primary">
			</form>
		</td>
		<td>
			<form action="{{ route('Taches.edit',$t->id) }}" method="get">
				<input type="submit" value="Modifier" class="btn btn-primary">
			</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
