@extends('layouts.structure')

@section('content')
<style> h2{border-bottom:1px dashed green;
           color: green; } </style>

  <div class='container'>
@include('flash::message')


    <div class="form-group align-center">
    	 <h2>{{ $projet->intitulee }} </h2>
    </div>
    <form action="{{ route('Projets.edit',$projet->id) }}" method="get">
      <input type="submit" value="Modifier" class="btn btn-primary float-right">
    </form>

    <div class="col-sm">
      <div class="form-group row">
        <div class="card mr-4" style="width:30rem;">
        <div class="card-body form-inline">
          <h5 class="card-title mr-3">Client:</h5>
              <p class="card-text">{{ $client->Nom }}</p>
          </div>
          </div>
        </div>

      <div class="form-group">
      <div class="card mr-4" style="width: 30rem;">
      <div class="card-body form-inline">
        <h5 class="card-title mr-3">Chef Projet:</h5>
          <p class="card-text">{{ $chef->Nom }}</p>
        </div>
        </div>
      </div>

    <div class="form-group">
      <div class="card mr-4" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Description:</h5>
          <p class="card-text">{{ $projet->description }}</p>
        </div>
        </div>
    </div>

      <div class="form-group">
        <div class="card mr-4" style="width: 30rem;">
        <div class="card-body form-inline">
          <h5 class="card-title mr-3">Deplacement:</h5>
          	<p class="card-text">{{($projet->deplacement=='O')?'OUI':'NON'}}</p>
          </div>
          </div>
      </div>
 </div>

 <div class="col-sm">
        <div class="form-group row">
          <div class="card mr-4" style="width: 30rem;">
          <div class="card-body form-inline">
            <h5 class="card-title mr-3">State:</h5>
              <p class="card-text">{{($projet->Etat=='en_cours')?'en_cours':'clos'}}</p>
            </div>
            </div>
          </div>

        <div class="form-group">
          <div class="card mr-4" style="width: 30rem;">
          <div class="card-body form-inline">
            <h5 class="card-title mr-3">Date Limite :</h5>
              <p class="card-text">{{date("M j Y h:m:s", strtotime($projet->date_limite))}}</p>
            </div>
            </div>
          </div>

          <div class="form-group">
            <div class="card mr-4" style="width: 30rem;">
            <div class="card-body form-inline">
              <h5 class="card-title mr-3">Date Debut :</h5>
                <p class="card-text">{{date("M j Y h:m:s", strtotime($projet->date_debut))}}</p>
              </div>
              </div>
            </div>

            <div class="form-group">
              <div class="card mr-4" style="width: 30rem;">
              <div class="card-body form-inline">
                <h5 class="card-title mr-3">Date Fin :</h5>
                  <p class="card-text">{{date("M j Y h:m:s", strtotime($projet->date_fin))}}</p>
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
    @foreach($taches as $tache)
    <tr>
      <th scope="row">..titre.. </th>
      <td>{{$tache->date_limite}}</td>
      <td>{{$tache->état}}</td>
      <td><span class="badge badge-primary badge-pill align_center">{{$tache->déroulement }}</span></td>
    </tr>
    @endforeach
  </tbody>
</table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
