<!Doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	@section('csss')<!--styles-->
		@include('partials._csss')
	@show
</head>
<body>

	@include('partials._mainMenu')<!--Menu-->
	
	<div class="container"><!--Content-->
		@yield('content')
	</div>

	@section('jss')	<!--javaScripts-->
		@include('partials._jss')
	@show
                           <!-- tester si db est vide if()..route('register') }}">Register</a>-->
                            {{--     </li>
                              </ul>
                                 @else <!-- si  authentifié -->
                                 <li class="nav-item">
                                   <?php $id=Auth::user()->id ?>
                                   <a class="nav-link" href="#">Mon profile</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Gestion Utilisateurs</a>
                                 </li>
                                 <li class="nav-item">
                                   <a class="nav-link" href="#">Gestion Projets</a>
                                 </li> --}}

</body>
</html>

<!--recherche barr!-->
{{-- 	@if(session()->has('flash'))
	<div class="container">
		<div class="alert alert-success">{{ session('flash') }}</div>
	</div>
	@endif --}}