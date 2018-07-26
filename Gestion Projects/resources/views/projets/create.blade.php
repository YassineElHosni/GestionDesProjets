@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>


{!! Form::open(['action'=>['ProjetController@store'],'method' => 'POST' ])!!}


<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<label for="intitulee" class="col-sm-3 col-form-label" >Sujet:</label>
<div class="form-row align-items-center">
  <div class="col-auto">
       <input type="text" class="form-control  mb-2" name="intitulee">
</div>


 <div class="col-auto">
     <label for="description" class="col-sm-3 col-form-label" >Description:</label>
        <div class="col-sm-10 mb-3">
       <textarea class="form-control" rows="6" name="description"></textarea>
       </div>
 </div>
 <div class="form-row align-items-center">
   <div class="col-auto  mb-2">
   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite','Y-m-d HH:MM:SS', ['class'=>'form-control'])}}
   </div>
</div>
</div>

<!--deplacement-->
<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-5  mb-3 col-form-label" >Déplacement:</label>
      <div class="mb-3 form-check form-check-inline">
    <label class="radio-inline"><input type="radio" name="deplacement" value='yes'/>O</label>
    <label class="radio-inline"><input type="radio" name="deplacement" value='no' checked />N</label>
  </div>
  </div>

<!--état-->

  <div class="col-auto">
    <label class="col-sm-3  mb-2 col-form-label" >Etat:</label>
    <div class="mb-3 form-check form-check-inline">
      <label class="radio-inline"><input type="radio" name="état" value='no' checked />en_cours</label>
      <label class="radio-inline"><input type="radio" name="état" value='yes' />clos</label>
  </div>
  </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-6  mb-2 col-form-label" >Commentaire</label>
    <div class="mb-3 form-check form-check-inline">
    <textarea class="form-control" rows="6" name="commentaire" id="comment"></textarea>
  </div>
</div>

  <div class="col-auto">
      <label class="col-sm-6  mb-3 col-form-label" >Chef de Projet</label>
            <select name = "user_id[]" id="user_id" class="form-control">
              @foreach ($chef_projets as $chef_projet)
                <option value="{{ $chef_projet['id'] }}">{{ $chef_projet['Nom'] }}</option>
              @endforeach
            </select>
 </div>

  <div class="col-auto">
            <label class="col-sm-3  mb-2 col-form-label">Client</label>
            <select name = "client_id[]" id="client_id" class="form-control">
              @foreach ($clients as $client)
                <option value="{{ $client['id'] }}">{{ $client['Nom'] }}</option>
              @endforeach
            </select>
  </div>
</div>
 <hr>
  {{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
