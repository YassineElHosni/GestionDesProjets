<div class="form-group">
  <div class="col-lg-12">.</div>
  <div class="col-lg-12 h1">Home Page</div>
</div>
<br><br>
<hr>
<div class="row">
  <div class="col-md-6">
    <h4>Last Few UnFinished Projects:</h4>
    @foreach($LastFewProjects as $p)
      <div class="alert alert-info alert-dismissible fade show form-inline " role="alert">
        <div class="font-weight-bold col-lg-3">{{$p->title}}</div>
        <div class="font-weight-bold col-lg-3">{{($p->state)?'En-Cours':'Clos'}}</div>
        <div class="col-lg-2">{{$p->updated_at}}</div>
        {{--   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
    @endforeach
    <h4>Last Few UnFinished Tasks:</h4>
    @foreach($LastFewTasks as $t)
    <div class="alert alert-warning alert-dismissible fade show form-inline" role="alert">
      <div class="font-weight-bold col-lg-3">{{$t->title}}</div>
      <div class="font-weight-bold col-lg-3">{{$t->state}}</div>
      <div class="col-lg-2">{{$t->updated_at}}</div>
      <a class="close" href="./Tasks/{{$t->id}}">
        <span class="badge badge-danger badge-pill" >{{$t->priority}}</span>
      </a>
    </div>
    @endforeach
  </div>
  <div class="col-md-6">
    @include('mycalendar')
  </div>
</div>
</div>
