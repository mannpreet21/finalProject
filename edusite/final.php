<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RESULT!</title>
	<meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootsrap.css">
</head>
<body>
	
<style>
	.edit
	{
		font-weight: bold;
		font-size:30px;
		justify-content: center;
	}
	.edit1
	{
		padding-top: 20px;
		padding-bottom: 20px;
		margin-top: 20px;
		width:1100px;
		height: 200px;
		font-size: 20px;
		font-weight: bold;

	}
	.animation
	{
		animation: leelaanimate 0.5s infinite;
	}
	@keyframes leelaanimate
	{
		0% {color:red},
		10% {color:yellow},
		20% {color:blue}
		40% {color:green},
		50% {color:pink}
		60% {color:orange},
		80% {color:black},
		100% {color:brown}
	}

</style>

 

<div class="container-fluid" style="background-color:black; height: 100px; margin-top: 40px;">
<center><h1  class="animation" style="color:white; padding-top: 20px">RESULTS</h1></center>
</div>
<center><table border="4px solid black" class="edit1">
		<tr>

		 <td>Question Attemped</td>
		  <td> <?php
 $count=count($_POST['quizcheck']);
echo "out of 10, you have selected " .$count. " options";

?></td>
</tr>
<tr>
		  <td> your total marks</td>
		  <td>
		  	
<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdatabase');
if (isset($_POST['submit'])) 
{
if (!empty($_POST['quizcheck'])) 
{
$count=count($_POST['quizcheck']);
echo "out of 10, you have selected " .$count. "options";
$result=0;	
$i=1;
$selected=$_POST['quizcheck'];

//print_r($selected);
$q="select * from questions";
$query=mysqli_query($con,$q);

while ($rows = mysqli_fetch_array($query)) {
 //print_r($rows['ans_id']);
 $checked= $rows['ans_id']==$selected[$i];
 if($checked)
 {
 	$result++;
 }
 $i++;
}
echo "<br> your total marks is:" .$result;

}
}
  ?>
</td>
</tr>
</table>
</center>
  
  </body>
  </html>