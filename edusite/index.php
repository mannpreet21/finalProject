<?php ob_start(); ?>
<?php include 'header.php'; ?>

		<!-- ========== BANNER START ========== -->

		<div id="slides">
			<div class="slides-container">
				<img src="images/banner1.jpg" alt="" />
				<img src="images/banner2.jpg" alt="" />
				<img src="images/banner3.jpg" alt="" />
			</div>

			<div class="tint"></div>

			<!-- SLIDER OFFERS START -->
			<div class="slider-offers text-center">
				<ul>
					<li>
						<!-- <h3>HTML Template for LMS</h3> -->
						<!-- <h4>Crafted for Learning Management System</h4> -->
						<!-- <p><a href="http://themeforest.net/user/Coffeecream" target="_blank" class="btn btn-primary">Purchase Now</a></p> -->
					</li>
					<li>
						<!-- <h3>Fully Responsive Design</h3> -->
						<!-- <h4>Looks perfect on all mobile devices</h4> -->
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

			<a class="arrow" href="#welcome">
				<i class="fa fa-arrow-down fa-2x"></i>
			</a>
		</div>

		<!-- ========== BANNER END ========== -->

		<!-- ========== WELCOME START ========== -->

		<section id="welcome">
			<div class="container">
			<?php 
					include 'config.php';
					if (isset($_SESSION['userid']))
					 {
						$selectcourse = "select * from courses limit 4";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
							{
								 $allcourse[1];
								
								 ?>
				<div class="row text-center">
					<div class="col-sm-3">
						<p><img src="<?php echo $allcourse[5]; ?>" alt="" style="width:150px; height:100px;" /></p>
						<h3><?php  echo $allcourse[1]; ?></h3>
						<p><?php  echo $allcourse[2]; ?></p>
						<p><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>">Read More</a></p>
					</div>
					<?php } }
