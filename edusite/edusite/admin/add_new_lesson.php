<html>
	<head>	</head>
<body>
	<center>		<h1 style="background-color:#144d87; color:white; padding-top:20px; padding-bottom:25px; margin-top:-20px">ADDING NEW LESSONS </h1></center>

	<style>
	html
	{
		background-color: #e8f3f8;

	}

	form

	{
	
		color:steelblue;
		align-items: center;
	}
	input
	{
		margin-top: 10px;
		margin-bottom: 5px;	padding:10px;
		font-size: inherit;
	}
	input[type="text"]
	{
		margin-top:20px;
		margin-left: 0;
		display: block;
		margin-bottom: 20px;
		border:2px solid steelblue;
		background:#faf6d9;

	}
	input[type="submit"]
	{
		width:150px;
		height: 45px;
		border:none;
		background:steelblue;
		color:white;
        border-radius: 5px;
       margin-left: 120px;
	}
	

	</style>
	<form action="" method="POST">

		<center>
			<table>
				 <tr>
				 	<td>LESSEON NAME:</td>
				 	<td>
				 		<input type="text" name="name"><br>
				 	</td>
				 </tr>
				 <tr>
<td>
		DESCRIPTIONS:
		</td>
		<td>
		<input type="text" name="description"  ><br>
		</td>
	</tr>
	<tr>
		<td>
		EMBED SOURCE:
		</td>
		<td>
		<input type="text" name="embed_source"><br>
		</td>
	</tr>
	</table>
</center>

<center>	<input type="submit" name="submit" class="a 1-b" ></center>


	</form>

<?php 
include'config.php';
if (isset($_POST['submit']))
 {
	echo $name=$_POST['name'];
	echo $description=$_POST['description'];
	echo $embed_source=$_POST['embed_source'];
	

echo $courseid = $_GET['courseid'];
$insert = "insert into lessons values('','$name','$description','$embed_source','$courseid')";	
	mysqli_query($con, $insert);	
		echo "values inserted";
 }
 ?>


</body>
</html>