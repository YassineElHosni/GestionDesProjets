@extends('layouts.structure')

@section('content')
		 <table class="table table-responsive-lg">
		 	<thead>
		 		<tr>
		 			<th scope="col">title</th>
		 			{{-- <th>description</th> --}}
		 			<th scope="col">date limite</th>
		 			<th scope="col">date debut</th>
		 			<th scope="col">date fin</th>
		 			<th scope="col">deplacement</th>
		 			<th scope="col">etat</th>
		 			{{-- <th>commentaire</th> --}}
		 		</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($projets as $p)
		 		<tr>
		 			<td>{{$p->intitulee}}</td>
		 			{{-- <td>{{$p->description}}</td> --}}
		 			<td>{{date('d-m-Y', strtotime($p->date_limite))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_debut))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_fin))}}</td>
		 			<td>{{($p->deplacement=='O')?'OUI':'NO'}}</td>
		 			<td>{{$p->état}}</td>
		 		
		 		</tr>
		 		@endforeach
		 	</tbody>
		 </table> 
@endsection