@extends('layouts.structure')

@section('content')

@include('flash::message')
	<div class="page-header">
		<div class="form-group align-center">
			<h2 style="color:green;">Tache Title </h2>
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
							<span class="badge badge-primary badge-pill float-right">{{$task->priority }}</span>
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

				<div class="form-group">
					<div class="card mr-3" style="width: 30rem;">
						<div class="card-body">
							<h5 class="card-title">Description:</h5>
							<p class="card-text">{{ $task->title }}</p>
						</div>
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
							<input type="range" id="RangeProgress" step="5" name="progress" oninput="$('#rangeRes').html($('#RangeProgress').val());" value="{{$task->progress}}">

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

		<!-- button save -->
		<button type="submit" name="submit" class="btn btn-primary float-right mr-4">Save</button>
	</form>
@endsection

@section('jss')
	@parent

@endsection
