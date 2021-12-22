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
						<p> Our  teachers are accomplished, creative individuals who know their subjects intimately. What’s more, they care deeply about their students. They act as advisors, coaches, club leaders and role models. Our teachers are dedicated to helping our students achieve, their learning goals. All of our teachers follow our educational principles, Our center is designed to help students become better learners, to build confidence and to reach their academic potential.</p>
						<!-- <p>Using online activities, you can progress students' learning, prepare them for formal assessment tasks and undertake assessment. Conducting learning activities online gives students flexibility as to when and where they will undertake learning and be assessed. This supports the development of their independent learning skills</p> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. Nullam aliquet placerat magna ut eleifend. Phasellus iaculis tristique laoreet.</p> -->
						<ul>
						<h5>Teaching Staff</h5>
							Our Teaching Staff are dedicated and experienced professionals with a passion for inspiring effort and high achievement. Learn more about highly qualified early years, primary school, secondary school, and IB teaching staff.										
							<h5>Leadership Team</h5>							
							Our Senior Leadership Team believes passionately in learning, and our distinctive international approach to education continues to help our students achieve.
							<h5>Support Staff</h5>
							Meet our dedicated team of support staff who work to make our school great.
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
						if (isset($_SESSION['userid']))
						 {
							$selectteacher = "select * from admin limit 4";
							$all = mysqli_query($con , $selectteacher);
							while($allteacher = mysqli_fetch_array($all))
								{									
									 ?>
				<ul class="teachers">
					
					<li class="col-lg-3 col-md-4 col-sm-6">
						<img src="<?php echo $allteacher[5]; ?>" alt="" class="img-responsive" />
						<div class="description">	
						<h3><?php echo $allteacher[3]; ?></h3>
							<p><?php echo "$allteacher[4]"; ?></p>
							<a href="teachers-profile.php?teacherid=<?php echo $allteacher[0];?>">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</li>
					<?php }
						}
						else
						{?>
					<ul>
							<li>
								<img src="images/pl.jpg" alt="" class="pull-left" height="40" width="40"/>
								<h5>First Login Plz</h5>
								<p class="author">If You Want To Check It Plz Create Account And Login ...</p>
							</li>
							
						</ul>
					<?php
							
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
						<p>We teach web developing, web designing, scripting languages, programming languages. You can learn HTML, CSS, java script. Our teachers are able to taught to python, java programming. You can aslo learn databases like MYSQL, SQL etc.  </p>
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

