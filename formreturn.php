<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clean, Modern Web Design | Faithbot</title>
	<meta charset="utf-8">
	<meta name="description" content="Modern web design, web development, SEO and online marketing by Faith Schneider. Creator of websites optimized for searching, mobility, and beauty.">
	<meta name="robots" content="index, follow">
	
	<!-- facebook og tags -->
	<meta property="og:title" content="Modern Web Design and SEO by Faith Schneider">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.faithbot.com/">
	<meta property="og:image" content="http://www.faithbot.com/webicon.png">
	<meta property="og:site_name" content="Faithbot">
	<!-- <meta property="og:description" content=""> -->

	<!--Google verification for home page-->
	<meta name="google-site-verification" content="ZwILe06qMRpNlTTfJr9czdPgQ1xEaEZqfp1wxMBeJ6o">

	<link rel="shortcut icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="_js/validate.js"></script>

	<link rel="stylesheet" href="_css/normalize.css" type="text/css">
	<link rel="stylesheet" href="_css/style.css" type="text/css">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">

	<div id="contentwrap">
		<header class="navbox" role="banner">
			<nav id="navi">
				<ul>
					<li id="toggle"><a href="#navi">Menu</a></li>
					<li id="hideMenu"><a href="#toggle">Menu</a></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php#about">About</a></li>
					<li><a href="index.php#portfolio">Portfolio</a></li>
					<li><a href="index.php#contact.php">Contact</a></li>
				</ul>
			</nav><!--navi-->
			<div class="fadeIn fadeIn-1s fadeIn-Delay-1s">
				<img src="_img/wingspan.png" class="fadeIn fadeIn-1s fadeIn-Delay-1s" alt=" ">
				<h1>
					<strong>Web Design</strong> by<br>Faith Schneider
				</h1>
			</div>
		</header><!--navbox-->

		
		<main>
			<div class="whitespace">


<?php

$hidden = $_POST['hidden']; 
$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
$date = gmdate("M d Y"); 
print "<h1>Thank you for your message!</h1>"; 
$to = "niahcx@yahoo.com"; 
$subject = "Message from website"; 
$body = " Date: $date \n Form request: $hidden \n Name: $name \n E-mail address: $email \n Message: $message \n\n"; 
mail($to,$subject,$body); 



  }
  ?>
<a href="index.html">Return home</a>

			</div><!--whitespace-->
		</main>

		<div id="push">
		</div><!--push-->
	</div><!--contentwrap-->

	<footer class="mainfooter">
		<br>
		<a href="http://ca.linkedin.com/in/faithbot" title="View my LinkedIn profile" target="_blank">
			<span class="icon-linkedin"></span>
		</a>

		&nbsp;

		<a href="https://github.com/faithbot" title="View my GitHub repositories" target="_blank">
			<span class="icon-github"></span>
		</a>

		&nbsp;

		<a href="https://plus.google.com/u/3/105314686827747040927/about" 
		title="View my Google &plus; profile" target="_blank">
			<span class="icon-google-plus2"></span>
		</a>
	
		<br><br>
		<p>&#169; 2015 Faith Schneider</p>
		<br>
	</footer>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-51835027-1', 'faithbot.com');
		ga('send', 'pageview');
	</script>

</body>
</html>