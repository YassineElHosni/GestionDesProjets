@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>


  {!! Form::open( ['action' => ['ProjetController@update',$p->id], 'method' => 'POST'] ) !!}

<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="form-row align-items-center">
  <div class="col-auto">
      <label for="intitulee" class="col-sm-3 col-form-label" >Sujet:</label>
       <input type="text" class="form-control  mb-2" name="intitulee" value="{{$p->intitulee}}"><br>
</div>


 <div class="col-auto">
     <label for="description" class="col-sm-3 col-form-label" >Description:</label>
        <div class="col-sm-10 mb-3">
       <textarea class="form-control" rows="6" name="description" value="{{$p->description}}"></textarea>
       </div>
 </div>
 <div class="form-row align-items-center">
   <div class="col-auto">
   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite','{{$p->date_limite}}, ['class'=>'form-control'])}}
   </div>
</div>

<!--deplacement-->
<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-5 col-form-label" >Déplacement:</label>
      <div class="form-check form-check-inline">
        <input type="radio" name="deplacement" value='yes'<?php echo ($dep=='O')?'checked':'' ?>><label>O</label>
        <input type="radio" name="deplacement" value='no'<?php echo ($dep=='N')?'checked':'' ?>><label>N</label>
  </div>
  </div>
</div>

<!--état-->
<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-3 col-form-label" >Etat:</label>
    <div class="form-check form-check-inline">
      <input class="radio" name="état" value='no'<?php echo ($etat=='en_cours')?'checked':'' ?> ><label>en_cours</label>
      <input class="radio" name="état" value='yes' <?php echo ($etat=='clos')?'checked':'' ?>><label>clos</label>
    </div>
  </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-3 col-form-label" >Commentaire</label>
    <input type="text" class="form-control" name="commentaire" value="{{$p->commentaire}}"><br>
  </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
      <label class="col-sm-6 col-form-label" >Chef de Projet</label>

          <select name = "user_id[]" id="user_id" class="form-control">
            @foreach ($chef_projets as $chef_projet)
              <option value="{{$u->Nom}}">{{ $chef_projet['Nom'] }}</option>
            @endforeach
          </select>
 </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
            <label class="col-sm-3  col-form-label">Client</label>
              <label class="col-sm-3 col-form-label" name="client_id" > {{$c->Nom}}</label>

  </div>
</div>
 <hr>
  {{ Form::button('Modifier', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
