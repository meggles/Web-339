<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Boston Student Sailing Expeditions</title>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<link href="stylesheet.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>	
<div class="<?php echo($home ? "wrapper" : "interior"); ?>">  <!-- sticky footer wrapper NOTE: IF ANY DIVS HAVE A HEIGHT DECLARED THIS WON'T WORK -->
	<div id="nav">
		<nav id="nav-wrapper">    
			<div><a class="link" href="trips.php">Trips</a></div>
			<div><a class="link" href="rates-info.php">Rates &amp; Info</a></div>
			<div><a class="link" href="signup.php">Sign Up</a></div>
		</nav>
	</div>
	<div id="<?php echo($home ? "home-wrapper" : "main-wrapper"); ?>">
	<div id="<?php echo($home ? "site-header" : "header-image"); ?>">
		<header id="header">
		   <div id="logo-wrapper">
			   <h1 id='logo'><a href='index.php'>Boston<br />Student<br />Sailing</a></h1>
			   <hr class="hr">
			   <h2>Sailing expeditions for Boston-area students in the Caribbean and beyond.</h2>
		   </div>		
		<div id="content-wrapper">	
		</header>	
	</div>	
	<div id="clear"></div>
	<section class="<?php echo($home ? "home-wrapper" : "section-wrapper"); ?>">
		<div class="<?php echo($home ? "home-wrapper" : "content"); ?>">
			<div class="<?php echo($home ? "home-wrapper" : "intro-bg"); ?>">
				<article class="intro">
				