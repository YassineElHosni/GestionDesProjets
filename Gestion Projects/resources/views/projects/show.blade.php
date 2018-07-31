@extends('layouts.structure')

@section('content')
<style> h2{border-bottom:1px dashed green;
           color: green; } </style>

@include('flash::message')


    <div class="form-group align-center">
    	 <h2>{{ $project->title }} </h2>
    </div>
    <form action="{{ route('Projects.edit',$project->id) }}" method="get">
      <input type="submit" value="Modifier" class="btn btn-primary float-right">
    </form>

    <div class="col-sm">
      <div class="form-group row">
        <div class="card mr-4" style="width:30rem;">
        <div class="card-body form-inline">
          <h5 class="card-title mr-3">Client:</h5>
              <p class="card-text">{{ $client->name }}</p>
          </div>
          </div>
        </div>

      <div class="form-group">
      <div class="card mr-4" style="width: 30rem;">
      <div class="card-body form-inline">
        <h5 class="card-title mr-3">Chef Projet:</h5>
          <p class="card-text">{{ $chef->name }}</p>
        </div>
        </div>
      </div>

    <div class="form-group">
      <div class="card mr-4" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Description:</h5>
          <p class="card-text">{{ $project->description }}</p>
        </div>
        </div>
    </div>
      <div class="form-group">
        <div class="card mr-4" style="width: 30rem;">
        <div class="card-body form-inline">
          <h5 class="card-title mr-3">Deplacement:</h5>
          	<p class="card-text">{{($project->displacement)?'OUI':'NON'}}</p>
          </div>
          </div>
      </div>
 </div>

 <div class="col-sm">
        <div class="form-group row">
          <div class="card mr-4" style="width: 30rem;">
          <div class="card-body form-inline">
            <h5 class="card-title mr-3">State:</h5>
              <p class="card-text">{{($project->state)?'en_cours':'clos'}}</p>
            </div>
            </div>
          </div>

        <div class="form-group">
          <div class="card mr-4" style="width: 30rem;">
          <div class="card-body form-inline">
            <h5 class="card-title mr-3">Date Limite :</h5>
              <p class="card-text">{{date("M j Y h:m:s", strtotime($project->limitDate))}}</p>
            </div>
            </div>
          </div>

          <div class="form-group">
            <div class="card mr-4" style="width: 30rem;">
            <div class="card-body form-inline">
              <h5 class="card-title mr-3">Date Debut :</h5>
                <p class="card-text">{{date("M j Y h:m:s", strtotime($project->startDate))}}</p>
              </div>
              </div>
            </div>

            <div class="form-group">
              <div class="card mr-4" style="width: 30rem;">
              <div class="card-body form-inline">
                <h5 class="card-title mr-3">Date Fin :</h5>
                  <p class="card-text">{{date("M j Y h:m:s", strtotime($project->finishDate))}}</p>
                </div>
                </div>
              </div>

</div>

<!-- display tasks related to this project -->
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date limite</th>
       <th scope="col">State</th>
       <th scope="col">Progression (%)</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <th scope="row">{{$task->title}}</th>
      <td>{{$task->limitDate}}</td>
      <td>{{$task->state}}</td>
      <td><span class="badge badge-primary badge-pill align_center">{{$task->progress }}</span></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection