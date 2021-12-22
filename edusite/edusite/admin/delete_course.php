
<?php 
include'config.php';
echo $courseid = $_GET['courseid'];
$delete = "delete from courses where course_id='$courseid'";
	  mysqli_query($con, $delete);
$deletelessons = "delete from lessons where course_id='$courseid'";	 
mysqli_query($con, $deletelessons); 
	echo "course deleted";	

		
 
 ?>


</body>
</html>