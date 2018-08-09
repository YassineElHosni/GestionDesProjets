<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
	<a class="navbar-brand" href="{{ url('/Projets') }}">Projects Connect To All</a>
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