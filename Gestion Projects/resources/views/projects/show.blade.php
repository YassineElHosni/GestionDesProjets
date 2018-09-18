@extends('layouts.structure')

@section('content')
<style>
h1{border-bottom:1px ;color: grey;}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
		font-weight: bold;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #3CBC8D;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    overflow :auto;
}
</style>

<br>

<div class="form-group align-center">
	<h1>
		{{ $project->title }}
		<span class="badge badge-primary badge-pill align_center">{{$project->daysCount }} jours</span>
	</h1>
</div>

@if(!Auth::user()->Auth_hasRole('EMPLOYEE'))
  @if($project->state!=0)<!--we can't edit a clos Project -->
  <form action="{{ route('Projects.edit',$project->id) }}" method="get">
  	<button type="submit" class="btn btn-primary float-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button>
  </form>
  @endif
@endif
<br><hr><br>

<form>
	 <label  for="state">Etat :</label>
   <input  type="text" id="state" name="state" value="~ {{($project->state)?'en-cours':'clos'}} ~">
   <label for="client">Client :</label>
   <input type="text" id="client" name="client" value="{{ $client->name }}">
	 <label for="chef">Chef de Projet :</label>
   <input type="text" id="chef" name="chef" value="{{ $chef->name }}">
   <label for="desc">Description :</label>
   <textarea id="desc" name="desc" >{{ $project->description }}</textarea>
	 <label for="dep">Deplacement :</label>
   <input type="text" id="dep" name="dep" value="{{($project->displacement)?'OUI':'NON'}}">

<div class="col-sm">
	<div class="form-row">

		<div class="form-group col-md-4">
			<div class="card " style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Debut :</h5>
					<p style="font-weight: bold;" class="card-text">{{date("M j Y - H:i", strtotime($project->startDate))}}</p>
				</div>
			</div>
	</div>
		<div class="form-group col-md-4">
			<div class="card mr-3" style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Limite :</h5>
					<p style="font-weight: bold;" class="card-text">{{date("M j Y - H:i", strtotime($project->limitDate))}}</p>
				</div>
			</div>
		</div>
		<div class="form-group col-md-4">
			<div class="card " style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Fin :</h5>
					<p style="font-weight: bold;" class="card-text">{{ ($project->finishDate) ? date("M j Y - H:i", strtotime($project->finishDate)) : ""}}</p>
				</div>
			</div>
		</div>
	</div>
</div>

</form>

<br>
<!-- display tasks related to this project -->
<br><h3>Tâches du Projet :</h3>
	<!-- can add task to this project -->
  <!--can('addTaskToPrj',App\User::class) -->
	@if(!Auth::user()->Auth_hasRole('EMPLOYEE'))
    @if($project->state!=0)<!--we can't edit a clos Project -->
    	<form action="{{ route('Tasks.addTaskToPrj',$project->id) }}" method="get">
    		<button type="submit" class="btn btn-warning float-right"><i class="fa fa-plus" aria-hidden="true"></i></button>
    	</form>
    @endif
	@endif
	<!--endcan-->
<br><hr>

<table class="table table-bordered">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Intervenant</th>
		<th scope="col">Title</th>
		<th scope="col">Date limite</th>
		<th scope="col">State</th>
		<th scope="col">Progression (%)</th>
		<th scope="col"></th>
	</tr>
	</thead>
	<tbody>
	@foreach($tasks as $task)
	<tr>
		<th scope="row">
			<div class="btn-group" role="group">
				<button id="btnGroupDrop_{{$task->id}}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<o>
				</button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop_{{$task->id}}">
					@foreach($task->worker as $w)
						<a class="dropdown-item" href="{{route('Users.show',$w->id)}}">{{$w->name}}</a>
					@endforeach
				</div>
			</div>
		</th>
		<th scope="row">{{$task->title}}</th>
		<td>{{date("F j Y H:i", strtotime($task->limitDate))}}</td>
		<td>{{($task->state=='IN_PROGRESS')?'En-Cours':(($task->state=='FINISHED')?'Fini':(($task->state=='VALIDATED')?'Validée':'empty'))}}</td>
		<td><span class="badge badge-primary badge-pill align_center">{{$task->progress }}</span></td>

		<td><form action="{{ route('Tasks.show',$task->id) }}" id="show{{$task->id}}" method="get"> </form>
			<i class="btn btn-success fa fa-eye text-dark" aria-hidden="true" onclick="$('#show{{$task->id}}').submit();"></i>

	  </td>
	</tr>
	@endforeach
	</tbody>
</table>
<br>
@endsection
