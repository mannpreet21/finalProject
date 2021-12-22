<?php ob_start();
 ?>
		<?php include'header.php'; ?>
		<!-- ========== HEADER END ========== -->

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Log In
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== CONTENT START ========== -->
		<center>
		<section id="content">
			<div class="container">									
						<img src="images/123.jpg" align="right" alt="" class="img-responsive" />								
					<div class="col-sm-6">
					<center>							
						<h1>Log In</h1>
						<h3>Already a Member? Log in here.</h3>
						<form role="form" name="login-form" id="login-form" method="post">
							<div class="form-group" id="login-login-group">
								<label for="login-input-login">Login</label>
								<div class="input-group">
									<input type="text" class="form-control" id="login-input-login" name="t1" placeholder="Username or email">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>
							<div class="form-group" id="login-password-group">
								<label for="login-input-password">Password</label>
								<div class="input-group">
									<input type="password" class="form-control" id="login-input-password" name="p1" placeholder="&#149;&#149;&#149;&#149;&#149;&#149;&#149;&#149;">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="login">Log In</button>
							<a href="lost-password.php" class="pull-right">Lost your password?</a>
						</form>
					<!-- </div> -->
						
					<!-- <div class="col-sm-6">
						<h1>Register</h1>					
						<h3>Do not have an account? Register here.</h3>
						<form role="form" name="register-form" id="register-form" method="post">
							<div class="form-group" id="register-login-group">
								<label for="register-input-login">Choose Your Login</label>
								<div class="input-group">
									<input type="text" class="form-control" id="register-input-login" name="text1" placeholder="Username">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>
							<div class="form-group" id="register-email-group">
								<label for="register-input-email">Email</label>
								<div class="input-group">
									<input type="text" class="form-control" id="register-input-email" name="text2" placeholder="john.doe@gmail.com">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="register">Register</button>
							</form> -->
						
					</div>
				</div>
			</div>
		</section>
</center>
		<!-- ========== CONTENT END ========== -->

		

		<!-- ========== FOOTER START ========== -->
		<?php include'footer.php'; ?>


		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.1.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.animate-enhanced.min.js"></script>
		<script src="js/jquery.superslides.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- Parallax ImageScroll Plugin -->
		<script src="js/jquery.parallax-1.1.3.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/jquery.fancybox.js"></script>

		<!-- ImagesLoaded Plugin -->
		<script src="js/imagesloaded.pkgd.min.js"></script>

		<!-- Masonry Plugin -->
		<script src="js/masonry.pkgd.min.js"></script>

		<!-- Progressbar Plugin -->
		<script src="js/bootstrap-progressbar.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/scrollReveal.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>
<!-- PHP CODING -->

	<?php 

include'config.php';

if (isset($_POST['login']))
 {
	$log1=$_POST['t1'];
	$log2=$_POST['p1'];
	$select="select * from user where email='$log1' and password='$log2'";
 $r=mysqli_query($con, $select);
 $data1 = mysqli_fetch_array($r); 
 
  		$data1[2];
  		$data1[3];
  		
	if($data1[1]==$log1 && $data1[2]==$log2)
	{
		!$_SESSION['userid'] = $data1[0];
		// echo $_SESSION['userid'];
		header("location:index.php");
	 	}

	else
	 {
		echo "check values again"."<br>";
	      } 				
 }


		 ?>

	</body>
</html>