<?php include 'header.php';  ?>
<?php ob_start(); ?>
<br>
<center>
<h3>Enter new lesson of the Course</h3>
<form action=" " method="post">
<input type="text" name="name" placeholder="lesson-name"><br>
<input type="text" name="description" placeholder="lesson-description"><br>
<input type="text" name="embed_source" placeholder="lesson-embed_source"><br>
<input type="submit" value="insert" name="s1">
</form>
</center>
<?php
 include'config.php';
 $select = "select * from courses order by course_id desc";
	$r = mysqli_query($con, $select);
	$data = mysqli_fetch_array($r); 
	 
	if(isset($_POST['s1']))
{	
echo $name=$_POST['name'];
echo $description=$_POST['description'];
echo $embed_source=$_POST['embed_source'];

	
       $insert = "insert into lessons values('','$name','$description','$embed_source','$data[0]')";	
		mysqli_query($con, $insert);	
		echo "values inserted";
      	
 	
 }
?>


<?php include 'footer.php';  ?>






<?php 
					// include 'config.php';
					// if (isset($_GET['courseid']))
					//  {
					// 	$id = $_GET['courseid'];
					
					// 	$selectcourse = "select * from lessons where course_id = '$id'";
					// 	$all = mysqli_query($con , $selectcourse);
					// 	while($allcourse = mysqli_fetch_array($all))
					// 		{
					// 			echo "$allcourse[0]"."<br>";
					// 			echo "$allcourse[1]"."<br>";
					// 			echo "$allcourse[2]"."<br>";
					// 			echo "$allcourse[3]"."<br>";
					// 			echo "$allcourse[4]"."<br>";
					// 			echo "$allcourse[5]"."<br>";
								
								// echo "<a href=all_courses.php?courseid=$all[0]></a>";
								//  }
								// }
								 ?>
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