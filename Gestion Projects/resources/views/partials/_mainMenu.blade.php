
<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg justify-content-between" style="border:solid 1px green">
	{{--   <a class="navbar-brand mb-0 h1" href="{{ url('/#') }}"> <!-- logo / brand -->
	<img src="/#" width="30" height="30" class="d-inline-block align-top" alt="">
	Projects Connect To All
	</a> --}}




	@if (!Auth::guest()) <!-- si  authentifié -->
	
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false"
		aria-label="Toggle navigation" style="">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!--can('index',App\Task::class)   si  employee ou chef-projet -->
	<div class="collapse navbar-collapse" style=" position: relative;" media="" id="navbarColor02">
		<div class="nav navbar-nav ml-auto " style="border:solid 1px red">

			<!-- logo/brand/icon -->
			{{-- <a class="navbar-brand" href="#">
				<img src="{{url('/')}}/C2A_light.png" width="50" height="30" alt="c2a">
			</a --}}>

			<div class="btn-group col-xs-12 col-md-3" role="group">
				<!-- Rapport only Admin & Gerant & Project Manager -->
				<a class="btn btn-info" href="">Rapport</a>
				<a class="btn btn-info" href="{{route('calendar.index')}}">Calendrier des Projets</a>

				@if(Auth::user()->Auth_hasRole('PROJECT_MANAGER')||Auth::user()->Auth_hasRole('EMPLOYEE'))
					<a class="btn btn-secondary" href="{{route('Tasks.MyTasks',Auth::user()->id )}}">Mes Taches</a>
				@endif

				@if(Auth::user()->Auth_hasRole('PROJECT_MANAGER'))
					<a class="btn btn-secondary" href="{{route('Project.ManagerProjets',Auth::user()->id )}}">Mes Projets</a>
				@endif
			</div>

			<div class="btn-group col-xs-12 col-md-3" role="group">
				@can('create',App\Task::class)
					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							Gestion Taches
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item" href="{{route('Tasks.create')}}">Nouvelle Tache</a>
							<a class="dropdown-item" href="{{route('Tasks.index')}}">Liste Taches</a>
						</div>
					</div>
				@endcan

				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					@if(Auth::user()->Auth_hasRole('ADMIN')||Auth::user()->Auth_hasRole('MANAGER'))
						<div class="btn-group" role="group">
							<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Gestion Utilisateurs
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" href="{{route('Users.create')}}">Nouveau Utilisateur</a>
								<a class="dropdown-item" href="{{route('Users.index')}}">Liste Utilisateurs</a>
							</div>
						</div>
					@endif
					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"
							style="border-radius:0px;">
							Gestion Projets
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item" href="{{route('Projects.create')}}">Nouveau Projet</a>
							<a class="dropdown-item" href="{{route('Projects.index')}}">Liste des Projets</a>
						</div>
					</div>
				</div>
				@if(Auth::user()->Auth_hasRole('ADMIN'))
				<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						Gestion Clients
					</button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						<a class="dropdown-item" href="{{route('Clients.create')}}">Nouveau Client</a>
						<a class="dropdown-item" href="{{route('Clients.index')}}">Liste des Clients</a>
					</div>
				</div>
				@endif
			</div>

			<!-- notification-->
			<?php $my_notifs = Auth::user()->unreadNotifications; ?>
			<div name='notification-aria' class=" col-xs-12 col-md-3">
				<i class="btn btn-primary fa fa-bell fa-md mx-3"
					style="border-radius:70%;"
					onclick="$('#notif{{Auth::user()->id}}').click();" value="notif">
					<span class="badge badge-danger badge-pill" style="position: absolute;">{{$my_notifs->count()}}</span>
				</i>
				<div>
					{{-- <form action="{{route('user.notif.seen',$my_notifs->max('created_at'))}}" id="my_seen"></form> --}}
					@foreach ($my_notifs as $ntf)
						{{-- <button onclick="$('#my_seen').submit();">{{$ntf->data['title']}}</button> --}}
						<form action="{{route('user.notif.seen',$ntf->id)}}"></form>
					@endforeach
				</div>
			</div>

			<div class="btn-group  col-xs-12 col-md-3" role="group" aria-label="Button group with nested dropdown">
				

				<!-- current user -->
				<div class="dropdown show float-right">
					<a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{Auth::user()->name}}
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="{{route('Users.show',Auth::user()->id )}}">
							<i class="fa fa-btn fa-user mr-1"></i>Profile</a>
						<a class="dropdown-item" href="#" onclick="$('#logout-form').submit()">
							<i class="fa fa-btn fa-sign-out mr-1"></i>Logout</a>
					</div>
				</div>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>

		</div>
	</div>
	@endif
</nav>
<br>
<br>
<br>
<br>
