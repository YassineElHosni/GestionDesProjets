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

<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Modifier la Tache </h2>  </div>
</div>
<br><br>
<form role="form" method="post" action="{{action('TaskController@update',$task->id)}}">
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
						<div class="form-control" name="state">{{$project->title}}  </div>
				 </div>
		<!-- all other projects -->
					<div class="form-group col-6">
						<label class="col-form-label mr-4 ">Change Project:</label>
						<select name = "project_id[]" id="project_id" class="form-control col-6">
							@foreach ($projects as $project)
								<option value="{{ $task->project_id }}">{{ $project['title'] }}</option>
							@endforeach
						</select>
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
</div>

	<div class="form-group ml-3">
		<label class="col-form-label">Commentaire :</label>
		<textarea type="text" class="form-control col-7" name="comment" >{{$task->comment}}</textarea>
	</div><br>
<!--Current employees -->
	<h3>Current Workers:</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Nombre de taches</th>
			</tr>
		</thead>
		<tbody id="currentWorkers">
			@foreach($us as $u)
			<tr id="row_CW_{{$u->id}}">
				<th scope="row" class="">{{$u->name}}</th>
				<th scope="row">
				   <span id="rangeRes" class="badge badge-success badge-pill float-center">
				   	{{ $u->taskCount }}
				   </span>
		    	</th>
		{{-- 		<td scope="row">{{date("F j Y H:i", strtotime($u->startDate))}}</td>
				<td scope="row">{{date("F j Y H:i", strtotime($u->finishDate))}}</td> --}}
				<td class="sm-1">
							<input type="button" id="delete_btn{{$u->id}}"
							onclick="removeFrom({{$u->id}}, '{{$u->name}}', {{$u->taskCount}})"
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
			@foreach($employees as $employee)
			<tr id="row_OE_{{$employee->id}}">
				<th scope="row" class="">{{$employee->name}}</th>
				<th scope="row">
				   <span id="rangeRes" class="badge badge-success badge-pill float-center">
				   	{{ $employee->taskCount }}
				   </span>
		    	</th>
				<td class="sm-1">
							<input type="button" id="add_btn{{$employee->id}}"
							onclick="addTo({{$employee->id}}, '{{$employee->name}}', {{$employee->taskCount}})"
							value="+" class="btn btn-primary">
        		</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{-- 2 hiden tables for data storing ................. --}}
		<!--Current employees -->
			<button hidden id="addTable"></button>
		<!-- new employee chosen  -->
			<button hidden id="removeTable"></button>
{{-- ********************************************** --}}

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
          <input class="form-check-input" type="checkbox" id="valide_state" name="state">
          <label class="form-check-label " for="valide_state">
            Validee
          </label>
        </div>

      </div>
      </div>


<input type="submit" class="btn btn-success btn-h1-spacing float-lg-right" value="Enregistrer">
</form>
</div>

@endsection


@section('jss')
	@parent
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>

		<!-- jQuery storing data in hiden table -->
		<script>
			var aTable = [],rTable = [];
			function contains(t, v){
				return (t.includes(v));
			}
			function addRow(v, isAdd, name, tcount){
				// console.log(v,isAdd,name,tcount);
				var ch = '<tr id="row'+((!isAdd)?'_OE_':'_CW_')+v+'">'+
					'<th scope="row" class="">'+name+'</th>'+
					'<th scope="row">'+
					   '<span id="rangeRes" class="badge badge-success badge-pill float-center">'+tcount+
					   '</span>'+
			    	'</th>'+
					'<td class="sm-1">'+
						'<input type="button"'+
						'onclick="'+((!isAdd)?'addTo':'removeFrom')+'('+v+', \''+name+'\', '+tcount+')" '+
						'value="'+((!isAdd)?'+':'X')+'" class="btn btn-'+((!isAdd)?"primary":"danger")+'" empid="'+v+'">'+
	        		'</td>'+
				'</tr>';
				return ch;
			}
			function addTo(v, name, tcount){
				if(!aTable.includes(v))
				{
					aTable.push(v);//avoid repited values
					$('#currentWorkers').append(addRow(v, 1, name, tcount+1));
					$('#row_OE_'+v).remove();
					if(rTable.includes(v)) rTable.splice(rTable.indexOf(v), 1); 
				}
				$('#addTable').val(aTable);
				console.log("a: "+aTable+", r: "+rTable);
			}
			function removeFrom(v, name, tcount){
				if(!rTable.includes(v))
				{
					rTable.push(v);//avoid repited values
					$('#otherEmployees').append(addRow(v, 0, name, tcount-1));
					$('#row_CW_'+v).remove();
					if(aTable.includes(v)) aTable.splice(aTable.indexOf(v), 1);
				}
				$('#removeTable').val(rTable);
				console.log("a: "+aTable+", r: "+rTable);
			}
		</script>
@endsection
