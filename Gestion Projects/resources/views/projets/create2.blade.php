@extends('layouts.structure')

@section('csss')
@parent
<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<style>

</style>
@endsection

@section('content')
<br>
<br>
<br>
<div class="container">
<div class="form-group">
<label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
<div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
<input class="form-control" size="16" type="text" value="" readonly>
<span class="input-group-append"><span class="input-group-text fa fa-times fa-lg"></span></span>
<span class="input-group-append"><span class="input-group-text fa fa-calendar-alt fa-lg"></span></span>
</div>
<input type="hidden" id="dtp_input1" value="" /><br/>
</div>
</div>
@endsection

@section('jss')
@parent
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker-setup.js') }}"  type="text/javascript"></script>
@endsection
