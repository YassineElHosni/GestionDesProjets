<!DOCTYPE html>
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

