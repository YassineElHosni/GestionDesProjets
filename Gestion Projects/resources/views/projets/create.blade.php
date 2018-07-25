@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>

{!! Form::open(['action'=>['ProjetController@store'],'method' => 'POST' ])!!}
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
   {{ Form::label('intitulee','Sujet:') }}
   {{ Form::text('intitulee','Sujet', ['class'=>'form-control']) }}

   {{ Form::label('description','Description:') }}
   {{ Form::textarea('description',null, ['class'=>'form-control'])}}

   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite','Y-m-d HH:MM:SS', [
          'class'=>'form-control'])}}


<!--deplacement-->
<ul> Déplacement:<br>
  <input type="checkbox" name="deplacement" value="1">O<br>
  <input type="checkbox" name="deplacement" value="0" checked>N<br>
</ul>
  <!--état-->
  <ul> Etat: <br>
    <input type="checkbox" name="état" value="1" checked>en_cours<br>
    <input type="checkbox" name="état" value="0">clos<br>
  </ul>
          {{ Form::label('commentaire','Commentaire:') }}
          {{ Form::textarea('commentaire','comment', ['class'=>'form-control']) }}

          {!! Form::label('user_id','Chef de Projet:') !!}
          {!! Form::select('user_id',$selected_id,null,['class'=>'form-control','id'=>'ChefProjet']) !!}

          {!! Form::label('client_id','Client:') !!}
          {!! Form::select('client_id',$selected_client_id,null,['class'=>'form-control','id'=>'Client']) !!}

 <hr>
  {{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
