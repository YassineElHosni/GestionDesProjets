
@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>
{!! Form::open(['action'=>['ProjetController@store'], 'method' => 'POST' ])!!}

   {{ Form::label('intitule','Sujet:') }}
   {{ Form::text('intitule',null, ['class'=>'form-control'])}}

   {{ Form::label('description','Description:') }}
   {{ Form::textarea('description',null, ['class'=>'form-control'])}}

   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite','Y-m-d HH:MM:SS', ['class'=>'form-control'])}}

      {{ Form::label('deplacement','Deplacement:') }}
      {{ Form::checkbox('O','N')}}

      {{ Form::label('commentaire','Commentaire:') }}
      {{ Form::textarea('commentaire',null, ['class'=>'form-control'])}}

      {{ Form::label('representant','Chef de Projet:') }}
      {!! Form:: select('user_id',$chef_club,null, ['class' => 'form-control']) !!}

 <hr>
{{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
 {!!Form::close()!!}
 <hr>
  <!--{!! Form::submit('Submit',['class'=>'btn btn-success form-control ']) !!}
 {!!Form::close()!!}-->


</div>


@endsection
