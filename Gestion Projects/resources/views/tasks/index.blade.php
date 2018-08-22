@extends('layouts.structure')

@section('content')

<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Tout les Taches </h2>  </div>
</div>
<br><br>
<table class="table table-responsive-lg">
<thead>
	<tr>
		<th scope="col">Description</th>
		<th scope="col">Projet</th>
		<th scope="col">Date limite</th>
		<th scope="col">Date debut</th>
		<th scope="col">Priorité</th>
		<th scope="col">Etat</th>
		<th scope="col">Déroulement %</th>
		{{-- <th>commentaire</th> --}}
		<th scope="col"></th>
		<th scope="col"></th>
	</tr>
</thead>
<tbody>
	@foreach($ts as $t)
	<tr>
		<td><b>{{$t->title}}</b></td>
		<td>{{$t->project_title}}</td>
		<td><div style="color:green;font-weight:bold">{{date('Y-m-d', strtotime($t->limitDate))}}</div></td>
		<td>{{($t->d_d)?date('Y-m-d', strtotime($t->d_d)):'-'}}</td>
    <td>
      @if($t->priority==1)
        <div style="color:red;font-weight:bold">
        @elseif($t->priority==2)
          <div style="color:orange;font-weight:bold">
          @elseif($t->priority==3)
            <div style="color:yellow;font-weight:bold">
              @else
                <div style="color:green;font-weight:bold">
      @endif
    		@if($t->priority==1)
          Très Urgent
          @elseif($t->priority==2)
             Urgent
               @elseif($t->priority==3)
                 Normal
                  @else  Peut attendre
        @endif
      </div>
    </td>
  	<td>{{$t->state}}</td>
		<td>{{$t->progress}}</td>
		<td>
			<form action="{{ route('Tasks.show',$t->id) }}" method="get">
				<input type="submit" value="Voir" class="btn btn-primary">
			</form>
		</td>
		<td>
			<form action="{{ route('Tasks.edit',$t->id) }}" method="get">
				<input type="submit" value="Modifier" class="btn btn-primary">
			</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection
