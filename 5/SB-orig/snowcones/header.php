<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<TITLE>Class PHP Exercise</TITLE>

<style>
	nav a { color:black; }
	nav a.selected, nav a:hover { color:magenta; }
</style>

</HEAD>

<body>

	<header id="site-header">
		<h1>Frosty's Snowcones</h1>
	</header>

	<nav id="main-nav">
		<ul>
			<li>
				<a <?php if($page=='home') { echo "class='selected'"; } ?> href="index.php">Home</a>
				
			</li>

			<li>
				<a <?php if($page=='about') { echo "class='selected'"; } ?> href="about.php">About</a>
			</li>
			
			<li>
				<a <?php if($page=='contact') { echo "class='selected'"; } ?> href="contact.php">Contact</a>
			</li>
		</ul>		
	</nav>
	
	<section id="content">