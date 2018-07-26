@extends('layouts.structure')

@section('content')
		 <table class="table table-condensed">
		 	<thead>
		 		<tr>

		 			<th>Title</th>
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

		 			<th scope="row">{{$p->intitulee}}</th>
		 			{{-- <td>{{$p->description}}</td> --}}
		 			<td>{{date('d-m-Y', strtotime($p->date_limite))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_debut))}}</td>
		 			<td>{{date('d-m-Y', strtotime($p->date_fin))}}</td>
		 			<td>{{($p->deplacement=='O')?'OUI':'NO'}}</td>
		 			<td>{{$p->état}}</td>

					<td>{!! Form::open(['route' =>['Projet.show',$p->id],'method'=>'get'])!!}
		               {{ Form::button('Voir', array('class'=>'btn btn-primary ', 'type'=>'submit')) }}
		       {!!Form::close()!!}</td>
					 <td>{!! Form::open(['route' =>['Projet.edit',$p->id],'method'=>'get'])!!}
 		               {{ Form::button('Modifier', array('class'=>'btn btn-primary ', 'type'=>'submit')) }}
 		       {!!Form::close()!!}</td>
		 		</tr>
		 		@endforeach
		 	</tbody>
		 </table>
@endsection
