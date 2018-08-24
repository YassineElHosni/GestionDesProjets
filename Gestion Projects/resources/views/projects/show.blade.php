@extends('layouts.structure')

@section('csss')
	@parent
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
@endsection

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


@include('flash::message')

<br>

<div class="form-group align-center">
	<h1>{{ $project->title }} </h1>
</div>
<form action="{{ route('Projects.edit',$project->id) }}" method="get">
	<button type="submit" class="btn btn-primary float-right"><i class="fa fa-edit"></i> Modifier</button>
</form>
<br><hr><br>

<form>
	 <label  for="state">Etat :</label>
   <input type="text" id="state" name="state" value="{{($project->state)?'en-cours':'clos'}}">
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
					<p class="card-text">{{date("M j Y H:i", strtotime($project->startDate))}}</p>
				</div>
			</div>
	</div>
		<div class="form-group col-md-4">
			<div class="card mr-3" style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Limite :</h5>
					<p class="card-text">{{date("M j Y H:i", strtotime($project->limitDate))}}</p>
				</div>
			</div>
		</div>
		<div class="form-group col-md-4">
			<div class="card " style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Fin :</h5>
					<p class="card-text"> <?php $project->finishDate=='NULL'? 'inachevé': date('Y-m-d', strtotime($project->finishDate));?></p>
				</div>
			</div>
		</div>
	</div>
</div>

</form>

<br>
<!-- display tasks related to this project -->
<br><h3>Taches du Projet :</h3>
	<!-- can add task to this project -->
	<form action="{{ route('Tasks.addTaskToPrj',$project->id) }}" method="get">
		<button type="submit" class="btn btn-warning float-right"><i class="fas fa-plus"></i></button>
	</form>
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
		<th scope="row">{{$task->worker}}</th><!--if lot of workers? -->
		<th scope="row">{{$task->title}}</th>
		<td>{{date("F j Y H:i", strtotime($task->limitDate))}}</td>
		<td>{{$task->state}}</td>
		<td><span class="badge badge-primary badge-pill align_center">{{$task->progress }}</span></td>

		<td><form action="{{ route('Tasks.show',$task->id) }}" id="show{{$task->id}}" method="get"> </form>
			<i class="btn btn-success far fa-eye text-dark" onclick="$('#show{{$task->id}}').submit();"></i>

	  </td>
	</tr>
	@endforeach
	</tbody>
</table>
<br>
@endsection
