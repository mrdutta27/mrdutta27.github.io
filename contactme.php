<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "suryabrata.dutta@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact Me | Suryabrata Dutta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="http://suryadutta.me">Suryabrata Dutta</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="http://suryadutta.me">Home</a></li>
							<li><a href="research.html">Research</a></li>
							<li><a href="leadership.html">Leadership</a>
								<ul>
									<li><a href="researchorganizations.html">Research Organizations</a></li>
									<li><a href="ysm.html">Yale Scientific Magazine</a></li>
									<li><a href="priorleadershiproles.html">Prior Leadership Roles</a></li>
								</ul>
							</li>
							<li><a href="design.html">Design</a>							
							</li>
							<li><a href="contactme.html">Contact Me</a></li>
							<li><a href="assets/Resume - Suryabrata Dutta.pdf" class="button special">Resume</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Contact Me</h2>
							<p>Feel free to reach out to me at any time!</p>
						</header>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section id="content">
										<h3> Thank you for your submission, <?php echo htmlspecialchars($_POST['name']); ?>.! </br>I will get back to you as soon as possible. </h3>
									</section>

							</div>
							<div class="4u$ 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h4><a href="mailto:suryabrata.dutta@yale.edu" class="icon alt fa-envelope">&nbsp;&nbsp;&bull;&nbsp;suryabrata.dutta@yale.edu</a>
											<p>&nbsp;</p>
											<span class="icon alt fa-phone"> &nbsp;&bull;&nbsp;(770)&nbsp;329-4253 </span>
											<p>&nbsp;</p>
											<a href="https://www.linkedin.com/in/suryabratadutta" class="icon alt fa-linkedin">&nbsp;&nbsp;&bull;&nbsp;LinkedIn</a></br>
											<p>&nbsp;</p>
											<a href="https://www.facebook.com/suryabrata.dutta" class="icon alt fa-facebook">&nbsp;&nbsp;&bull;&nbsp;Facebook</a></h4>
																	
										</section>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="mailto:suryabrata.dutta@yale.edu" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
						<li><a href="https://www.linkedin.com/in/suryabratadutta" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.facebook.com/suryabrata.dutta" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>			
					</ul>
					<ul class="copyright">
						<li>&copy; Suryabrata Dutta 2015</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65383421-1', 'auto');
  ga('send', 'pageview');

</script>

	</body>
</html>