else{?>
<style>
.col-sm-4
{
	
	border:1px solid #144d87;
	background-color: #F2EEEE;
	background-image: url(images/t6.jpg);
	font-family: cursive;
   font-size:13px; 

}
.bta
{
	
	
	
margin:20px;
	padding-bottom: 5px;
	padding-top: 5px;
	padding-right: 10px: 
	font-family: 'VT323',monospace;
	font-size: 20px;
	
	color: #144d87;
	

}
.bt1:hover
{
	background-position: 500% 100%;

   background-color: #8fd3fe;
}
.bt1:nth-child(1)
{
	filter: hue-rotate(20deg);
}
	</style>
	<div class="row text-center">
					<div class="col-sm-4">
											   <img src="images/login.png" alt="" style="width: 150px;">
						<p><img src="images/pl.jpg" alt="" style="width:200px; height:120px; padding-top: 30px;" /></p>
											<b><h3 style="color:black; font-family: cursive;"> If You Want To Check It Plz Create Account And Login ...</h3></b>
											<p><b><a href="login.php" alt="" style="display: inline-block;"><input type ="button" value="LOGIN" class="bta bt1"></button></a></b></p>
						
					
					
					</div>

					<?php

	
}					?>
					<!-- <div class="col-sm-3">
						<p><img src="images/feature2.gif" alt="" /></p>
						<h3>Geometry</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
					<div class="col-sm-3">
						<p><img src="images/feature3.gif" alt="" /></p>
						<h3>Science</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div>
					<div class="col-sm-3">
						<p><img src="images/feature4.gif" alt="" /></p>
						<h3>Geography</h3>
						<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
						<p><a href="#" target="_blank" class="btn btn-primary">Read More</a></p>
					</div> -->
				</div>
			</div>
		</section>

		<!-- ========== WELCOME END ========== -->

		<!-- ========== RECENT COURSES START ========== -->

		<section id="featured-posts" class="alt-background">
			<div class="container">
				
				<h2 class="text-center carousel-title">
					Recent Courses
					<a href="courses-list.php">View All</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel">
					
 					<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=8"> -->
						<center><img src="upload/CSS.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>
									<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
			<h3><a href="courses-details.php?courseid=8">CSS</h3></a>
						<?php 
							}
						else
						{
						 ?>
			<h3><a href="login.php?courseid=8">CSS</h3></a>
						<?php } ?>
					
						<div class="meta">						
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
			<p><a href="teachers-profile.php?teacherid=3">Baldev singh</a></p>
						<?php 
							}
						else
						{
						 ?>
		<p><a href="login.php?teacherid=3">Baldev singh</a></p>
						<?php } ?>
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=7"> -->
						<center><img src="upload/html.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>
													<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
			<h3><a href="courses-details.php?courseid=7">HTML</h3></a>
						<?php 
							}
						else
						{
						 ?>
	<h3><a href="login.php?courseid=7">HTML</h3></a>
						<?php } ?>
						
						<div class="meta">						
														<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
	<p><a href="teachers-profile.php?teacherid=3">Baldev Singh</a></p>
						<?php 
							}
						else
						{
						 ?>
		<p><a href="login.php?teacherid=3">Baldev Singh</a></p>
						<?php } ?>
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=6"> -->
					<center><img src="upload/MySql.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
			<h3><a href="courses-details.php?courseid=6">MYSQL</h3></a>
						<?php 
							}
						else
						{
						 ?>
		<h3><a href="login.php?courseid=6">MYSQL</h3></a>
						<?php } ?>
						
						<div class="meta">						
											<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
		<p><a href="teachers-profile.php?teacherid=3">Baldev Singh</a></p>
						<?php 
							}
						else
						{
						 ?>
			<p><a href="login.php?teacherid=3">Baldev Singh</a></p>
						<?php } ?>
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=5"> -->
					<center>		<img src="upload/sql.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>	<h3><a href="courses-details.php?courseid=5">SQL</h3></a>
						<?php 
							}
						else
						{
						 ?>
			<h3><a href="login.php?courseid=5">SQL</h3></a>
						<?php } ?>
					
						<div class="meta">						
											<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<p><a href="teachers-profile.php?teacherid=1">Pavneet Singh</a></p>
						<?php 
							}
						else
						{
						 ?>
			<p><a href="teachers-profile.php?teacherid=1">Pavneet Singh</a></p>
						<?php } ?>
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=4"> -->
						<center>	<img src="upload/c.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
			<h3><a href="courses-details.php?courseid=4">C++</h3></a>
						<?php 
							}
						else
						{
						 ?>
			<h3><a href="login.php?courseid=4">C++</h3></a>
						<?php } ?>
						
						
						
						<div class="meta">						
											<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<p><a href="teachers-profile.php?teacherid=1">Pavneet Singh</a></p>
						<?php 
							}
						else
						{
						 ?>
			<p><a href="login.php?teacherid=1">Pavneet Singh</a></p>
						<?php } ?>
						
						
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=3"> -->
					<center>		<img src="upload/python.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<h3><a href="courses-details.php?courseid=3">Python</h3></a>
						<?php 
							}
						else
						{
						 ?>
			<h3><a href="login.php?courseid=3">Python</h3></a>
						<?php } ?>
						
						
						<div class="meta">						
											<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<p><a href="teachers-profile.php?teacherid=2">gurmandeep singh</a></p>
						<?php 
							}
						else
						{
						 ?>
			<p><a href="teachers-profile.php?teacherid=2">gurmandeep singh</a></p>
						<?php } ?>
						
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=2"> -->
					<center>		<img src="upload/ruby_on_rails.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
									<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<h3><a href="courses-details.php?courseid=2">Ruby on rails </h3></a>
						<?php 
							}
						else
						{
						 ?>
				<h3><a href="login.php?courseid=2">Ruby on rails </h3></a>
						<?php } ?>
						
						<div class="meta">						
										<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
					<p><a href="teachers-profile.php?teacherid=4">govind</a></p>
						<?php 
							}
						else
						{
						 ?>	<p><a href="login.php?teacherid=4">govind</a></p>
						<?php } ?>
						
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
									<div class="item"> 
					<!-- 	<a href="courses-details.php?courseid=1"> -->
					<center>		<img src="upload/java.jpg" alt="" class="img-responsive" style="width:290px; height:228px;" /></a></center>	
						<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
					<h3><a href="courses-details.php?courseid=1">Javascript</h3></a>
						<?php 
							}
						else
						{
						 ?>
						<h3><a href="login.php?courseid=1">Javascript</h3></a>
								
						<?php } ?>
						
						<div class="meta">		
						<?php
							 if(isset($_SESSION['userid']))
							 {
						 ?>
				<p><a href="teachers-profile.php?teacherid=3">Baldev singh</a></p>
						<?php 
							}
						else
						{
						 ?>
				<p><a href="login.php?teacherid=3">Baldev singh</a></p>
						<?php } ?>				
							
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<!--<div class="price">$39.90</div>-->
					</div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>

		<!-- ========== RECENT COURSES END ========== -->

			<!-- ========== SEARCH START ========== -->

