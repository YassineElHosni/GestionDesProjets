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
		 			{{-- <th>commentaire</th> --}}
		 		</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($ps as $p)
		 		<tr>

		 			<th scope="row">{{$p->intitulee}}</th>
		 			{{-- <td>{{$p->description}}</td> --}}
					<td>{{$c->Nom}}</td>
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
