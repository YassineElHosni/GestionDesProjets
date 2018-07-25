<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="http://localhost/GestionDesProjets/Gestion%20Projects/public/css/bootstrap-4.1.2.min.css" rel="stylesheet" media="screen">

    <link href="http://localhost/GestionDesProjets/Gestion%20Projects/public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Test</legend>
    <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-append"><span class="input-group-text fa fa-times fa-lg"></span></span>
                    <span class="input-group-append"><span class="input-group-text fa fa-calendar-alt fa-lg"></span></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
            <div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-append"><span class="input-group-text fa-times fa fa-calendar-alt fa-lg"></span></span>
                    <span class="input-group-append"><span class="input-group-text fa-calendar-alt far fa-calendar fa-lg"></span></span>
                </div>
                <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <div class="form-group">
                <label for="dtp_input3" class="col-md-2 control-label">Time Picking</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-append"><span class="input-group-text fa fa-times fa-lg"></span></span>
                    <span class="input-group-append"><span class="input-group-text fa fa-clock fa-lg"></span></span>
                </div>
                <input type="hidden" id="dtp_input3" value="" /><br/>
            </div>
        </fieldset>
    </form>
</div>

<script type="text/javascript" src="http://localhost/GestionDesProjets/Gestion%20Projects/public/js/jquery-3.3.1.slim.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="http://localhost/GestionDesProjets/Gestion%20Projects/public/js/bootstrap-4.1.2.min.js"></script>
<script type="text/javascript" src="http://localhost/GestionDesProjets/Gestion%20Projects/public/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="http://localhost/GestionDesProjets/Gestion%20Projects/public/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>

</body>
</html>