{{-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('partials._csss')
<style>
	body, html {
		height: 100%;
		margin: 0;
		background-color:silver;
		font-family: Arial, Helvetica, sans-serif;
	}
	/*

	https://hosterbyte.com/wp-content/uploads/2015/10/baie1.jpg

	*/
	.hero-image {
		background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://wallpaper-house.com/data/out/10/wallpaper2you_374251.jpg");
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		margin-top:3%;
		margin-bottom:10%;
	}

	.hero-text {
		 font-family:Papyrus, fantasy;
		text-align: left;
		position: absolute;
		top: 15%;
		left: 15%;
		transform: translate(-50%, -50%);
		color: white;
	}
/*
	.hero-text button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 10px 25px;
		color: black;
		background-color: #ddd;
		text-align: center;
		cursor: pointer;
	}

	.hero-text button:hover {
		background-color: #555;
		color: white;
	}*/
</style>
</head>
<body>

<div class="hero-image">
	<div class="hero-text">
		<h1 style="font-size:50px;"><b>Sir, First Admin</b></h1>
		<p><i>Welcome To the Root Form</i></p>
		
	</div>
</div>
</body>
</html>

 --}}

 <html lang="en" class="full-height">
 <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" href="{{ asset('fonts/fontawesome-5.1.1/css/all.css') }}"><!-- fa emoticones-->
{{-- <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" crossorigin="anonymous"> --}}
 	<style>
 		.intro-2 {
    background: url("https://mdbootstrap.com/img/Photos/Others/images/91.jpg")no-repeat center center;
    background-size: cover;
}
/*.top-nav-collapse {
    background-color: #3f51b5 !important;
}
.navbar:not(.top-nav-collapse) {
    background: transparent !important;
}
@media (max-width: 768px) {
    .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
    }
}*/
.hm-gradient .full-bg-img {
/*    background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
    background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
}
.rgba-gradient {*/
    background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
    background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
  }
.card {
    background-color: rgba(229, 228, 255, 0.2);
}

 .md-form .prefix {
    font-size: 1.5rem;
    margin-top: 1rem;
}
.md-form label {
    color: #ffffff;
}
h6 {
    line-height: 1.7;
}
@media (max-width: 740px) {
    .full-height,
    .full-height body,
    .full-height header,
    .full-height header .view {
        height: 1040px;
    }
}
.btn_learnMore{
	position: relative;
	border: 2px solid #fff!important;
	padding: .84rem 2.14rem;
	/*background-color:rgba(255,255,255,0.2);*/
}
.btn_learnMore:action{
	color:red;
	background-color:rgba(255,255,255,0.2);
}.animated {
    /* -webkit-animation-duration: 1s; */
    /* animation-duration: 1s; */
    -webkit-animation-fill-mode: both;
    /* animation-fill-mode: both; */
}
 	</style>
 </head>
    <body>

        <!--Main Navigation-->
    <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Welcome !</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form mt-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div> --}}
        </div>
    </nav>

	<!--Intro Section-->
	<section class="view intro-2 hm-gradient">
	    <div class="full-bg-img">
	        <div class="container flex-center">
	            <div class="d-flex align-items-center content-height">
	                <div class="row flex-center pt-5 mt-3">
	                    <div class="col-md-6 text-center text-md-left mb-5">
	                        <div class="text-light">
	                            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now! </h1>
	                            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
	                            <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Sir First Admin, welcome to the root page. made to insure an admin registration before any management or data creation, in fact before anything else, you can not enter to the other pages until you create at least one Admin Account.</h6>
	                            <br>
	                            <a class="btn btn-outline-white wow fadeInLeft animated btn_learnMore" data-wow-delay="0.3s" style="">LEARN MORE<b></b></a>
	                        </div>

							@if ($errors->any())
							<hr>
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif

	                    </div>

	                    <div class="col-md-6 col-xl-5 offset-xl-1">
		                    <form class="form-horizontal" method="POST" action="{{ route('admin.register.save') }}">
		                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                        <div class="card {{-- wow fadeInRight --}}" {{-- data-wow-delay="0.3s" --}} style="margin-bottom:10px;">
		                            <div class="card-body">
		                                <!--Header-->
		                                {{-- <div class="text-center">
		                                    <h3 class="text-light"><i class="fa fa-user text-light"></i> Register:</h3>
		                                    <hr class="hr-light">
		                                </div> --}}

		                                <!--Body-->
		                                <div class="md-form">
		                                    <i class="fas fa-user-tie prefix text-light active"></i>
		                                    <label for="name" class="active">Your name</label>
		                                    <input type="text" id="name" name="name" class="form-control" required>
		                                </div>
		                                <div class="md-form">
		                                    <i class="fa fa-envelope prefix text-light active"></i>
		                                    <label for="email" class="active">Your email</label>
		                                    <input type="email" id="email" name="email" class="form-control required" required>
		                                </div>

		                                <div class="md-form">
		                                    <i class="fa fa-lock prefix text-light active"></i>
		                                    <label for="password" class="active">Your password</label>
		                                    <input type="password" id="password" name="password" class="form-control required" required>
		                                </div>

		                                <div class="md-form">
		                                    <i class="fa fa-lock prefix text-light active"></i>
		                                    <label for="password_confirmation" class="active">Confirm Your password</label>
		                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control required" required>
		                                </div>

		                                <div class="md-form">
		                                    {{-- <input type="textar" id="form6" class="form-control"> --}}
		                                    <label for="comment" class="active">Your comment</label>
		                                	<textarea id="comment" name="comment" class="form-control active required" required cols="30" rows="3"></textarea>
		                                </div>
		                                <div class="text-center">
		                                    <button class="btn btn-primary" type="submit" onclick="return checkForm();" style="margin-top:10px;">Sign up</button>
		                                    <hr class="hr-light mb-3 mt-4">

		                                        <div class="inline-ul text-center d-flex justify-content-center">
		                                            <a class="m-2 p-2"><i class="fab fa-twitter text-light"></i></a>
		                                            <a class="m-2 p-2"><i class="fab fa-linkedin-in text-light"> </i></a>
		                                            <a class="m-2 p-2"><i class="fab fa-instagram text-light"> </i></a>
		                                        </div>
		                                </div>

		                            </div>
		                        </div>
							</form>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

    </header>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 text-center">

                <p>This web site is for Projects Management, meaning the management of all project related date. currently on beta version, but still has alot to offer in the subject. the develpement of this web site is still in developement, please <a href="#">Contact Us</a> if you find problems or feedbacks,<br><br><b>Regards,<br><br>Dev yh</b></p>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	{{-- <script src="{{ asset('js/mdb.min.js') }}" crossorigin="anonymous"></script> --}}
	<script>
		function checkForm(){
			if($('form #password').val() != $('form #password_confirmation').val()) {
		        alert("Error: the password and password confirmation must match!");
		        // form.password.focus();
		        $('form #password').val('');
		        $('form #password_confirmation').val('');
		        return false;
	    	}
		    return true;
		}
		// Animations init
	// new WOW().init();
	</script>
    </body>
</html>