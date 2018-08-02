@extends('layouts.structure')

@section('csss')
	@parent
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
@endsection

@section('content')
@include('flash::message')

<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Modifier la Tache </h2>  </div>
</div>
<br><br>
<form role="form" method="post" action="{{action('TaskController@update',$task->id)}}">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

	<div class="form-group">
		<label for="title" class="col-form-label">Sujet:</label>
		<input type="text" class="form-control" name="title" value="{{$task->title}}">
	</div>

 <div class="form-row">
	<div class="form-group col-6">
		<label class="col-form-label">Projet related :</label>
		<select name = "project_id[]" id="project_id" class="form-control">
			@foreach ($projects as $project)
				<option value="{{ $task->project_id }}">{{ $project['title'] }}</option>
			@endforeach
		</select>
	</div>

	<div class="col">

	<div class="form-group">
		<label for="date_limite" class="col-md-3 col-form-label">Date Limite</label>
		<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
			<input id="limitDate" name="limitDate" class="form-control" size="16" type="text" value="{{$task->limitDate}}" readonly>
			<span class="input-group-append">
				<span class="input-group-text fa fa-times fa-lg"></span>
			</span>
			<span class="input-group-append">
				<span class="input-group-text fa fa-calendar-alt fa-lg"></span>
			</span>
		</div>
		<input type="hidden" id="dtp_input1" value=""/><br/>
	</div>

	<div class="form-group">
		<label class="col-form-label col-md-2 col-sm-12">Priorité:</label>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="EnCours_RadioBtn" value="1" checked>
			<label class="form-check-label" for="level1_RadioBtn">level 1</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="Clos_RadioBtn" value="2">
			<label class="form-check-label" for="level2_RadioBtn">level 2</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="EnCours_RadioBtn" value="3" checked>
			<label class="form-check-label" for="level3_RadioBtn">level 3</label>
	  </div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="Clos_RadioBtn" value="4">
			<label class="form-check-label" for="level4_RadioBtn">level 4</label>
		</div>
	</div>
</div></div>

	<div class="form-group">
		<label class="col-form-label">Commentaire</label>
		<textarea type="text" class="form-control" name="comment" value="{{$task->comment}}"></textarea>
	</div>

	<div class="form-group">
		<label class="col-form-label">Attribué à :</label>
		<select name = "user_id[]" id="user_id" class="form-control">
			@foreach ($employees as $employee)
				<option value="{{ $task->user_id}}">{{ $employee['name'] }}</option>
			@endforeach
		</select>
	</div>

  <div class="col-sm">
    <div class="form-row">
  <div class="form-group form-inline">
      	<label class="col-form-label">Progression : </label>
        <span id="rangeRes" class="badge badge-success badge-pill float-right">{{$task->progress }}</span>
  </div>

  <div class="form-group form-inline">
      <label class="col-form-label">Etat : </label>
        <p name="state">{{$task->state}}  </p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="valide_state" name="state" checked>
          <label class="form-check-label" for="valide_state">
            Validee
          </label>
        </div>

      </div>
      </div>
    </div>
</div>

<input type="submit" class="btn btn-success btn-h1-spacing float-lg-right" value="Modifier">
</form>

@endsection


@section('jss')
	@parent
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>
@endsection
