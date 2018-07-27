@extends('layouts.structure')



@section('content')
	<div class="form-group">
		<div class="col-lg-12">.</div>
		<div class="col-lg-12 h1">Home Page</div>
	</div>
	<br><br>
	<hr>
	<h4>Last Few UnFinished Projects:</h4>
	@foreach($LastFewProjects as $p)
	<div class="alert alert-info alert-dismissible fade show form-inline" role="alert">
	  <div class="font-weight-bold col-lg-3">{{$p->intitulee}}</div><div class="font-weight-bold col-lg-3">{{$p->état}}</div><div class="col-lg-3">{{$p->updated_at}}</div>
	{{--   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button> --}}
	</div>
	@endforeach
	<h4>Last Few UnFinished Tasks:</h4>
	@foreach($LastFewTasks as $t)
	<div class="alert alert-warning alert-dismissible fade show form-inline" role="alert">
		<div class="font-weight-bold col-lg-3">{{$t->description}}</div>
		<div class="font-weight-bold col-lg-3">{{$t->état}}</div>
		<div class="col-lg-3">{{$t->updated_at}}</div>
		<a class="close" href="./Taches/{{$t->id}}">
			<span class="badge badge-danger badge-pill" >{{$t->priorité}}</span>
		</a>
	</div>
	@endforeach

@endsection

@section('jss')
@parent
	<script>
		$('.alert').on('click',function(){
			console.log('printing');
		});
	</script>
@endsection