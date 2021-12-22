

<?php ob_start(); 
	
?>
<?php include'header.php'; ?>
		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Courses
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== CONTENT START ========== -->

		<section id="content">
			<div class="container">
				<div class="row">

					<!-- ==== SIDEBAR START == -->

					<div class="col-sm-4">


						<!-- ==== LATEST courses START == -->
						<div class="widget" data-scroll-reveal>
							<h3>Latest Courses</h3>
							<div class="post row">
				<?php 
					include 'config.php';
					
					if ($_SESSION['userid'])
					 {
						$selectcourse = "select * from courses order by course_id desc limit 5";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
							{
								 ?>
								<div class="col-md-4">
									<a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><img src="<?php echo $allcourse[5]; ?>" alt="" class="img-responsive" style="width:40px; height:40px;" /></a>
								</div>
								<div class="col-md-8">
									<h5><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><?php echo $allcourse[1]; ?></a></h5>
									<div class="meta">Posted january 15, 2020 by <?php echo $allcourse[6]; ?> in Category <?php echo $allcourse[3]; ?></div>
								</div>
							<?php }} ?>
					
						</div>
						</div>
						<!-- ==== LATEST POSTS END == -->

					</div>

					<!-- ==== SIDEBAR END == -->

					<!-- ==== COURSES START == -->

					<div class="col-sm-8">
						<div class="courses">	
														
							<!-- Course Start -->
					<?php 
					include 'config.php';
					$selectlesson = "select * from lessons";
						$all = mysqli_query($con , $selectlesson);
						$all_lesson = mysqli_fetch_array($all);
															 
					if ($_SESSION['userid'])
					 {
						$selectcourse = "select * from courses";
						$all = mysqli_query($con , $selectcourse);
						while($allcourse = mysqli_fetch_array($all))
							{
								
								 ?>
							<div class="course row" data-scroll-reveal>
								<div class="col-sm-4">
									<a href="courses-details.php"><img src="<?php echo $allcourse[5]; ?>" alt="" class="img-responsive" style="width:200px; height:150px;" /></a>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<h3><a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>"><?php echo "<h1>".$allcourse[1]."</h1>"; ?></a></h3>
											<div class="meta">
												<span><i class="fa fa-user"></i><?php  echo $allcourse[6]; ?></span>
												<span><i class="fa fa-file-text"></i> Lessons </span>
												<!-- <span><i class="fa fa-folder"></i><a href="#">Design</a></span> -->
											</div>
										</div>
										<!-- <div class="col-md-3 col-sm-4 price">$39.90</div> -->
									</div>
									<div class="row">
										<div class="col-sm-12">
										<?php echo "$allcourse[2]"."<br>"; ?>																			
											<a href="courses-details.php?courseid=<?php echo $allcourse[0]; ?>">Read more<i class="fa fa-angle-right"></i>
												</a>														
										</div>
									</div>
								</div>
	 								<div class="col-md-12">
	 							
									<hr>
								</div>
							</div>
					
				<?php
					 } 
						} 
							
							else
							{
								
								header("location:login.php");					

							}
				?>			
						</div></div>
							<!-- Course End -->
							
							



<!-- Course Start -->
							<!-- <div class="course row" data-scroll-reveal> -->
								<!-- <div class="col-sm-4">
									<a href="courses-details-left-sidebar.php"><img src="images/course01.jpg" alt="" class="img-responsive" /></a>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<h3><a href="courses-details-left-sidebar.php">Web Development</a></h3>
											<div class="meta">
												<span><i class="fa fa-user"></i><a href="teachers-profile.php">Rajeev Raheja</a></span>
												<span><i class="fa fa-file-text"></i>4 Lessons</span>
												<span><i class="fa fa-folder"></i><a href="#">Design</a></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 price">$39.90</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<p>Web development is the coding or programming that enables website functionality, per the owner's requirements. It mainly deals with the non-design aspect of building websites, which includes coding and writing markup. 
							
							Web development ranges from creating plain text pages to complex Web-based applications, social network applications and electronic business applications.
							
							The Web development hierarchy is as follows:
							
							Client-side coding
							Server-side coding
							Database technology</p>
											<a href="development.php">Read more <i class="fa fa-angle-right"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
							</div> -->
							<!-- Course End -->
							
							

<!-- Course start -->
<!-- 
<div class="course row" data-scroll-reveal>
								<div class="col-sm-4">
									<a href="courses-details-left-sidebar.php"><img src="images/course01.jpg" alt="" class="img-responsive" /></a>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<h3><a href="courses-details-left-sidebar.php">Databse</a></h3>
											<div class="meta">
												<span><i class="fa fa-user"></i><a href="teachers-profile.php">Rajeev Raheja</a></span>
												<span><i class="fa fa-file-text"></i>4 Lessons</span>
												<span><i class="fa fa-folder"></i><a href="#">Design</a></span>
											</div>
										</div> -->
										<!-- <div class="col-md-3 col-sm-4 price">$39.90</div> -->
									<!-- </div>
									<div class="row">
										<div class="col-sm-12">
											<p>A database is a collection of information that is organized so that it can easily be accessed, managed, and updated. In one view, databases can be classified according to types of content: bibliographic, full-text, numeric, and images.</p>
											<a href="database.php">Read more <i class="fa fa-angle-right"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
							</div> -->
							<!-- Course End -->





<!-- Course start -->

<!-- <div class="course row" data-scroll-reveal>
								<div class="col-sm-4">
									<a href="courses-details-left-sidebar.php"><img src="images/course01.jpg" alt="" class="img-responsive" /></a>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<h3><a href="courses-details-left-sidebar.php">Programming</a></h3>
											<div class="meta">
												<span><i class="fa fa-user"></i><a href="teachers-profile.php">Rajeev Raheja</a></span>
												<span><i class="fa fa-file-text"></i>4 Lessons</span>
												<span><i class="fa fa-folder"></i><a href="#">Design</a></span>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 price">$39.90</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<p>.The process of developing and implementing various sets of instructions to enable a computer to do a certain task. These instructions are considered computer programs and help the computer to operate smoothly. The language used to program computers is not understood by an untrained eye. Computer programming continues to be a necessary process as the Internet continues to expand.</p>
											<a href="programming.php">Read more <i class="fa fa-angle-right"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
							</div> -->
							<!-- Course End -->





<!-- Course start -->

<!-- <div class="course row" data-scroll-reveal>
								<div class="col-sm-4">
									<a href="courses-details-left-sidebar.php"><img src="images/course01.jpg" alt="" class="img-responsive" /></a>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<h3><a href="courses-details-left-sidebar.php">Scripts</a></h3>
											<div class="meta">
												<span><i class="fa fa-user"></i><a href="teachers-profile.php">Rajeev Raheja</a></span>
												<span><i class="fa fa-file-text"></i>4 Lessons</span>
												<span><i class="fa fa-folder"></i><a href="#">Design</a></span>
											</div>
										</div> -->
										<!-- <div class="col-md-3 col-sm-4 price">$39.90</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<p>In computer programming, a script is a program or sequence of instructions that is interpreted or carried out by another program rather than by the computer processor </p>
											<a href="scripts.php">Read more <i class="fa fa-angle-right"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
							</div> -->
							</div></div></div></div></section>
							<!-- Course End -->

							<!-- Course End -->
							
							


<?php include'footer.php'; ?>
