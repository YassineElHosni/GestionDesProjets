@extends('layouts.structure')

@section('content')
<style>
h2{border-bottom:1px dashed green;color: green;}
</style>


@include('flash::message')


<div class="form-group align-center">
	<h2>{{ $project->title }} </h2>
</div>
<form action="{{ route('Projects.edit',$project->id) }}" method="get">
	<input type="submit" value="Modifier" class="btn btn-primary float-right">
</form>
<br>
<br>
<hr>

<div class="form-row">
	<div class="form-group col-4">
		<div class="card mr-4" style="width:25rem;">
			<div class="card-body form-inline">
				<h5 class="card-title mr-3">Client:</h5>
				<p class="card-text">{{ $client->name }}</p>
			</div>
		</div>
	</div>

	<div class="form-group col-3">
		<div class="card mr-4" style="width: 25rem;">
			<div class="card-body form-inline">
				<h5 class="card-title mr-3">Etat:</h5>  <!-- state shld be in the right top  with soit a big c(clos) or a big ~(en cour..)-->
				<p class="card-text">{{($project->state)?'en-cours':'clos'}}</p>
			</div>
		</div>
	</div>

	<div class="form-group col">
		<div class="card mr-4" style="width: 25rem;">
			<div class="card-body form-inline">
				<h5 class="card-title mr-3">Chef Projet:</h5>
				<p class="card-text">{{ $chef->name }}</p>
			</div>
		</div>
	</div>
</div>

<div class="col-sm">
	<div class="form-row">
		<div class="form-group">
			<div class="card mr-5" style="width: 40rem;">
				<div class="card-body">
					<h5 class="card-title">Description:</h5>
					<p class="card-text">{{ $project->description }}</p>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="card mr-3" style="width: 20rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Deplacement:</h5>
					<p class="card-text">{{($project->displacement)?'OUI':'NO'}}</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-sm">
	<div class="form-row">
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
					<h5 class="card-title mr-3">Date Debut :</h5>
					<p class="card-text">{{date("M j Y H:i", strtotime($project->startDate))}}</p>
				</div>
			</div>
		</div>

		<div class="form-group col-md-4">
			<div class="card " style="width: 22rem;">
				<div class="card-body form-inline">
					<h5 class="card-title mr-3">Date Fin :</h5>
					<p class="card-text">{{date("M j Y H:i", strtotime($project->finishDate))}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- need to add action of adding task in that project..)-->
<!-- display tasks related to this project -->
<br><h3>Taches du Projet :</h3><br>
<table class="table table-bordered">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Title</th>
		<th scope="col">Date limite</th>
		<th scope="col">State</th>
		<th scope="col">Progression (%)</th>
	</tr>
	</thead>
	<tbody>
	@foreach($tasks as $task)
	<tr>
		<th scope="row">{{$task->title}}</th>
		<td>{{date("F j Y H:i", strtotime($task->limitDate))}}</td>
		<td>{{$task->state}}</td>
		<td><span class="badge badge-primary badge-pill align_center">{{$task->progress }}</span></td>
	</tr>
	@endforeach
	</tbody>
</table>

@endsection
