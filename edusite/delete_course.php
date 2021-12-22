

<?php 
include'config.php';
if (isset($_POST['submit']))
 {
	echo $name=$_POST['name'];
	echo $description=$_POST['description'];
	echo $embed_source=$_POST['embed_source'];
	echo $upload=$_POST['upload'];

echo $courseid = $_GET['courseid'];
$delete = "delete from courses";
	  mysqli_query($con, $delete);
	mysqli_query($con, $delete);	
		
 }
 ?>


</body>
</html>