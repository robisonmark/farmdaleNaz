<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<meta name="dcterms.created" content="Thu, 23 October 2014 02:33:32 GMT">
		<meta name="description" content="To make Christlike Disciples in the Nations we are Connecting with God, Each Other and our Community" />
		<meta name="keywords" content="Farmdale, Nazarene, God, Louisville, Kentucky, Jesus, Connecting" />
		<meta name="author" content="Robros">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>
			Farmdale Nazarene - Louisville, Kentucky - Connecting
		</title>
		<script src="js/angular.min.js"></script>
		<script src="https://use.fontawesome.com/72047c876c.js"></script>
		
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/style.css">
		
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		
	</head>
	<!-- END HEAD -->

	<body>
	<!-- Landing Page -->
		<script>
		window.fbAsyncInit = function() {
			FB.init({
			appId      : '300796576938021',
			xfbml      : true,
			version    : 'v2.7'
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<header id="intro">
			<div class="container">

				<nav id="nav">
				<div class="top-hat">
					<div class="con-content">
						<a href="tel: 502-969-1436">Call Us</a>
						<a href="https://goo.gl/maps/1aEiKpc9yyQ2">Directions</a>
		 <!--Begin Nav Bar -->
					<div class="navbar">
						<div class="brand">
							<a href="#welcome">
								<img id="logo" src="./images/farmdaleLogo.svg" alt="farmdale logo">
								<img class="script" src="./images/farmdaleScript.svg" alt="farmdale wordmark">
							</a>
						</div>
						<div class="button_container" id="toggle"> 
							<span class="top"></span>
							<span class="middle"></span>
							<span class="bottom"></span>
						</div>

						<div class="overlay" id="overlay">
							<div class="overlay-menu">
								<ul>
									<li><a class="nav-welcome" href="#new">New?</a></li>
									<li><a class="ministries" href="#ministries">Ministries</a></li>
									<li><a class="about" href="#about">About Us</a></li>
									<li><a class="events" href="#events">Events</a></li>
									<li><a class="staff" href="#staff">Staff</a></li> 
								</ul>
							</div>
						</div>
					</div>
				</nav> 
			</div>
		</header>
