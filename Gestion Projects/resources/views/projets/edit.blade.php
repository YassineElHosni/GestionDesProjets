@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>


  {!! Form::open( ['action' => ['ProjetController@update',$projet->id], 'method' => 'POST'] ) !!}

<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<div class="form-row align-items-center">
  <div class="col-auto">
      <label for="intitulee" class="col-sm-3 col-form-label" >Sujet:</label>
       <input type="text" class="form-control  mb-2" name="intitulee" value="{{$projet->intitulee}}"><br>
</div>


 <div class="col-auto">
     <label for="description" class="col-sm-3 col-form-label" >Description:</label>
        <div class="col-sm-10 mb-3">
       <textarea class="form-control" rows="6" name="description" value="{{$projet->description}}"></textarea>
       </div>
 </div>
 <div class="form-row align-items-center">
   <div class="col-auto">
   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite','{{$projet->date_limite}}, ['class'=>'form-control'])}}
   </div>
</div>

<!--deplacement-->
<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-5 col-form-label" >Déplacement:</label>
      <div class="form-check form-check-inline">
        <input type="radio" name="deplacement" <?php echo ($deplacement=='O')?'checked':'' ?>>O</label>
        <input type="radio" name="deplacement" <?php echo ($deplacement=='N')?'checked':'' ?>>N</label>
  </div>
  </div>
</div>

<!--état-->
<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-3 col-form-label" >Etat:</label>
    <div class="form-check form-check-inline">
    <input class="radio-inline" name="état" value="1" <?php echo ($état=='en_cours')?'checked':'' ?> >en_cours<br>
    <input class="radio-inline" name="état" value="0" <?php echo ($état=='clos')?'checked':'' ?>>clos<br>
  </div>
  </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
    <label class="col-sm-3 col-form-label" >Commentaire</label>
    <input type="text" class="form-control" name="commentaire" value="{{$projet->commentaire}}"><br>
  </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
      <label class="col-sm-6 col-form-label" >Chef de Projet</label>

          <label class="col-sm-3 col-form-label" name="user_id" value="{{$chef->Nom}}"   </label>
      {!! Form::open(['route' =>['Projet.chef_modify',$chef,$projet ],'method'=>'get'])!!}
               {{ Form::button('Modifier', array('class'=>'btn btn-primary ', 'type'=>'submit')) }}
      {!!Form::close()!!}
 </div>
</div>

<div class="form-row align-items-center">
  <div class="col-auto">
            <label class="col-sm-3 col-form-label">Client</label>
              <label class="col-sm-3 col-form-label" name="client_id" value="{{$client->Nom}}"></label>

  </div>
</div>
 <hr>
  {{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
