@extends('layouts.structure')

@section('jss')
 @parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--JQuery script -->
<script>

$('#RangeProgress').on('change',function(){
  alert('\t state changed to : '+ $('#RangeProgress').val() +'%'
                                        +'\n Please save your changes !');
});
  /*  function myFunction(){
    /*  var newvalue =document.getElementById("myRange");
      var defaultVal =newvalue.value;

      document.getElementById("demo").innerHTML ="The progress pourcentage was:" + defaultVal
                                                + "<br> The progress was edited to :" + newvalue;
      $('#demo').html= "Progress changed to : "+ $('#myRange').val();*/


</script>

 @stop
@section('content')

<style> h2{ color: green; } </style>
 <div class="page-header">
		<div class="form-group align-center">
			     	 <h2>Tache Title </h2>  </div>
</div>
<br><br>

<form action="{{ route('Taches.update', $tache) }}" method="POST">
       <input type="hidden" name="_method" value="PUT">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="container" >

<div class="col-sm">
  <div class="form-group form-row">
    <div class="card mr-4" style="width:61rem;">
    <div class="card-body">
      <h5>Priorité:
        <span class="badge badge-primary badge-pill float-right">{{$tache->priorité }}</span></h5>
      </div>
      </div>
    </div>

  <div class="form-group form-row">
  <div class="card mr-3" style="width: 30rem;">
  <div class="card-body form-inline">
    <h5 class="card-title mr-3">Projet related:</h5>
      <p class="card-text">{{ $projet->intitulee }}</p>
    </div>
    </div>

<div class="form-group">
  <div class="card mr-3" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">Description:</h5>
      <p class="card-text">{{ $tache->description }}</p>
    </div>
    </div>
</div></div></div>

<div class="col-sm">
  <div class="form-row">
  <div class="form-group ">
    <div class="card mr-3" style="width: 30rem;">
    <div class="card-body form-inline ">
      <h5 class="card-title  mr-3">Date Limite :</h5>
        <p class="card-text float-right">{{date("M j Y h:m:s", strtotime($tache->date_limite))}}</p>
      </div>
      </div>
    </div>

      <!--progress range bar -->
      <div class="form-group">
        <div class="card mr-3"style="width: 30rem;">
        <div class="card-body form-inline">
          <h5 class="card-title mr-3">Progression:</h5>
      <input type="range" id="RangeProgress" value="{{$tache->déroulement}}">
       </div>
       </div>
      </div>

</div></div>

<div class="col-sm">
  <div class="form-row">
    <div class="form-group">
    <div class="card mr-5" style="width: 35rem;">
    <div class="card-body">
      <h5 class="card-title mr-3">commentaire:</h5>
      	<p class="card-text">{{ $tache->commentaire }}</p>
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="card mr-3" style="width: 20rem;">
      <div class="card-body form-inline">
        <h5 class="card-title  mr-3">State:</h5>
          <p class="card-text">{{($tache->état=='en_cours')?'en_cours':'fini'}}</p>
        </div>
        </div>
      </div>
</div></div>

    <!-- button save -->
    <button type="submit" name="submit" class="btn btn-primary float-right mr-4">Save</button>
       </form>
</div>
@endsection
