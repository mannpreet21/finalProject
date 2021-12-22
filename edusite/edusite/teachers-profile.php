<?php include'header.php'; ?>

		<!-- ========== HEADER END ========== -->

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Teachers
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== CONTENT START ========== -->

		<section id="content">
			<div class="container">
				<div class="row">
					<?php 
					include 'config.php';
					if (isset($_GET['teacherid']))
							 {
								$id = $_GET['teacherid'];
							
						$selectteacher = "select * from admin where id = '$id'";
						$all = mysqli_query($con , $selectteacher);
						$allteacher = mysqli_fetch_array($all);					
						$selectcourse = "select * from admin where id = '$id'";
								$all = mysqli_query($con , $selectcourse);
							while ($allteacher = mysqli_fetch_array($all))
								{
											$allteacher[0];
											$allteacher[1];
											$allteacher[2];
											$allteacher[3];
											$allteacher[4];
											

							?>
						
					<div class="col-sm-6">
						<img src="<?php echo $allteacher[5]; ?>" alt="" class="img-responsive" />
					</div>
					<div class="col-sm-6">
						<h1><?php echo $allteacher[3]; ?></h1>
						<p><?php echo $allteacher[4]; ?></p>
							
					</div>
					<?php 
							}
						}
					 ?>
				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

		<!-- ========== REVIEWS START ========== -->

		<section id="teachers-reviews">
			<div class="tint"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal>

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

	<!-- ========== SKILLS START ========== -->

		<section id="skills">
			<div class="container">
			<?php 
					include 'config.php';
					if (isset($_GET['teacherid']))
							 {
								$id = $_GET['teacherid'];
							
						$selectteacher = "select * from admin where id = '$id'";
						$all = mysqli_query($con , $selectteacher);
						$allteacher = mysqli_fetch_array($all);					
						$selectcourse = "select * from admin where id = '$id'";
								$all = mysqli_query($con , $selectcourse);
							while ($allteacher = mysqli_fetch_array($all))
								{
											$allteacher[0];
											$allteacher[1];
											$allteacher[2];
											$allteacher[3];
											$allteacher[4];
											

							?>
				<div class="row">
					<div class="col-sm-12">
						<h2><?php echo $allteacher[3];?>'s key skills</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p><?php echo $allteacher[4];?></p>
					</div>

					<?php }} ?>
				<div class="col-sm-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" data-transitiongoal="90">
								<span class="pull-left">Scripting</span>
								<span class="pull-right">90%</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" data-transitiongoal="100">
								<span class="pull-left">Web Designing</span>
								<span class="pull-right">100%</span>
			

							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" data-transitiongoal="80">
								<span class="pull-left">Database</span>
								<span class="pull-right">80%</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" data-transitiongoal="70">
								<span class="pull-left">Programming</span>
								<span class="pull-right">70%</span>
							</div>
						</div>
					</div>
				</div>


			</div>
		</section>


		<!-- ========== SKILLS END ========== -->


		<!-- ========== RELATED COURSES START ========== -->

		<section id="featured-posts" class="alt-background">
			<div class="container">
				
				<h2 class="text-center carousel-title">
					Related Courses
					<a href="#">View All Courses</a>
				</h2>

				<!-- OWL CAROUSEL START -->
				<div class="owl-carousel">	
				<?php 
					include 'config.php';

						$selectcourse = "select * from courses where teacher_id='$_GET[teacherid]'";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
						{
							 ?>					
					<div class="item">					
						<a href="#"><img src="<?php echo $allcourse[5]; ?>" alt="" class="img-responsive" style="width:200px; height:150px;" /></a>
						<h3><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><?php echo $allcourse[1]; ?></a></h3>
						<div class="meta">
							<p><a href="">by <?php  echo $allcourse[6]; ?></a></p>
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						
					</div>
					
					<!-- <div class="item">
						<a href="#"><img src="images/course02.jpg" alt="" class="img-responsive" /></a>
						<h3><a href="#">Introducing to Digital Photography</a></h3>
						<div class="meta">
							<p><a href="#">by John Doe</a></p>
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<div class="price">$29.90</div>
					</div>
					
					<div class="item">
						<a href="#"><img src="images/course03.jpg" alt="" class="img-responsive" /></a>
						<h3><a href="#">Adobe Illustrator and Vector Design Basics</a></h3>
						<div class="meta">
							<p><a href="#">by John Doe</a></p>
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<div class="price">$34.90</div>
					</div> -->
					
					<!-- <div class="item">
						<a href="#"><img src="images/course04.jpg" alt="" class="img-responsive" /></a>
						<h3><a href="#">Introduction to Search Engine Optimisation</a></h3>
						<div class="meta">
							<p><a href="#">by John Doe</a></p>
							<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
						</div>
						<div class="price">$27.90</div>
					</div> -->
<?php } ?>
				</div>
				<!-- OWL CAROUSEL END -->

			</div>
		</section>
		<!-- ========== RELATED COURSES END ========== -->

		


		<?php include'footer.php'; ?>

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

