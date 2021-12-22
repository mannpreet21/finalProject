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
		margin-top: 30px;
		font-size: 18px;
		background-color: lightblue;
		padding: 2px;
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

        1. JavaScript is _______ language. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[1]" value="1">
            Scripting                
            <br>
            <input type="radio" name="quizcheck[1]" value="2">
            Application                  
            <br>
            <input type="radio" name="quizcheck[1]" value="3">
            Programing               
            <br>
            <input type="radio" name="quizcheck[1]" value="4">
            None of these                
            <br><br>
            </div>
        2. Javascript is__________ Side Scripting Language. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[2]" value="5">
            Browser                  
            <br>
            <input type="radio" name="quizcheck[2]" value="6">
            Server               
            <br>
            <input type="radio" name="quizcheck[2]" value="7">
            ISP                  
            <br>
            <input type="radio" name="quizcheck[2]" value="8">
            None of these               
            <br><br>
            </div>
        3. Javascript is designed for following purpose- <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[3]" value="9">
            To Style HTML pages                  
            <br>
            <input type="radio" name="quizcheck[3]" value="10">
            To execute query related to DB on server                 
            <br>
            <input type="radio" name="quizcheck[3]" value="11">
            To add interactivity to HTML pages               
            <br>
            <input type="radio" name="quizcheck[3]" value="12">
            To perform Server side scripting operation              
            <br><br>
            </div>
        4. Javascript is an __________ language. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[4]" value="13">
            compiled                 
            <br>
            <input type="radio" name="quizcheck[4]" value="14">
            interprated                 
            <br><br>
            </div>
        5. Javascript Code is written inside file having extension____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[5]" value="15">
            .jvs                
            <br>
            <input type="radio" name="quizcheck[5]" value="16">
            .javascript                  
            <br>
            <input type="radio" name="quizcheck[5]" value="17">
            .js                  
            <br>
            <input type="radio" name="quizcheck[5]" value="18">
            .jsc                
            <br><br>
            </div>
        6. Why JS is called as Lightweight Programming Language? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[6]" value="19">
            because JS is available free of cost.               
            <br>
            <input type="radio" name="quizcheck[6]" value="20">
            because we can add programming functionality inside JS               
            <br>
            <input type="radio" name="quizcheck[6]" value="21">
            because JS can provide programming functionality inside but up to certain extend.                
            <br>
            <input type="radio" name="quizcheck[6]" value="22">
            because JS is client side scripting                  
            <br><br>
            </div>
        7. Local browser used for validation on the web pages uses_____. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[7]" value="23">
            CSS                 
            <br>
            <input type="radio" name="quizcheck[7]" value="24">
            JAVA                
            <br>
            <input type="radio" name="quizcheck[7]" value="25">
            JS               
            <br>
            <input type="radio" name="quizcheck[7]" value="26">
            HTML               
            <br><br>
            </div>
        8. We can embed JS code inside HTML directly? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[8]" value="27">
            True                
            <br>
            <input type="radio" name="quizcheck[8]" value="28">
            False                
            <br><br>
            </div>
        9. JS code can be called by using______. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[9]" value="29">
            RMI                  
            <br>
            <input type="radio" name="quizcheck[9]" value="30">
            Function/Method                  
            <br>
            <input type="radio" name="quizcheck[9]" value="31">
            Preprocessor                 
            <br>
            <input type="radio" name="quizcheck[9]" value="32">
            Triggering Event                
            <br><br>
            </div>
        10. State the correct place of JS code inside HTML- <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[10]" value="33">
            Inside Body                 
            <br>
            <input type="radio" name="quizcheck[10]" value="34">
            All of these                 
            <br>
            <input type="radio" name="quizcheck[10]" value="35">
            Inside Single JS File                
            <br>
            <input type="radio" name="quizcheck[10]" value="36">
            inside Head                 
            <br><br>
            </div>

                <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>