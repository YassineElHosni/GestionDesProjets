@extends('layouts.structure')

@section('csss')
	@parent
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- fa emoticones-->

@endsection


@section('content')
    <style>
        /* ... */
    </style>

    {!! $calendar_details->calendar() !!}

@endsection

@section('jss')
    @parent
  <!--Callendar Scripts -->
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        
    {!! $calendar_details->script() !!}
@endsection
