@extends('layouts.structure')

@section('jss')
	@parent
  <!--Callendar Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

@endsection

@section('content')
    <style>
        /* ... */
    </style>

    {!! $calendar_details->calendar() !!}
    {!! $calendar_details->script() !!}

@endsection
