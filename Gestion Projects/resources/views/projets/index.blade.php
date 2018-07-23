@extends('layouts.structure')

@section('content')
		 <table class="table table-condensed">
		 	<thead>
		 		<tr>
		 			<th>#</th>
		 			<th>title</th>
		 			{{-- <th>description</th> --}}
		 			<th>date limite</th>
		 			<th>date debut</th>
		 			<th>date fin</th>
		 			<th>deplacement</th>
		 			<th>etat</th>
		 			{{-- <th>commentaire</th> --}}
		 		</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($projets as $p)
		 		<tr>
		 			<th scope="row">{{$p->id}}</th>
		 			<td>{{$p->intitulee}}</td>
		 			{{-- <td>{{$p->description}}</td> --}}
		 			<td>{{date('d-m-Y', strtotime($p->date_limite))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_debut))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_fin))}}</td>
		 			<td>{{$p->deplacement}}</td>
		 			<td>{{$p->état}}</td>
		 		
		 		</tr>
		 		@endforeach
		 	</tbody>
		 </table> 
@endsection