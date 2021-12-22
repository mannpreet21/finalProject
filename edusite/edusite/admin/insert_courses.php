<?php ob_start();
session_start();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Course</title>
</head>
<body>
	<center>		<h1 style="background-color:#144d87; color:white; padding-top:20px; padding-bottom:25px; margin-top:-20px">INSERT NEW COURSE </h1></center>
	<style>
		
			html
		{
			background-color: #e8f3f8;
		}
		input
	{
		margin-top: 10px;
		margin-bottom: 5px;	padding:5px;
		font-size: inherit;
		background:#faf6d9;
		width:250px;

	}
	input[tupe="submit"]
	{
		border-radius: 5px;
	}
	input[type="submit"]:hover
	{
		background-color: #144d87;

	}
	input[type="file"]:hover
	{
		background-color: #144d87;
	}
	</style>
<form action="" method="post" enctype="multipart/form-data">
<center>
<br><input type="text" id="" class="" name="course_name" placeholder="course_name"><br>
<br><input type="text" id="" class="" name="description" placeholder="description"><br>
<br><input type="text" id="" class="" name="category" placeholder="category"><br>
<br><input type="text" id="" class="" name="embed_source" placeholder="embeded_source"><br>
<br><input type="text" id="" class="" name="teacher_name" placeholder="teacher_name"><br>
<!-- <br><input type="text" id="" class="" name="id" placeholder="teacher_id"><br> -->
<br><input type="file" name="img">
<br><br><input type="submit" value="INSERT" name="s1">
</center>
</form>
</body></html>
<?php
 include 'config.php';

if(isset($_POST['s1']))
{
	 $select = "select * from admin";
	$r = mysqli_query($con, $select);
	$data = mysqli_fetch_array($r);
	// $text1=$_POST['course_id'];
	 $c_name=$_POST['course_name'];
	 $c_description=$_POST['description'];
	 $c_catagory=$_POST['category'];
	 $embed_source=$_POST['embed_source'];
	 $teacher_name=$_POST['teacher_name'];
	 // $teacher_id=$_POST['id'];
	// echo $text1;

	// echo $data[0];

	echo $name=$_FILES['img']['name'];
	 echo $size=$_FILES['img']['size'];
	 echo $tmp_name=$_FILES['img']['tmp_name'];
	 echo $type=$_FILES['img']['type'];
	

	if(!empty($name))
 	{
       $location='upload/';
       move_uploaded_file("$tmp_name", "$location". "$name");
       $path = $location. $name;
      	}
 	else
 	{
  echo "plz select foto";
}
$insert="insert into courses values('','$c_name','$c_description','$c_catagory','$embed_source','$path','$teacher_name','$data[0]')";
	mysqli_query($con, $insert);

	  // header("location: lesson.php");

}
?>

