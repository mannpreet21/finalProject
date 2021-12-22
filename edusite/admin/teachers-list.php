<?php include 'header.php'; ?>
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
					<div class="col-sm-6">
						<div class="video-wrapper">
							<iframe width="853" height="480" src="http://www.youtube.com/embed/L2LNK2MW_xQ" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<h1>Meet our staff</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. Nullam aliquet placerat magna ut eleifend. Phasellus iaculis tristique laoreet.</p>
						<ul>
							<li>Fusce iaculis ornare nunc rutrum ornare.</li>
							<li>Proin ut placerat enim, vel venenatis urna.</li>
							<li>Phasellus sed diam tincidunt mauris malesuada mattis et in nisl.</li>
							<li>Quisque massa eros, molestie at mi eget, aliquam tristique eros.</li>
							<li>Nullam aliquet placerat magna ut eleifend.</li>
							<li>Phasellus iaculis tristique laoreet.</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

		<!-- ========== TEACHERS START ========== -->

		<section id="teachers" class="alt-background">
			<div class="container">
				
				<h2>Teachers</h2>
<?php 
						include 'config.php';
						if (!$_SESSION['userid'])
						 {
							$selectteacher = "select * from teacher limit 3";
							$all = mysqli_query($con , $selectteacher);
							while($allteacher = mysqli_fetch_array($all))
								{
									 $allteacher[1];
									
									 ?>
				<ul class="teachers">
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post1.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3><?php echo $allteacher[1]; ?></h3>
							<p><?php echo "$allteacher[2]"; ?></p>
							<a href="teachers-profile.php?teacherid=<?php echo $allteacher[0];?>">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					<?php }
						}
							?>
					<!-- <li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post2.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Judy Williams</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post3.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Jerry Ramirez</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post4.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Daniel Roberts</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post5.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Charles Turner</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post6.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Laura Collins</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post7.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Carolyn Butler</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post8.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Christopher Wright</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post9.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Lois Davis</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post1.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Scott Edwards</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post2.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Irene Morris</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="images/sidebar-post3.jpg" alt="" class="img-responsive" />
						<div class="description">
							<h3>Ronald Brown</h3>
							<p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor.</p>
							<a href="teachers-profile.php">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li> -->

				</ul>

			</div>
		</section>

		<!-- ========== TEACHERS END ========== -->

		<!-- ========== SKILLS START ========== -->

			<section id="skills">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>What we teach</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. Nullam aliquet placerat magna ut eleifend.</p>
					</div>
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
		

	

		<!-- ========== FOOTER START ========== -->

		<?php include 'footer.php'; ?>

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

	</body>
</html>