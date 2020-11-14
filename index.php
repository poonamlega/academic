<?php
session_start();
?>

<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Academic Warehouse</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<?php
                        if(!isset($_SESSION['s']))
                        {
                        echo "<li><a href='login/index.php' class='button special'>Login</a></li>";
						}
						else
						{
							echo "<li><a href='login/index.php' class='button special'>Login</a></li>";
						}
					    ?>
						
					</ul>
				</nav>
			</header>


		<!-- Banner -->
			<section id="banner">
				<h2>ACADEMIC WAREHOUSE</h2>
				<h3>A University Management System</h3>
				<p>Making The University Completely Paperless.</p>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Welcome to Academic Warehouse </h2>
						<p>Our "never-ending" goal is to make the studies to work easier, safer and faster.</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>24/7 Service</h3>
								<p>Can access resources from any time and from any where.</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>100+ Moduules</h3>
								<p>A place where absent students won’t fall behind. Can access the resources from anywhere anytime.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Feedback</h3>
								<p>Removes the distance between the faculties and the students by instance feedback.</p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>News Updates</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p> -->
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>To be uploades</h4>
								<p>Under Processr</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>To be uploades</h4>
								<p>Under Process</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>To be uploades</h4>
								<p>Under Process</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>To be uploades</h4>
								<p>Under Process</p>
							</section>
						</div>
					</section>
					<footer>
						<p>Every year hundreds of students from different stream, undergraduate, postgraduate pass out from DIT University and we groom them to be ready for the corporate life they would be stepping into. With multiple companies visiting every year for campus recruitment. The students at DIT University gets ample opportunity for the amount of talent the posses. </p>
						<ul class="actions">
							<li>
								<a href="#" class="button big">Dit University</a>
							</li>
						</ul>
					</footer>
				</div>
			</section>

		

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; Acaddemic Warehouse.</li>
								<li>Designed with ♥️ Team XYZ</li>
								<!-- <li></li> -->
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>