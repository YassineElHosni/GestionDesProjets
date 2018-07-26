@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>


  {{--{!! Form::open( ['action' => ['ProjetController@update',$p->id], 'method' => 'POST'] ) !!}--}}
  <form action="{{ route('Projets.update', $p) }}" method="POST" class="form-horizontal">
         <input type="hidden" name="_method" value="PUT">
         <input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="form-row align-items-center">
  <div class="form-group">
      <label for="intitulee" class="col-form-label" >Sujet:</label>
       <input type="text" class="form-control  mb-2" name="intitulee" value="intitulee" >{{$p->intitulee}}<br>
  </div>
</div>

<div class="form-row align-items-center">
      <div class="form-group">
       <label for="description" class="col-form-label" >Description:</label>
       <textarea class="form-control" rows="6" name="description" value="description">{{$p->description}}</textarea>
       </div>
 </div>
 <div class="form-row align-items-center">
   <div class="form-group">
   {{ Form::label('date_limite','Date limite:') }}
   {{$p->date_limite}}
   </div>
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
  <input class="form-check-input" type="radio" name="Etat_RadioBtn" id="EnCours_RadioBtn" value="0"<?php echo ($etat=='en_cours')?'checked':'' ?>>
  <label class="form-check-label" for="EnCours_RadioBtn">en-cours</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Etat_RadioBtn" id="Clos_RadioBtn" value="1"<?php echo ($etat=='clos')?'checked':'' ?>>
  <label class="form-check-label" for="Clos_RadioBtn">clos</label>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-3 col-form-label" >Commentaire</label>
    <input type="text" class="form-control" name="commentaire" >{{$p->commentaire}}<br>
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
 <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>
  {{--{{ Form::button('Modifier', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!} --}}}
 <hr>


</div>


@endsection
