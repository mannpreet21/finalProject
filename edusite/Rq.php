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

        1.Rails' application framework is called ______. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[1]" value="1">
            ActionPack               
            <br>
            <input type="radio" name="quizcheck[1]" value="2">
            ActiveRecord                
            <br>
            <input type="radio" name="quizcheck[1]" value="3">
            a web page               
            <br>
            <input type="radio" name="quizcheck[1]" value="4">
            an object               
            <br><br>
            </div>
        2. How do you run a migration? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[2]" value="5">
            CamelCase                
            <br>
            <input type="radio" name="quizcheck[2]" value="6">
            ruby make               
            <br>
            <input type="radio" name="quizcheck[2]" value="7">
            an object
            <br>
            <input type="radio" name="quizcheck[2]" value="8">
            rake db:migrate                  
            <br><br>
            </div>
        3. What does "show" refer to as the :action value? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[3]" value="9">
            the method within the controller to call                 
            <br>
            <input type="radio" name="quizcheck[3]" value="10">
            HTTP methods(post,get,put,delete)                
            <br>
            <input type="radio" name="quizcheck[3]" value="11">
            the data being presented by the web page                 
            <br>
            <input type="radio" name="quizcheck[3]" value="12">
            their names beginwith an underscore                  
            <br><br>
            </div>
        4. How do you update? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[4]" value="13">
            update_attributes                
            <br>
            <input type="radio" name="quizcheck[4]" value="14">
            unit,function and integration tests                 
            <br>
            <input type="radio" name="quizcheck[4]" value="15">
            format              
            <br>
            <input type="radio" name="quizcheck[4]" value="16">
            it is not associated with a model                
            <br><br>
            </div>
        5. Representation of a resource is called ___. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[5]" value="17">
            CamelCase                
            <br>
            <input type="radio" name="quizcheck[5]" value="18">
            ruby make               
            <br>
            <input type="radio" name="quizcheck[5]" value="19">
            a web page              
            <br>
            <input type="radio" name="quizcheck[5]" value="20">
            ActionPack               
            <br><br>
            </div>
        6. Converts database records to objects is called______. <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[6]" value="21">
            for ad in @ads               
            <br>
            <input type="radio" name="quizcheck[6]" value="22">
            integration test                
            <br>
            <input type="radio" name="quizcheck[6]" value="23">
            Representational State Transfer                 
            <br>
            <input type="radio" name="quizcheck[6]" value="24">
            an object-relational mapping library                 
            <br><br>
            </div>
        7. What checks if an input is numeric? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[7]" value="25">
            integration test                 
            <br>
            <input type="radio" name="quizcheck[7]" value="26">
            a responder object               
            <br>
            <input type="radio" name="quizcheck[7]" value="27">
            validate                 
            <br>
            <input type="radio" name="quizcheck[7]" value="28">
            validates_numericality_of               \
            <br><br>
            </div>
        8. What is Rails' object relational mapping library? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[8]" value="29">
            CamelCase                
            <br>
            <input type="radio" name="quizcheck[8]" value="30">
            ActiveRecord                 
            <br>
            <input type="radio" name="quizcheck[8]" value="31">
            An object                
            <br>
            <input type="radio" name="quizcheck[8]" value="32">
            Underscores                 
            <br><br>
            </div>
        9. What is params[...]? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[9]" value="33">
            have the same URL of a table               
            <br>
            <input type="radio" name="quizcheck[9]" value="34">
            the word "private"               
            <br>
            <input type="radio" name="quizcheck[9]" value="35">
            a responder object               
            <br>
            <input type="radio" name="quizcheck[9]" value="36">
            the request parameters table                 
            <br><br>
            </div>
        10. What is naming convention for classes? <br><br>
            <div class="edit2">
            <input type="radio" name="quizcheck[10]" value="37">
            ActionPack              
            <br>
            <input type="radio" name="quizcheck[10]" value="38">
            CamelCase               
            <br>
            <input type="radio" name="quizcheck[10]" value="39">
            ruby make               
            <br>
            <input type="radio" name="quizcheck[10]" value="40">
            a web page               
            <br><br>
            </div>

        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>