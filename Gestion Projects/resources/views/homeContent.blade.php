
<style> /* !!!!! media querys !!!!! A REVOIR */
.col-4 {width: 40%;}
.col-8 {width: 80%;}

@media only screen and (max-width: 1222px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
</style>
<br>
<div class="form-row ">
  <div class="form-group col-4">
  <!--display calendar -->

    @include('Calendars.mycalendar')

  </div>
	<div class="form-group col-8">
    <div class="form-group">
      <div class="col-lg-12">.</div>
      <div class="col-lg-12 h1">Bienvenu {{Auth::user()->name}} </div>
    </div>
    <br>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h4>Derniers Projects :</h4>
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
        <h4>Dernières Taches :</h4>
        @foreach($LastFewTasks as $t)
        <div class="alert alert-warning alert-dismissible fade show form-inline" role="alert">
          <div class="font-weight-bold col-lg-3">{{$t->title}}</div>
            <div class="font-weight-bold col-lg-3">
              <p class="card-text" name="state">
              {{($t->state=='IN_PROGRESS')?'En-Cours':(($t->state=='FINISHED')?'Fini':(($t->state=='VALIDATED')?'Validée':'empty'))}}
              </p>
            </div>
          <div class="col-lg-2">{{$t->updated_at}}</div>
          <a class="close" href="./Tasks/{{$t->id}}">
            <span class="badge badge-danger badge-pill" >{{$t->priority}}</span>
          </a>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>
</div>
