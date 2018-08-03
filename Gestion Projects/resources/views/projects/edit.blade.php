@extends('layouts.structure')
@section('csss')
	@parent
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class='container'>

		<div class="page-header">
		  <div style="border-bottom:1px dashed green" class="form-group form-inline align-center">
		        <h2 style="color :green" > Modifier le Projet : </h2>
		        <h3 style="color :gray" class="ml-5">{{ $p->title }}</h3>
		  </div>
		</div>
  <br>
  <hr>


  <form action="{{ route('Projects.update', $p) }}" method="POST" class="form-horizontal">
         <input type="hidden" name="_method" value="PUT">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="col-sm">
	<div class="form-row">
    <div class="form-group mr-4 col-6">
     <strong> <label for="title" class="col-form-label mr-3" >Sujet:</label>
       <input type="text" class="form-control " name="title" value="{{$p->title}}" >
    </div>

	  <div class="form-group col-15">
			<label class="form-label mr-4" >Chef de Projet :</label>

					<select name = "user_id[]" id="user_id" class="form-control">
						@foreach ($project_managers as $project_manager)
							<option value="{{ $project_manager['id'] }}">{{ $project_manager['name'] }}</option>
						@endforeach
					</select>
	  </div>
	</div>
</div>

<div class="col-sm">
	<div class="form-row">
    <div class="form-group mr-4 col-4 form-inline">
              <label class="col-sm-3  mr-5 col-form-label">Client:</label>
              <div class="form-control" name="client_id"> {{$p->client_name}}</div>
	  </div>

		  <div class="form-group col-8">
				<label for="limitDate" class="col-md-4 col-form-label">Date Limite</label>
				<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
					<input id="limitDate" name="limitDate" class="form-control" size="16" type="text" value="{{ $p->limitDate }}" readonly>
					<span class="input-group-append">
						<span class="input-group-text fa fa-times fa-lg"></span>
					</span>
					<span class="input-group-append">
						<span class="input-group-text fa fa-calendar-alt fa-lg"></span>
					</span>
				</div>
				<input type="hidden" id="dtp_input1" value=""/><br/>
			</div>
			<!--état-->
		<div class="form-group col-8">
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="state_RadioBtn" id="EnCours_RadioBtn" value="1"
			  <?php echo ($p->state)?'checked':''?>>
			  <label class="form-check-label" for="EnCours_RadioBtn">en-cours</label>


			  <input class="form-check-input ml-3" type="radio" name="state_RadioBtn" id="Clos_RadioBtn" value="0"<?php echo (!$p->state)?'checked':'' ?>>
			  <label class="form-check-label" for="Clos_RadioBtn">clos</label>
			</div>
		</div>	
  </div>
</div>

    <div class="form-group">
         <label for="description" class="col-form-label" >Description:</label>
         <textarea class="form-control" rows="10" name="description" value="description">{{$p->description}}</textarea>
    </div>


<!--displacement-->

<div class="form-group col-lg-12">
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="displacement" id="displacement"
  <?php echo ($p->displacement)?'checked':'' ?> >
  <label class="form-check-label" for="displacement">
  Deplacement
  </label>
</div>
</div>


  <div class="form-groupe">
    <label class="col-form-label" >Commentaire :</label></strong>
    <textarea class="form-control" rows="8" name="comment" value="" >{{$p->comment}}</textarea>
  </div>

 <hr>
 <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
    </form>

</div>


@endsection

@section('jss')
	@parent
   <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>
     @endsection
