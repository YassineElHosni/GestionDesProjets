@extends('layouts.structure')

@section('csss')
	@parent
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
@endsection

@section('content')

<form role="form" method="post" action="{{action('ProjetController@store')}}">
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

	<div class="form-group">
		<label for="intitulee" class="col-form-label">Sujet:</label>
		<input type="text" class="form-control" name="intitulee" value="intitulee">
	</div>

	<div class="form-group">
		<label class="col-form-label col-md-2 col-sm-12">Etat:</label>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="Etat_RadioBtn" id="EnCours_RadioBtn" value="0">
			<label class="form-check-label" for="EnCours_RadioBtn">en-cours</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="Etat_RadioBtn" id="Clos_RadioBtn" value="1">
			<label class="form-check-label" for="Clos_RadioBtn">clos</label>
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-form-label">Description:</label>
		<textarea class="form-control" rows="6" name="description" id="description">desc</textarea>
	</div>

	<div class="form-group">
		<label for="date_limite" class="col-md-2 col-form-label">Date Limite</label>
		<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
			<input id="date_limite" name="date_limite" class="form-control" size="16" type="text" value="2018-07-26 11:36:04" readonly>
			<span class="input-group-append">
				<span class="input-group-text fa fa-times fa-lg"></span>
			</span>
			<span class="input-group-append">
				<span class="input-group-text fa fa-calendar-alt fa-lg"></span>
			</span>
		</div>
		<input type="hidden" id="dtp_input1" value=""/><br/>
	</div>

	<div class="form-group col-lg-12">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" id="deplacement" name="deplacement" checked>
			<label class="form-check-label" for="deplacement">
				Deplacement
			</label>
		</div>
	</div>

	<div class="form-group">
		<label class="col-form-label">Commentaire</label>
		<input type="text" class="form-control" name="commentaire" value="comment">
	</div>

	<div class="form-group">
		<label class="col-form-label">Chef de Projet</label>
		<select name = "user_id[]" id="user_id" class="form-control">
			@foreach ($chef_projets as $chef_projet)
				<option value="{{ $chef_projet['id'] }}">{{ $chef_projet['Nom'] }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label class="col-form-label">Client</label>
		<select name = "client_id[]" id="client_id" class="form-control">
			@foreach ($clients as $client)
				<option value="{{ $client['id'] }}">{{ $client['Nom'] }}</option>
			@endforeach
		</select>
	</div>

<input type="submit" class="btn btn-success btn-h1-spacing float-lg-right" value="Ajouter">
</form>

@endsection


@section('jss')
	@parent
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>
@endsection
