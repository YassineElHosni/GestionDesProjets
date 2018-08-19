<!Doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

	@include('partials._metas')
	@section('csss')<!--styles-->
		@include('partials._csss')
	@show

</head>
<body>

	@if(Auth::user())
		@include('partials._mainMenu')<!--Menu-->
	@endif

	<div class="left-side">
		<!--display calendar -->
		@include('Calendars.mycalendar')
	</div>
	<div class="right-side">
			<div class="container"><!--Content-->

				@yield('content')

			</div>
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