<section id="search">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal>

						<h2 class="carousel-title">
							Search for Courses
							<a href="courses-list.php">View All Courses</a>
						</h2>

						<form class="form-inline" role="form" method="post">
							<div class="form-group">
								<label class="sr-only" for="input-keywords">Keywords</label>
								<input type="text" name="text" class="form-control input-lg" id="input-keywords" placeholder="Keywords">
							</div>
							<button type="submit" name="s1" class="btn btn-primary btn-lg">Search</button>
						</form>
<?php 
					include 'config.php';
					global $text;
					if (isset($_POST['s1']))
					 {
					 	echo $text=$_POST['text'];
					 						
						 $selectcourse = "select * from courses where course_name='$text'";
						 $all = mysqli_query($con , $selectcourse);
						 $allcourse = mysqli_fetch_array($all);
						
						          if ($text)
						           {
						          	 echo "<center>"."<h1>"." $allcourse[1]"."</h1>"."</center>";
						          		header("location:courses-details.php?courseid=$allcourse[0]");
          									}
									else
									{
									echo "course is not avaliable !!!!!!!!";
								}
							}
						?>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== SEARCH END ========== -->

		<!-- ========== FEATURED TEACHERS START ========== -->

		<section id="featured-teachers" class="alt-background">
			<div class="container">
				
				<h2 class="carousel-title text-center">
					Featured Teachers
					<a href="teachers-list.php">Meet Our Staff</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel">
					<?php 
						include 'config.php';
						if (isset($_SESSION['userid']))
						 {
							$selectteacher = "select * from admin";
							$all = mysqli_query($con , $selectteacher);
							while($allteacher = mysqli_fetch_array($all))
								{
									
									 ?>
					<div class="item">
						<img src="<?php echo $allteacher[5]; ?>" alt="" class="img-responsive" style="width:600px; height:150px;"/>
						<div class="description">
							<h3><?php echo $allteacher[3]; ?></h3>
							<p><?php echo $allteacher[4]; ?></p>
							<a href="teachers-profile.php?teacherid=<?php echo $allteacher[0];?>">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					
<?php }} ?>

				</div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>

		


		<!-- ========== POPULAR COURSES START ========== -->

