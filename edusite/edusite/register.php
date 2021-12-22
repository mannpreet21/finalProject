
<?php include'header.php'; ?>
		<!-- ========== HEADER END ========== -->

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Register
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== CONTENT START ========== -->
		<center>
		<section id="content">
			<div class="container">									
						<img src="images/45.jpg" align="left" alt="" class="img-responsive" />								
					<div class="col-sm-6">
					<center>
						<h1>Register</h1>					
						<h3>Do not have an account? Register here.</h3>					
						<form role="form" name="register-form" id="register-form" method="post">
								
							<div class="form-group" id="register-login-group">
								<label for="register-input-login">Choose Your Login</label>
								<div class="input-group">
									<input type="email" class="form-control" id="register-input-login" name="text1" placeholder="Username">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
								
							<div class="form-group" id="register-email-group">
								<label for="register-input-email">Password</label>
								<div class="input-group">
									<input type="password" class="form-control" id="register-input-email" name="text2" placeholder="Password">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="register">Register</button>
							</form>
							</center>								
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

// REGISTER////////////

if (isset($_POST['register']))
 {
	$reg1=$_POST['text1'];
	$reg2=$_POST['text2'];
	$sql="select * from user where email='$reg1';";
	$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
			echo"<script>alert('Username already exist')</script>";
		}
		else
		{
			$insert="insert into user values('','$reg1','$reg2')";
				mysqli_query($con, $insert);
				echo "<script>alert('Register Successfull')</script>";
		}

	
 }


		 ?>

	</body>
</html>