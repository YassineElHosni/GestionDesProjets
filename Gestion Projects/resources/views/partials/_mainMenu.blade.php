
<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg justify-content-between">
	<a class="navbar-brand mb-0 h1" href="{{ url('/#') }}"> <!-- logo / brand -->
		<img src="/#" width="30" height="30" class="d-inline-block align-top" alt="">
		Projects Connect To All
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false"
	aria-label="Toggle navigation" style="">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" style=" position: relative;" media="" id="navbarColor02">

		<ul class="nav navbar-nav ml-auto ">


          @if (!Auth::guest()) <!-- si  authentifié -->
                <!--can('index',App\Task::class)   si  employee ou chef-projet -->

             <div class="btn-group" role="group">
							<!-- Rapport only Admin & Gerant & Project Manager -->
							@if(!Auth::user()->Auth_hasRole('EMPLOYEE'))
							 <a class="btn btn-info" href="">Rapport</a>
               <a class="btn btn-info" href="{{route('calendar.index')}}">Agenda de Projets</a>
              @endif
							
							 @if(Auth::user()->Auth_hasRole('PROJECT_MANAGER')||Auth::user()->Auth_hasRole('EMPLOYEE'))
							 <a class="btn btn-secondary" href="{{route('Tasks.MyTasks',Auth::user()->id )}}">Mes Taches</a>
               @endif

							 @if(Auth::user()->Auth_hasRole('PROJECT_MANAGER'))
							 <a class="btn btn-secondary" href="{{route('Project.ManagerProjets',Auth::user()->id )}}">Mes Projets</a>
               @endif
						 </div>
						 @if(!Auth::user()->Auth_hasRole('EMPLOYEE'))
						 <div class="btn-group" role="group">
							 <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 Gestion Taches
							 </button>
							 <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                 <a class="dropdown-item" href="{{route('Tasks.create')}}">Nouvelle Tache</a>
								 <a class="dropdown-item" href="{{route('Tasks.index')}}">Liste Taches</a>
							 </div>
						 </div>
						 @endif
						 <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

								@if(Auth::user()->Auth_hasRole('ADMIN')||Auth::user()->Auth_hasRole('MANAGER'))
								  <div class="btn-group" role="group">

								    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								      Gestion Utilisateurs
								    </button>
								    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											<a class="dropdown-item" href="{{route('Users.create')}}">Nouveau Utilisateur</a>
								      <a class="dropdown-item" href="{{route('Users.index')}}">Liste Utilisateurs</a>
								    </div>
								  </div>
                @endif
								@if(!Auth::user()->Auth_hasRole('EMPLOYEE'))
									<div class="btn-group" role="group">
									 <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										 Gestion Projets
									 </button>
									 <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										 <a class="dropdown-item" href="{{route('Projects.create')}}">Nouveau Projet</a>
										 <a class="dropdown-item" href="{{route('Projects.index')}}">Liste des Projets</a>
									 </div>
								 </div>
							</div>
							@endif
						  @if(Auth::user()->Auth_hasRole('ADMIN'))
								 <div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Gestion Clients
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="{{route('Clients.create')}}">Nouveau Client</a>
										<a class="dropdown-item" href="{{route('Clients.index')}}">Liste des Clients</a>
									</div>
								</div>
             @endif

                        <!-- can('index',App\User::class)  si  allowed
                              <li class="nav-item">
                                    <a class="nav-link" href="{{route('Users.index')}}">Gestion Utilisateurs</a>
                              </li>
                            endcan
                              can('index',App\Projects::class)
                                 <li class="nav-item">
                                   <a class="nav-link" href="{{route('Projects.index')}}">Gestion Projets</a>
                                 </li>
                              endcan
                              ADMIN / GERANT -> all tasks
                                <li class="nav-item">
                                      <a class="nav-link" href="{{route('Tasks.index')}}">Gestion des Taches</a>
                                </li>
                              EMPLOYEE / PROJECT_MANAGER -> his tasks & his projects
                                 <a class="nav-link" href="/Boite"><span class="badge">*</span>Notifications</a>
															 </li>  -->
													 <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															 <a hidden href="{{route('Project.ManagerProjets',Auth::user()->id )}}" id="#notif{{Auth::user()->id}}"></a> <!-- notification-->
															 <i class="btn btn-primary fa fa-bell-o mx-2" style="border-radius: 70%;font-size:18px;color:#ffffff;" onclick="$('#notif{{Auth::user()->id}}').click();" value="notif"></i>

                                  <div class="dropdown show float-right">
                                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     {{Auth::user()->name}}

                                    </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" href="{{route('Users.show',Auth::user()->id )}}"><i class="fa fa-btn fa-user mr-1"></i>Profile</a>
                                        <a class="dropdown-item" href="#" onclick="$('#logout-form').submit()"><i class="fa fa-btn fa-sign-out mr-1"></i>Logout</a>
                                      </div>
                                  </div>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
										       </div>
							</ul>
					</div>
    @endif
 </nav>
 <br>
 <br>
 <br>
 <br>
