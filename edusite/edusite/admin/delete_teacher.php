
<?php 
// include'config.php';
// echo $id = $_GET['teacherid'];
// $delete = "delete from teacher where teacher_id='$id'";
// 	  mysqli_query($con, $delete);
// 	echo "teacher removed";	

		
 
 ?>

<?php 
include'config.php';
echo $id = $_GET['id'];
$delete = "delete from admin where id='$id'";
	  mysqli_query($con, $delete);
	echo "teacher deleted";	

		
 
 ?>
