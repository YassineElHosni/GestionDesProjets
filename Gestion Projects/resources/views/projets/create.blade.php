@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>
{{-- {!! Form::model($projet, ['route'=>['projets.store'], 'method' => 'POST' ])!!} --}}
{!! Form::open(['action'=>['ProjetController@store'], 'method' => 'POST' ])!!}

   {{ Form::label('intitule','Sujet:') }}
   {{ Form::text('intitule',null, ['class'=>'form-control']) }}

   {{ Form::label('description','Description:') }}
   {{ Form::textarea('description',null, ['class'=>'form-control'])}}

   {{ Form::label('date_limite','Date limite:') }}
   {{ Form::DateTime('date_limite',null, [
            'class'=>'form-control'])}}
 {{-- 'class'=>'form_datetime' ,@include('script._datetime') --}}

{{-- {{ Form::checkbox('admin',yes/0/1, true) }}
// (1)name , (2)value ,(3) checked/unchecked ,(4)css classe //
 --}}
{{-- deplacement
$movings = array( 0 => 'N', 1 => 'O');
    @foreach ( $movings as $i => moving )
      {!! Form::checkbox('movings[]',$i,['id'=>$i]) !!}
      {!! Form::label( $i, $moving) !!}
    @endforeach --}}
{{-- état
  $states = array( 0 => 'en_cours', 1 => 'clos');

   @foreach ( $states as $i => state )
  {!! Form::checkbox( 'states[]',$state,['id'=>'state'.]
                    !in_array($states[$i],$saved_states),
                    ['class' => 'md-check', 'id' => $state] ) !!}
  {!! Form::label($state,$state) !!}
  @endforeach --}}

   {{--  {{ Form::label('commentaire','Commentaire:') }}
      {{ Form::textarea('commentaire',comment, ['class'=>'form-control']) }}

      {!! Form::label('representant','Chef de Projet:') !!}
      {!! Form::select('representant',$select,chef projet,['class'=>'form-control','id'=>'ChefProjet']) !!} --}}

 <hr>
  {{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
