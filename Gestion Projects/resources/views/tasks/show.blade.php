@extends('layouts.structure')

@section('content')

@include('flash::message')
	<div class="page-header">
		<div style="border-bottom:1px dashed green" class="form-group form-inline align-center">
					<h2 style="color :green" > Tache : </h2>
		      <h3 style="color :gray" class="ml-5">{{ $task->title }}</h3>
		</div>
	</div>
	<br>
	<br>

	<form action="{{ route('Tasks.updateProgress', $task) }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="col-sm">
			<div class="form-group form-row">
				<div class="card mr-4" style="width:61rem;">
					<div class="card-body">
						<h5>Priorité:
								<span class="badge badge-primary badge-pill float-right ml-4">{{$task->priority }}</span>
							@if($task->priority==1)
								  <div style="color:red;font-weight:bold" class="float-right "> Très Urgent </div>
								@elseif($task->priority==2)
									  <div style="color:orange;font-weight:bold" class="float-right ">Urgent </div>
										 @elseif($task->priority==3)
											  <div style="color:yellow;font-weight:bold" class="float-right ">Normal </div>
												@else
												   <div style="color:green;font-weight:bold" class="float-right ">Peut attendre </div>
							@endif

						</h5>
					</div>
				</div>
			</div>

			<div class="form-group form-row">
				<div class="card mr-4" style="width: 30rem;">
					<div class="card-body form-inline">
						<h5 class="card-title mr-3">Projet related:</h5>
						<p class="card-text">{{ $project->title }}</p>
					</div>
				</div>


			</div>
		</div>

		<div class="col-sm">
			<div class="form-row">
				<div class="form-group ">
					<div class="card mr-3" style="width: 30rem;">
						<div class="card-body form-inline ">
							<h5 class="card-title  mr-4">Date Limite :</h5>
							<p class="card-text float-right">{{date("M j Y h:m:s", strtotime($task->limitDate))}}</p>
						</div>
					</div>
				</div>

				<!--progress range bar -->
				<div class="form-group">
					<div class="card mr-4"style="width: 30rem;">
						<div class="card-body form-inline">
							<h5 class="card-title mr-3">Progression:</h5>
							  @can('updateProgress',$task,$users)<!-- only a worker can edit the progress -->
								<input type="range" id="RangeProgress" name="progress" step="5" oninput="$('#rangeRes').html($('#RangeProgress').val());" value="{{$task->progress}}">
								@endcan
								@cannot('create', App\Post::class)<!-- the disabled range-progress is showed to other visitors-->
							<input disabled type="range" id="RangeProgress" name="progress" step="5" oninput="$('#rangeRes').html($('#RangeProgress').val());" value="{{$task->progress}}">
                @endcannot
							<span id="rangeRes" class="badge badge-success badge-pill float-right">{{$task->progress }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm">
			<div class="form-row">
				<div class="form-group">
					<div class="card mr-5" style="width: 35rem;">
						<div class="card-body">
							<h5 class="card-title mr-3">commentaire:</h5>
							<p class="card-text">{{ $task->comment }}</p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="card mr-3" style="width: 20rem;">
						<div class="card-body form-inline">
							<h5 class="card-title  mr-4">étate:</h5>
							<p class="card-text" name="state">
							{{($task->state=='IN_PROGRESS')?'En-Cours':(($task->state=='FINISHED')?'Fini':(($task->state=='VALIDATED')?'Validée':'empty'))}}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
  @can('updateProgress',$task,$users)<!-- only a worker can edit the progress -->
		<button type="submit" name="submit" class="btn btn-success float-right mr-4">Enregistrer</button>
	@endcan
	</form>
<br>
<br>
<!-- if user allowed action he can add workers for this task -->
	<h3>Current Workers:</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Email</th>
				<th scope="col">Comment</th>
		{{-- 		<th scope="col">Date Debut</th>
				<th scope="col">Date Fin</th> --}}
			</tr>
		</thead>
		<tbody>
			@foreach($users as $u)
			<tr>
				<th scope="row" class="">{{$u->name}}</th>
				<th scope="row">{{$u->email}}</th>
				<th scope="row">{{$u->comment}}</th>
		{{-- 		<td scope="row">{{date("F j Y H:i", strtotime($u->startDate))}}</td>
				<td scope="row">{{date("F j Y H:i", strtotime($u->finishDate))}}</td> --}}
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection

@section('jss')
	@parent

@endsection
