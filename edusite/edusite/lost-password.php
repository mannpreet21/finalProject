

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
						<img src="images/46.png" align="right" alt="" class="img-responsive" />								
					<div class="col-sm-6">
					<center>
						<h1>Forgot Password</h1>					
						<h3>Reset Your Password Here</h3>					
						<form role="form" name="register-form" id="register-form" method="post">
								
							<div class="form-group" id="register-login-group">
								<label for="register-input-login">Enter email</label>
								<div class="input-group">
									<input type="text" class="form-control" id="register-input-login" name="text1">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>

								<div class="form-group" id="register-login-group">
								<label for="register-input-login">Enter New Password</label>
								<div class="input-group">
									<input type="text" class="form-control" id="register-input-login" name="text2">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
								
							<div class="form-group" id="register-email-group">
								<label for="register-input-email">Re-Enter New Password</label>
								<div class="input-group">
									<input type="text" class="form-control" id="register-input-email" name="text3">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="setp">Reset Password</button>
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

if (isset($_POST['setp']))
 {
 	
	$set1=$_POST['text1'];
	$set2=$_POST['text2'];
	$set3=$_POST['text3'];

	echo "$set1"."<br>";
	echo "$set2"."<br>";
	echo "$set3"."<br>";
// if (isset($_GET['user_id']))
// 	{
// 		$id = $_GET['user_id'];

 $update ="update user set password='$set2' where email='$set1'";
 mysqli_query($con, $update);
 }
// }

		 ?>

	</body>
</html>






<!-- <form action="" method="post">
<h2>Forgot Your Password????????????????<br></h2>
Old Password<input type="text" name="t1"><br><br>
New Password<input type="password" name="t2"><br><br>
Re-enter New Password<input type="password" name="t3"><br><br>
<input type="submit" name="s1" value="Reset Password" class="btn btn-primary btn-lg"><br><br>
</form> -->


