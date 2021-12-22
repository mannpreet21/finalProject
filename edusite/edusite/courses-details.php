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

						<!-- ==== COURSE DATA END == -->

						<!-- ==== TEACHER START == -->
						<div class="widget" data-scroll-reveal>
						<?php 					
					include 'config.php';	
							$selectteacher = "select * from admin";
						$all = mysqli_query($con , $selectteacher);
						$allteacher = mysqli_fetch_array($all);		
							
						if (isset($_GET['courseid']))
							 {
								$id = $_GET['courseid'];
							
						$selectcourse = "select * from courses where course_id = '$id'";
						$all = mysqli_query($con , $selectcourse);
						$allcourse = mysqli_fetch_array($all);
						?>
							<h3>Teacher</h3>
							<div class="teacher row">							
								<div class="col-sm-12">
									<img src="images/thumb-teacher.jpg" alt="" class="pull-left" />
									<h5><?php echo $allcourse[6]; ?></h5>
									<p><?php echo $allcourse[3]; ?></p>
								</div>
							</div>
									<p><?php echo $allteacher[4]; ?><br>
							<a href="teachers-profile.php?teacherid=<?php echo $allcourse[7]; ?>">Read More <i class="fa fa-angle-right"></i></a></p>
						<?php } ?>
					
						</div>
						<!-- ==== TEACHER END == -->
							
					</div>

					<!-- ==== SIDEBAR END == -->

					<!-- ==== COURSES START == -->


					<div class="col-sm-8">
					<?php 					
					include 'config.php';
					$selectteacher = "select * from admin ";
						$all = mysqli_query($con , $selectteacher);
						$allteacher = mysqli_fetch_array($all);	 
					if (isset($_GET['courseid']))
							 {
								$id = $_GET['courseid'];
							
						$selectcourse = "select * from courses where course_id = '$id'";
						$all = mysqli_query($con , $selectcourse);
						$allcourse = mysqli_fetch_array($all);
						echo "<center>"."<h1>"." $allcourse[1]"."</h1>"."</center>";
						echo $allcourse[2];
												
						// 	include 'config.php';
						// 	if (isset($_GET['courseid']))
						// 	 {
						// 		$id = $_GET['courseid'];
							
								$selectcourse = "select * from lessons where course_id = '$id'";
								$all = mysqli_query($con , $selectcourse);
							while ($allcourse = mysqli_fetch_array($all))
								{
									
										?>
							<h3><?php  echo $allcourse[1]; ?></h3>
						<div class="meta">
							<span><i class="fa fa-clock-o"></i>12 Minutes</span>
							<span><i class="fa fa-dashboard"></i>Easy</span>
						</div>
						<p><?php echo $allcourse[2]; ?></p>
						<?php
						 echo $allcourse[3];
						 echo $allcourse[4];  
						 
						?>
						<!-- <hr> -->
						<!-- <h5 class="lesson-title"><a href="#">Donec porta nulla volutpat interdum porta</a></h5>
						<div class="meta">
							<span><i class="fa fa-clock-o"></i>12 Minutes</span>
							<span><i class="fa fa-dashboard"></i>Easy</span>
						</div> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra nunc, non scelerisque ligula. Cras vel justo nulla. Vestibulum a sollicitudin metus, faucibus fermentum leo. Nulla ut purus vel nunc ultricies dignissim at at nunc. Vivamus tempor eget lorem non commodo.</p> -->
						<hr>
						<?php 
								}	
							}
						 ?>
						

					<!-- ==== COURSES END == -->

				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

	
<?php include'footer.php'; ?>