<section id="popular-courses">
			<div class="container text-center">

				<div class="row">
					<div class="col-sm-12">
						<h2 class="carousel-title">
							Popular Courses
							<a href="courses-list.php">View All Courses</a>
						</h2>					
					</div>
				</div>


				<div class="row">
				
 					<div class="col-sm-4">
 							<?php
						if(isset($_SESSION['userid']))
						{
						?>
						<center><h4><p><a href="courses-details.php?courseid=1" style="font-size:20px;"><img src="upload/java.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Javascript</a></p></h4></center>
						<?php
					}
					else
					{
						?>
						<center><h4><p><a href="login.php?courseid=1"><img src="upload/java.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Javascript</a></p></h4></center>
					<?php }?>
						
					</div>
					<!-- <div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular2.jpg" alt="" class="img-responsive" /></a></p>
					</div>
					<div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular3.jpg" alt="" class="img-responsive" /></a></p>
					  </div> -->
					  					<div class="col-sm-4">
					  							<?php
						if(isset($_SESSION['userid']))
						{
						?>
					<center><h4><p><a href="courses-details.php?courseid=2"><img src="upload/ruby_on_rails.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Ruby on rails </a></p></h4></center>

						<?php
					}
					else
					{
						?>
						<center><h4><p><a href="login.php?courseid=2"><img src="upload/ruby_on_rails.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Ruby on rails </a></p></h4></center>

					<?php }?>
											</div>
					<!-- <div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular2.jpg" alt="" class="img-responsive" /></a></p>
					</div>
					<div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular3.jpg" alt="" class="img-responsive" /></a></p>
					  </div> -->
					  					<div class="col-sm-4">
					  						  							<?php
						if(isset($_SESSION['userid']))
						{
						?>
				<center><h4><p><a href="courses-details.php?courseid=3"><img src="upload/python.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Python</a></p></h4></center>

						<?php
					}
					else
					{
						?>
						<center><h4><p><a href="login.php?courseid=3"><img src="upload/python.jpg" alt="" class="img-responsive" style="width:370px; height:170px; "/>Python</a></p></h4></center>

					<?php }?>
						
					</div>
					<!-- <div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular2.jpg" alt="" class="img-responsive" /></a></p>
					</div>
					<div class="col-sm-4">
						<p><a href="courses-details-right-sidebar.html"><img src="images/popular3.jpg" alt="" class="img-responsive" /></a></p>
					  </div> -->
					  					</div>
				</div>
		</section>


		<!-- ========== POPULAR COURSES END ========== !>

		
		<! ========== REVIEWS START ========== -->

		<section id="about-reviews">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal>

						<h2>What Our Students Say</h2>

						<!-- OWL CAROUSEL START -->
						<div class="owl-carousel">
							
							<div class="item">
								<blockquote>The course syllabus is structured in a sensible way that enables me to gradually build on my learning. The lessons are always interesting and exciting: the lecturers are so enthusiastic that the lessons seem to be over too quickly. The quality of teaching is really good.<small>Harmanpreet Gill, Student</small></blockquote>
							</div>
							
							<div class="item">
								<blockquote>A well balanced coaching programme that can be either standalone or an add-on to existing qualifications. What stood out most for me was the spontaneity and high enthusiasm of the good spread of international participants in all the face-to-face workshops, which I understand even surprised the workshop facilitator! <small> Shagun Gupta, Student</small></blockquote>
							</div>
							
							<div class="item">
								<blockquote>I can't recommend this course highly enough. It is exceptionally well structured with relevant training materials and an easy-to-negotiate website for distance learning. As a new examiner, I have found the course invaluable. The teaching is of a high quality and the feedback on assignments has been very helpful.  <small>Priya Banger, Student</small></blockquote>
							</div>
							
							<div class="item">
								<blockquote>The courses are at a very good level and their expectations are really high, which means we have to work hard for the grades but the results are truly rewarding."One of the things I've enjoyed about this course is that, as well as marketing, I study modules relating to other areas of business. This means that I've gained a good general knowledge of the industry." <small> Simran Grewal, Student</small></blockquote>
							</div>
							
						</div>
						<!-- OWL CAROUSEL END -->

					</div>
				</div>
			</div>
		</section>

		<!-- ========== REVIEWS END ========== -->
	
		

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

	</body>
</html>
<?php include'footer.php';?>