<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="post">
<!-- <input type="text" id="" class="" name="course_id" placeholder="course_id"><br> -->
<input type="text" id="" class="" name="course_name" placeholder="course_name"><br>
<input type="text" id="" class="" name="description" placeholder="description"><br>
<input type="text" id="" class="" name="category" placeholder="category"><br>
<input type="text" id="" class="" name="embeded_source" placeholder="embeded_source"><br>
<input type="text" id="" class="" name="author_name" placeholder="author_name"><br>

<input type="submit" value="insert" name="s1">
</form>
<?php
 include 'connection.php';
if(isset($_POST['s1']))
{
	// $text1=$_POST['course_id'];
	$text2=$_POST['course_name'];
	$text3=$_POST['description'];
	$text4=$_POST['category'];
	$text5=$_POST['embeded_source'];
	$text6=$_POST['author_name'];
	// echo $text1;
	echo $text2;
	echo $text3;
	echo $text4;
	echo $text5;
	echo $text6;
$insert="insert into courses values(' ','$text2','$text3','$text4','$text5','$text6')";
	mysqli_query($conn,$insert);
}
?>

