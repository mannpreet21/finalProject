<!-- ========== LINKS START ========== -->

		<div id="links" style="padding:70px;">
			<div class="container">
				<div class="row">

					<!-- ==== QUICK LINKS START == -->
					<div class="col-sm-4">
						<h3>Quick Links</h3>
						<ul>
							<li><a href="Index.php"><i class="fa fa-angle-right"></i>Home</a></li>
							<li><a href="courses-list.php"><i class="fa fa-angle-right"></i>All Courses</a></li>							
							<li><a href="about.php"><i class="fa fa-angle-right"></i>About Us</a></li>
							<li><a href="teachers-list.php"><i class="fa fa-angle-right"></i>Our Teachers</a></li>
							<li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact Us</a></li>
							
						</ul>
					</div>
					<!-- ==== QUICK LINKS END == -->








	<!-- ==== LATEST COURSES START == -->
					
						<div class="col-sm-4">
						<h3>Latest Courses</h3>	
						<?php 
					include 'config.php';
					
					if ($_SESSION['userid'])
					 {
						$selectcourse = "select * from courses order by course_id desc limit 3";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
							{
								 ?>
										
						<ul>
							<li>
								<img src="<?php echo $allcourse[5]; ?>" alt="" class="pull-left" height="40" width="40"/>
								<h5><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><?php echo $allcourse[1]; ?></a></h5>
								<p class="author"><a href="teachers-profile.php?teacherid=<?php echo $allcourse[7];?>">by <?php echo $allcourse[6]; ?> </a></p>
							</li>
							<!-- <li>
								<img src="images/thumb-course2.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.php">Web Development Basics</a></h5>
								<p class="author"><a href="teachers-profile.php">by John Doe</a></p>
							</li>
							<li>
								<img src="images/thumb-course3.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.php">Photography Advanced Technics</a></h5>
								<p class="author"><a href="teachers-profile.php">by John Doe</a></p>
							</li> -->
						</ul>
						<?php }} ?>
					</div>
					<!-- ==== LATEST COURSES END == -->







					<!-- ==== POPULAR COURSES START == -->
					
						<div class="col-sm-4">
						<h3>Popular Courses</h3>	
						<?php 
					include 'config.php';
					
					if ($_SESSION['userid'])
					 {
						$selectcourse = "select * from courses limit 3";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
							{
								 $allcourse[1];
								
								 ?>
										
						<ul>
							<li>
								<img src="<?php echo $allcourse[5]; ?>" alt="" class="pull-left" height="40" width="40" />
								<h5><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><?php echo $allcourse[1]; ?></a></h5>
								<p class="author"><a href="teachers-profile.php?teacherid=<?php echo $allcourse[7];?>">by <?php echo $allcourse[6]; ?> </a></p>
							</li>
							<!-- <li>
								<img src="images/thumb-course2.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.php">Web Development Basics</a></h5>
								<p class="author"><a href="teachers-profile.php">by John Doe</a></p>
							</li>
							<li>
								<img src="images/thumb-course3.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.php">Photography Advanced Technics</a></h5>
								<p class="author"><a href="teachers-profile.php">by John Doe</a></p>
							</li> -->
						</ul>
						<?php }} ?>
					</div>
					<!-- ==== POPULAR COURSES END == -->

					

					<!-- ==== LATEST COMMENTS START == -->
					<!-- <div class="col-sm-3">
						<h3>Latest Comments</h3>
						<ul>
							<li>
								<p><a href="blog-article-right-sidebar.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut rutrum eros, a rutrum urna.</a></p>
								<p class="author"><a href="blog-article-right-sidebar.php">by John Doe</a></p>
							</li>
							<li>
								<p><a href="blog-article-right-sidebar.php">Donec lorem mi, eleifend sit amet varius vitae, ullamcorper et urna. Aliquam tincidunt tempus purus vitae laoreet.</a></p>
								<p class="author"><a href="blog-article-right-sidebar.php">by John Doe</a></p>
							</li>
						</ul>
					</div> -->
					<!-- ==== LATEST COMMENTS END == -->

				</div>
			</div>
		</div>

		<!-- ========== LINKS END ========== -->

		<!-- ========== PREFOOTER START ========== -->

		<div id="prefooter">
			<div class="container">
				<div class="row">

					<!-- ==== ABOUT START == -->
					<div class="col-sm-6">
						<a href="about.php"><h3>About Us</h3></a>
						<div class="row">
							<div class="col-sm-5">
								<p><img src="images/prefooter-about.jpg" alt="" class="img-responsive" /></p>
							</div>
							<div class="col-sm-7">
								<p>Our Learning center provides teaching, advice and other resources for students to develop the academic skills they need for coursework and research at university. our learning center works with both students and faculty staff.<br>
								<a href="about.php">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div>
					<!-- ==== ABOUT END == -->






					<!-- ==== APPLY FOR TEACHER START == -->
		
<div class="col-sm-3">
						<h3>Apply for a Teacher</h3>
						<form action="" method="post">
							<div class="form-group" id="teacher-name-group">
								<div class="input-group">
									<input type="text" name="name" class="form-control" id="teacher-input-name" placeholder="Name">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>


							<div class="form-group" id="teacher-email-group">
								<div class="input-group">
									<input type="email" name="email" class="form-control" id="teacher-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>


							<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="text" name="pass" class="form-control" id="teacher-input-phone" placeholder="Password">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>
							</div>


							<div>
							<input type="submit" name="submit" class="btn btn-lg btn-primary" value="Submit"></div>		
								
</form>
					</div>

<?php
 include'config.php';
	 
	if(isset($_POST['submit']))
	{	
		echo $name=$_POST['name'];
		echo $email=$_POST['email'];
		echo $fon=$_POST['pass'];
	
	$insert = "insert into admin values('','$email','$fon','$name','')";	
	mysqli_query($con, $insert) or die(mysqli_error($con));	
		// echo "values inserted";
		
 				}

?>

          					<!-- ==== APPLY FOR TEACHER END == -->






					<!-- ==== CONTACT START == -->
					<div class="col-sm-3">
						<h3>Contact</h3>
						        Pixel Drop INC<br>
								Guru Nanak Tower<br>
								Near, patiala
						

						<p>Phone: <a href="tel:1800123456">8591996914</a><br>
						Fax: <a href="tel:1800123456">1800-123-456</a><br>
						Email: <a href="mailto:info@smartway.com">jeet.karam2@gmail.com</a></p>

						<p><a href="contact.php">Get Directions <i class="fa fa-angle-right"></i></a></p>
					</div>
					<!-- ==== CONTACT END == -->

				</div>
			</div>
		</div>

		<!-- ========== PREFOOTER END ========== -->



		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">

					<!-- ==== CREDITS START == -->
					<div class="col-sm-8">
						&copy; 2015 Smartway Theme by Pixel Drop INC
					</div>
					<!-- ==== CREDITS END == -->

					<!-- ==== SOCIAL ICONS START == -->
					<div class="col-sm-4 text-right">
						<a href="https://www.facebook.com/smartwaylearningcenter"><i class="fa fa-facebook fa-lg"></i></a>
						<a href="http://www.twitter.com"><i class="fa fa-twitter fa-lg"></i></a>
						<a href="http://www.linkedin.com"><i class="fa fa-linkedin fa-lg"></i></a>
						<a href="http://www.youtube.com"><i class="fa fa-youtube fa-lg"></i></a>
					</div>
					<!-- ==== SOCIAL ICONS END == -->

				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->


</body>
</html>