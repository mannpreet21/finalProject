<?php
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="quizdatabase";
$con=mysqli_connect($host,$user,$password,$dbname);

mysqli_select_db($con,'quizdatbase');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QUIZ!</title>
	<meta name="viewport" content="width-device-width,initial-scale=1,shrink-to-fit">
	<link rel="stylesheet" href="css/bootstrap.css">
	
</head>
			
<body style="background-color:#deeff5;">
	<style>
		#title
		{
			color: red;
			background: lightblue;
			padding: 4px;
		}
    .edit
	{
		margin-top:30px;
		font-size:18px;
		background-color: lightblue;
		padding:2px;
	}
	.edit1
	{
		justify-content:center;
		padding-left:100px;
		font-size:20px;
		font-weight:bold;
		color:black;
		
	        
	}
	.edit2{
		color:#000080;
	}
	</style>
	<div class="container">
		<div class="row">
		<div class="col-12" id="title">
        <center><h1>WELCOME TO QUIZ!</h1></center>
            	
        </div>
    </div>
</div>
<div class="container">

            <div class="row">
            	<div class="col-12">
            			<center>
            			<h2 class="edit">*welcome,you have to choose only 1 out of 4*</h2></center>
            </div>

            </div>
        </div><br>
		<div class="container-fluid" style="background-color:#f0f8ff; width:1050px; border:1 px solid #000080; margin:0 auto; justify-content:center">
		<div class="row">
        <form action="final.php" method="post">
		<div class="edit1">
              <div class="container-fluid" style="background-color:#f0f8ff; width:1050px; border:1 px solid #000080; margin:0 auto; justify-content:center">
		<div class="row">
        <form action="final.php" method="post">
		<div class="edit1">
                                     1. If we want define style for an unique element, then which css selector will we use?  <br>
<br>
  <div class="edit2">
             	             	 	<input type="radio" name="quizcheck[1]" value="1">
             	 	Id					<br>
    
                     	 	<input type="radio" name="quizcheck[1]" value="2">
             	 	text					<br>
    
                     	 	<input type="radio" name="quizcheck[1]" value="3">
             	 	class					<br>
    
                     	 	<input type="radio" name="quizcheck[1]" value="4">
             	 	name					<br>
					<br>
    </div>
                           2. If we don't want to allow a floating div to left side of element, which css property will we use?  <br><br>

<div class="edit2">
             	             	 	<input type="radio" name="quizcheck[2]" value="5">
             	 	margin					<br>
    
                     	 	<input type="radio" name="quizcheck[2]" value="6">
             	 	clear					<br>
    
                     	 	<input type="radio" name="quizcheck[2]" value="7">
             	 	float					<br>
    
                     	 	<input type="radio" name="quizcheck[2]" value="8">
             	 	padding					<br>
    <br>
	</div>
                            3. Can we define the text direction via css property?  <br><br>
<div class="edit2">

             	             	 	<input type="radio" name="quizcheck[3]" value="9">
             	 	Yes,we can					<br>
    
                     	 	<input type="radio" name="quizcheck[3]" value="10">
             	 	No,we can't					<br>
					<br>
					</div>
    
                            4. If we want to show an arrow as cursor,then which value we will use?  <br>
							<br>
<div class="edit2">

             	             	 	<input type="radio" name="quizcheck[4]" value="11">
             	 	pointer					<br>
    
                     	 	<input type="radio" name="quizcheck[4]" value="12">
             	 	default					<br>
    
                     	 	<input type="radio" name="quizcheck[4]" value="13">
             	 	arrow					<br>
    
                     	 	<input type="radio" name="quizcheck[4]" value="14">
             	 	arr					<br><br></div>
    
                           5. How can we write comment along with CSS code? <br><br>

<div class="edit2">
             	             	 	<input type="radio" name="quizcheck[5]" value="15">
             	 	/*a comment*/					<br>
    
                     	 	<input type="radio" name="quizcheck[5]" value="16">
             	 	//a comment//					<br>
    
                     	 	<input type="radio" name="quizcheck[5]" value="17">
             	 	/a comment/					<br>
    
                     	 	<input type="radio" name="quizcheck[5]" value="18">
             	 	*a comment*					<br><br>
					</div>
    
                           6. Which CSS property is used to control the text size of an element? <br>
						   <br><div class="edit2">


             	             	 	<input type="radio" name="quizcheck[6]" value="19">
             	 	font-style					<br>
    
                     	 	<input type="radio" name="quizcheck[6]" value="20">
             	 	text-size					<br>
    
                     	 	<input type="radio" name="quizcheck[6]" value="21">
             	 	font-size					<br>
    
                     	 	<input type="radio" name="quizcheck[6]" value="22">
             	 	text-style					<br>
    <br>
	</div>
                            7.The default value of "position" attribute is____. <br>
							<br><div class="edit2">


             	             	 	<input type="radio" name="quizcheck[7]" value="23">
             	 	fixed					<br>
    
                     	 	<input type="radio" name="quizcheck[7]" value="24">
             	 	absolute					<br>
    
                     	 	<input type="radio" name="quizcheck[7]" value="25">
             	 	inherit					<br>
    
                     	 	<input type="radio" name="quizcheck[7]" value="26">
             	 	relative					<br>
    <br></div>
                            8.By applying an____a style can be applied to just a single tag.  <br>
							<br><div class="edit2">


             	             	 	<input type="radio" name="quizcheck[8]" value="27">
             	 	class rule					<br>
    
                     	 	<input type="radio" name="quizcheck[8]" value="28">
             	 	element rule					<br>
    
                     	 	<input type="radio" name="quizcheck[8]" value="29">
             	 	id rule					<br>
    
                     	 	<input type="radio" name="quizcheck[8]" value="30">
             	 	none of the above 					<br><br>
    </div>
                          9.  Which of the following selectors selects siblings?
 <br>
<br><div class="edit2">

             	             	 	<input type="radio" name="quizcheck[9]" value="31">
             	 	E.class					<br>
    
                     	 	<input type="radio" name="quizcheck[9]" value="32">
             	 	E ~ F					<br>
    
                     	 	<input type="radio" name="quizcheck[9]" value="33">
             	 	*					<br>
    
                     	 	<input type="radio" name="quizcheck[9]" value="34">
             	 	E,F,G					<br><br>
    </div>
                           10. Find the specificity of this "*". <br>
						   <br>
						   <div class="edit2">


             	             	 	<input type="radio" name="quizcheck[10]" value="35">
             	 	specificity=0,0,0,0					<br>
    
                     	 	<input type="radio" name="quizcheck[10]" value="36">
             	 	specificity=0,0,0,1					<br>
    
                     	 	<input type="radio" name="quizcheck[10]" value="37">
             	 	specificity=0,0,1,0					<br>
    
                     	 	<input type="radio" name="quizcheck[10]" value="38">
             	 	specificity=1,0,0,0				<br>	<br>
    
        		</div>
		
        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
			</div>
    </div>
	</div>
	</div>
   </body>
    </html>