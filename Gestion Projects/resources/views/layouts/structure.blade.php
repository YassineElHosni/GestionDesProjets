<!Doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	
	@include('partials._metas')
	@section('csss')<!--styles-->
		@include('partials._csss')
	@show

</head>
<body>

		@include('partials._mainMenu')<!--Menu-->

		<div class="container"><!--Content-->
			@yield('content')

		</div>

		@include('partials._footer')<!--footer-->

	@section('jss')	<!--javaScripts-->
		@include('partials._jss')
	@show

</body>
</html>
<!--@if(session()->has('flash'))
<div class="container">
	<div class="alert alert-success">{{ session('flash') }}</div>
</div>
@endif-->
