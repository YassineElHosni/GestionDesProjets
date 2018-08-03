@extends('layouts.structure')

@section('csss')
	@parent
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
	<style>
	table.hiden{
		display : none;
	}
	</style>
@endsection

@section('content')
@include('flash::message')

<style> h2{ color: green; }

</style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Modifier la Tache </h2>  </div>
</div>
<br><br>
<form role="form" method="post" action="{{route('Tasks.update',$task->id)}}">
   <input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

	<div class="form-group ml-3">
		<label for="title" class="col-form-label">Sujet:</label>
		<input type="text" class="form-control col-7" name="title" value="{{$task->title}}">
	</div>
<!-- current project related -->
<div class="col-sm">
	<div class="form-row">
				 <div class="form-group mr-4 col-4">
						<label class="col-form-label mr-3">Project related : </label>
						<div class="form-control" name="project_id">{{$task->project_title}}</div>
				 </div>
    </div>
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
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="level1_RadioBtn" value="1" checked>
			<label class="form-check-label" for="level1_RadioBtn">level 1</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="level2_RadioBtn" value="2">
			<label class="form-check-label" for="level2_RadioBtn">level 2</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="level3_RadioBtn" value="3" checked>
			<label class="form-check-label" for="level3_RadioBtn">level 3</label>
	  </div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="priority_RadioBtn" id="level4_RadioBtn" value="4">
			<label class="form-check-label" for="level4_RadioBtn">level 4</label>
		</div>
	</div>
</div>

	<div class="form-group ml-3">
		<label class="col-form-label">Commentaire :</label>
		<textarea type="text" class="form-control col-7" name="comment" >{{$task->comment}}</textarea>
	</div><br>


  <div class="col-sm">
    <div class="form-row">
  <div class="form-group form-inline mr-4">
      	<label class="col-form-label mr-3">Progression : </label>
        <span id="rangeRes" class="badge badge-success badge-pill float-right">{{$task->progress }}</span>
  </div>

	  <div class="form-group form-inline mr-4">
	      <label class="col-form-label mr-3">Etat : </label>
				<div class="form-control" name="state">{{$task->state}}  </div>
		</div>
        <div class="form-check ">
          <input class="form-check-input" type="checkbox" id="valide_state" name="0">
          <label class="form-check-label " for="valide_state">
            Validee
          </label>
        </div>

      </div>
      </div>

<!--Current employees -->
	<h3>Current Employees:</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Nombre de taches</th>
			</tr>
		</thead>
		<tbody id="currentWorkers">
			@foreach($currentEmployees as $ce)
			<tr id="row_CW_{{$ce->id}}">
				<th scope="row" class="">{{$ce->name}}</th>
				<th scope="row">
				   <span id="rangeRes" class="badge badge-success badge-pill float-center">
				   	{{ $ce->taskCount }}
				   </span>
		    	</th>
				<td class="sm-1">
							<input type="button" id="delete_btn{{$ce->id}}"
							onclick="removeFrom({{$ce->id}}, '{{$ce->name}}', {{$ce->taskCount}})"
							value="X" class="btn btn-danger">
        		</td>
			</tr>
			@endforeach

		</tbody>
	</table>
<br>
<!-- choose another employee -->
	<h3>Other Employees:</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Nombre de taches</th>
			</tr>
		</thead>
		<tbody id="otherEmployees">
			@foreach($otherEmployees as $oe)
			<tr id="row_OE_{{$oe->id}}">
				<th scope="row" class="">{{$oe->name}}</th>
				<th scope="row">
				   <span id="rangeRes" class="badge badge-success badge-pill float-center">
				   	{{ $oe->taskCount }}
				   </span>
		    	</th>
				<td class="sm-1">
							<input type="button" id="add_btn{{$oe->id}}"
							onclick="addTo({{$oe->id}}, '{{$oe->name}}', {{$oe->taskCount}})"
							value="+" class="btn btn-primary">
        		</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		<!--Current employees -->
			<input type="hidden" id="addTable" name="addTable" value="">
		<!-- new employee chosen  -->
			<input type="hidden" id="removeTable" name="removeTable" value="">

<input type="submit" class="btn btn-success btn-h1-spacing float-lg-right" value="Enregistrer">
</form>
</div>

@endsection


@section('jss')
	@parent
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}" type="text/javascript"></script>
	
	<script src="{{ asset('js/resposive_Task_User_Select.js') }}"  type="text/javascript"></script>
@endsection
