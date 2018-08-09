
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
	<a class="navbar-brand" href="{{ url('/#') }}">Projects Connect To All</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false"
	aria-label="Toggle navigation" style="">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarColor02">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				@yield('bouttons')
				 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<!-- si non authentifié -->
		</ul>
		<ul class="nav navbar-right">
		{{-- 	<li class="nav-item">
				<a class="nav-link" href="#">yassine el hosni</a>
			</li> --}}
			<li class="nav-item">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button"
					id="dropdownMenuButton" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
						yassine el hosni
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>
<br>
<br>
<br>
<br>
{{-- @if (Auth::guest())
			<li class="nav-item"> --}}
				{{-- <ul class="nav-item navbar-right"> --}}
				{{-- <a class="nav-link" href="{{ route('login') }}">Login</a> --}}

				<!-- tester si db est vide -- if()..route('register') }}">Register</a>-->
			{{-- </li> --}}
	{{-- else si  authentifié --}}
		{{-- 	<li class="nav-item">
			<php $id=Auth::user()->id ?>
			<a class="nav-link" href="#">Mon profile</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Gestion Utilisateurs</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Gestion Projets</a>
			</li>
			<li>
			<a class="nav-link" href="/Boite"><span class="badge">*</span>Notifications</a>
			</li>
		</ul>
		<ul class="nav-item navbar-right">
			<li class="nav-item">
			<a class="nav-link" href="{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			{{ Auth::user()->Nom }} <span class="caret"></span> Logout
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
			</form>
			</li>
	endif --}}

		{{-- </ul> --}}

		{{-- <form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" placeholder="Search" type="text">
		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		</form> --}}

             <li class="nav-item">
                          @if (Auth::guest())
                        <!--      <ul class="nav-item navbar-right">
                             <a class="nav-link" href="{{ route('login') }}">Login</a>
                        -->
                           <!-- tester si db est vide if()..route('register') }}">Register</a>-->
                                </li>
                              </ul>
                            @else    <!-- si  authentifié -->
                            @can('index',App\User::class)<!-- si  allowed -->
                              <li class="nav-item">
                                    <a class="nav-link" href="{{route('Users.index')}}">Gestion Utilisateurs</a>
                              </li>
                            @endcan
                              @can('index',App\Projects::class)
                                 <li class="nav-item">
                                   <a class="nav-link" href="{{route('Projects.index')}}">Gestion Projets</a>
                                 </li>
                              @endcan
                             <!-- ADMIN / GERANT -> all tasks -->
                                <li class="nav-item">
                                      <a class="nav-link" href="{{route('Tasks.index')}}">Gestion des Taches</a>
                                </li>
                             <!-- EMPLOYEE / PROJECT_MANAGER -> his tasks & his projects-->
                                 <a class="nav-link" href="/Boite"><span class="badge">*</span>Notifications</a>
                                  </li>

                                  <div class="dropdown show float-right">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     {{Auth::user()->name}}

                                    </a>

                                      <div class="dropdown-menu float-right" aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" href="{{route('User.profile',Auth::user()->id )}}"><i class="fa fa-btn fa-user mr-1"></i>Profile</a>
                                        <a class="dropdown-item" href="#" onclick="$('#logout-form').submit()"><i class="fa fa-btn fa-sign-out mr-1"></i>Logout</a>
                                      </div>
                                  </div>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                            </form>
                                        </li></ul>

                              @endif
                             </ul>

   </div>
 </nav>
 <br>
 <br>
 <br>
 <br>
