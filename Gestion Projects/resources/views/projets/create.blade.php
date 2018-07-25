@extends('layouts.structure')
@section('bouttons')


@endsection

@section('content')

  <div>

      <h3> Nouveau Projet </h3><br>
  <hr>

{{-- {!! Form::model($projet, ['route'=>['projets.store'], 'method' => 'POST' ])!!} --}}
{!! Form::open(['action'=>['ProjetController@store'], 'method' => 'POST' ])!!}

{!! Form::open(['action'=>['ProjetController@store'],'method' => 'POST' ])!!}
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
   {{ Form::label('intitulee','Sujet:') }}
   {{ Form::text('intitulee','Sujet', ['class'=>'form-control']) }}

   {{ Form::label('description','Description:') }}
   {{ Form::textarea('description',null, ['class'=>'form-control'])}}

   {{ Form::label('date_limite','Date limite:') }}
<<<<<<< HEAD
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

          <div class="form-group">
            <label>Chef de Projet</label>
            <select name = "user_id[]" id="user_id" class="form-control">
              @foreach ($chef_projets as $chef_projet)
                <option value="{{ $chef_projet['id'] }}">{{ $chef_projet['Nom'] }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Client</label>
            <select name = "client_id[]" id="client_id" class="form-control">
              @foreach ($clients as $client)
                <option value="{{ $client['id'] }}">{{ $client['Nom'] }}</option>
              @endforeach
            </select>
          </div>
      
 <hr>
  {{ Form::button('Ajouter', array('class'=>'btn btn-success btn-h1-spacing','type'=>'submit')) }}
  {!!Form::close()!!}
 <hr>


</div>


@endsection
