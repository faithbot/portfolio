<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Leave Feedback or Ask Questions | the Faithbot by Faith Schneider</title>
		<meta charset="utf-8">
		<meta name="Faithbot Web Design" content="Calgary front-end web development and design. The Faithbot creates beautiful, clean and mobile friendly websites using the best web practices.">
		<meta name="robots" content="index, follow">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="validate.js">

</script>
	</head>
<body class="body">

	<div id="contentwrap">

		<header class="navbox">
			<nav id="navi">
				<ul>
					<li id="toggle"><a href="#navi">Menu</a></li>
					<li id="hideMenu"><a href="#toggle">Menu</a></li>
					<li><a href="index.html">Home</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="links.html">Links</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header><!--navbox-->


		<div class="whitespace">

			<div class="left">
			</div><!--left-->

			<div class="content">
				<fieldset><legend>Contact Faith Schneider</legend>
					<form method="post" action="formreturn.php" onSubmit="MM_validateForm('name','','R','email','','RisEmail');return document.MM_returnValue">
						<input type="hidden" name="hidden" id="hidden" value="message from website">
						<br>
						<label for="name">Name<br></label><input type="text" name="name" id="name">
						<br>
						<br>
						<label for="email">Email<br></label><input type="email" name="email" id="email">
						<br>
						<br>
						<label for="message">Message</label><br>
						<textarea rows="5" cols="30" name="message" id="message"></textarea>
						<br>
						<br>
<?php
require_once('recaptchalib.php');
$publickey = "6Lczy_gSAAAAAD3NiBcCyINPJh10Vm-Jm-v3Ksp5"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>


						<div id="buttons">
							<input type="submit" name="submit" id="submit" value="Send">
							<input type="reset" name="reset" id="reset" value="Reset">
						</div>
						<br>
						<br>
					</form>
				</fieldset>
				<p>Privacy policy: Your information will not be shared.</p>
			</div><!--content-->

			<div class="right">
			</div><!--right-->

		</div><!--whitespace-->


		<div id="push">
		</div><!--push-->

	</div><!--contentwrap-->

	<footer class="mainfooter">
		<br>
		<a href="https://www.facebook.com/thefaithbot" target="_blank"><span class="icon-facebook"></span></a>
		<a href="https://plus.google.com/u/1/105314686827747040927/about" target="_blank"><span class="icon-googleplus"></span></a>
		<a href="http://faithbot.wordpress.com/" target="_blank"><span class="icon-wordpress"></span></a>
	
		<br>
		<p>&#169; 2014 Faithbot by Faith Schneider | <a href="index.html">Home</a> | <a href="portfolio.html">Portfolio</a> | <a href="links.html">Links</a> | <a href="contact.php">Contact</a></p>
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