@extends('layouts.structure')
@section('csss')
	@parent
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}" rel="stylesheet">
@endsection

@section('content')

  <div>

      <h3> Modifier le Projet </h3><br>
  <hr>


  {{--{!! Form::open( ['action' => ['ProjetController@update',$p->id], 'method' => 'POST'] ) !!}--}}
  <form action="{{ route('Projets.update', $p) }}" method="POST" class="form-horizontal">
         <input type="hidden" name="_method" value="PUT">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
      <label for="intitulee" class="col-form-label" >Sujet:</label>
       <input type="text" class="form-control " name="intitulee" value="{{$p->intitulee}}" >
  </div>

    <div class="col-auto">
              <label class="col-sm-3  mr-5 col-form-label">Client:</label>
                <label class="col-sm-3 col-form-label" > {{$c->Nom}}</label>
                <input type="hidden" name="client_id" value="{{$c->id}}">
    </div>


    <div class="form-group">
         <label for="description" class="col-form-label" >Description:</label>
         <textarea class="form-control" rows="10" name="description" value="description">{{$p->description}}</textarea>
    </div>

  <div class="form-group">
		<label for="date_limite" class="col-md-4 col-form-label">Date Limite</label>
		<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
			<input id="date_limite" name="date_limite" class="form-control" size="16" type="text" value="{{ $p->date_limite }}" readonly>
			<span class="input-group-append">
				<span class="input-group-text fa fa-times fa-lg"></span>
			</span>
			<span class="input-group-append">
				<span class="input-group-text fa fa-calendar-alt fa-lg"></span>
			</span>
		</div>
		<input type="hidden" id="dtp_input1" value=""/><br/>
	</div>

<!--deplacement-->

<div class="form-group col-lg-12">
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="deplacement" id="deplacement" <?php echo ($dep=='O')?'checked':'' ?> >
  <label class="form-check-label" for="deplacement">
  Deplacement
  </label>
</div>
</div>
<!--état-->
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Etat_RadioBtn" id="EnCours_RadioBtn" value="0"<?php echo ($etat=='en-cours')?'checked':'' ?>>
  <label class="form-check-label" for="EnCours_RadioBtn">en-cours</label>


  <input class="form-check-input ml-3" type="radio" name="Etat_RadioBtn" id="Clos_RadioBtn" value="1"<?php echo ($etat=='clos')?'checked':'' ?>>
  <label class="form-check-label" for="Clos_RadioBtn">clos</label>
</div>


  <div class="form-groupe">
    <label class="col-form-label" >Commentaire</label>
    <textarea class="form-control" name="commentaire" value="" >{{$p->commentaire}}</textarea>
  </div>


  <div class="form-groupe">
      <label class="col-form-label" >Chef de Projet</label>

          <select name = "user_id[]" id="user_id" class="form-control">
            @foreach ($chef_projets as $chef_projet)
              <option value="{{ $chef_projet['id'] }}">{{ $chef_projet['Nom'] }}</option>
            @endforeach
          </select>
 </div>

 <hr>
 <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
    </form>

 <hr>


</div>


@endsection

@section('jss')
	@parent
	<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>
@endsection
