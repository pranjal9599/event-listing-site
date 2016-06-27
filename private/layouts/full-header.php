<?php require('../private/init.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>

	<div class="hero">
		
		<nav>
			<div class="logo"><img src="img/logo.png" alt="G"></div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
				<li><a href="#">Contact Us</a></li>
				<li class="cta"><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
			</ul>
			<div class="clear"></div>
		</nav>
		
		<div class="jumbotron">
			<h1>Lets Meet Great <span class="blue">People</span></h1>
			<input type="text" placeholder="Search for great things...." class="search">
		</div>

	</div>