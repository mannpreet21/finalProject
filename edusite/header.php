<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Smartway - HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>Smartedu</title>
		<link rel="shortcut icon" href="images/images001.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body id="homepage">

		<div id="home"></div>

		<!-- ========== HEADER START ========== -->

		<header>

			<!-- ==== TOOLS START ==== -->
			<div class="tools">
				<div class="container">
					<ul class="pull-left">
						<li><a href="tel:8427228893"><i class="fa fa-phone"></i><span>8427228893</span></a></li>
						<li><a href="mailto:abc123@gmail.com"><i class="fa fa-envelope"></i><span>abc123@gmail.com</span></a></li>
					</ul>
					<ul class="pull-right">
						<?php
						if(!isset($_SESSION['userid']))
						{
						?>
 						<li><a href="register.php"><i class="fa fa-user"></i><span>Register</span></a></li>
 						<?php
 					}
 					else
 					{
 						?>
 					<?php }?>
					    <?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
						<li><a href="logout.php"><i class="fa fa-lock"></i><span>Log out</span></a></li>
						<?php 
							}
						else
						{
						 ?>
						<li><a href="login.php"><i class="fa fa-lock"></i><span>Log in</span></a></li>
								
						<?php } ?>
					</ul>
				</div>
			</div>
			<!-- ==== TOOLS END ==== -->

			<!-- ==== NAVBAR START ==== -->
			<div class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand"><img src="images/logo3.png" alt="Smartway - HTML Template" class="img-responsive logo" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="courses-list.php">Courses</a> </li>													
							<li><a href="about.php">About</a></li>
							<li><a href="teachers-list.php" >Teachers</a></li>
							<!-- <li ><a href="#" >Blog</a> -->
								
							</li>
							
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- ==== NAVBAR END ==== -->
			

		</header>

		<!-- ========== BANNER START ========== -->

		<div id="slides">
			<div class="slides-container">
				<img src="images/banner1.jpg" alt="" />
				<img src="images/banner2.jpg" alt="" />
				<img src="images/banner3.jpg" alt="" />
			</div>

			<!- <div class="tint"></div> -->

			<!- SLIDER OFFERS START -->
			<div class="slider-offers text-center">
				<ul>
					<li>
						<!-- <h3>HTML Template for LMS</h3> -->
						<!--<h4>Crafted for Learning Management System</h4> -->
						<!-- <p><a href="http://themeforest.net/user/Coffeecream" target="_blank" class="btn btn-primary">Purchase Now</a></p> -->
					</li>
					<li>
						<!-- <h3>Fully Responsive Design</h3> -->
						<!--<h4>Looks perfect on all mobile devices</h4> -->
						<!-- <p><a href="http://themeforest.net/user/Coffeecream" target="_blank" class="btn btn-primary">Purchase Now</a></p> -->
					</li>
					<li>
						<!-- h3>Packed with options</h3>
						<h4>Check out all features</h4> -->
						<!-- <p><a href="http://themeforest.net/user/Coffeecream" target="_blank" class="btn btn-primary">Purchase Now</a></p> -->
					</li>
				</ul>
			</div>
			<!-- SLIDER OFFERS END -->                                

			<!-- <a class="arrow" href="#welcome">
				<i class="fa fa-arrow-down fa-2x"></i>
			</a> -->
		</div>

		<!-- ========== BANNER END ========== -->
		<!-- ========== HEADER END ========== -->
		</body>
	</html>