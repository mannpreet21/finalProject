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
       
      1.  Which of the following  is called address operator? <br>

<br>
             	         <div class="edit2"> 	     	
             	 	<input type="radio" name="quizcheck[1]" value="1">
             	 	*    
<br>					
                     	
             	 	<input type="radio" name="quizcheck[1]" value="2">
             	 	&             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[1]" value="3">
             	 	_             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[1]" value="4">
             	 	%            	
					<br><br>					
					</div>
        2. Which of the following is used for comments in C++?
  <br>
<br>
<div class="edit2"> 	 
             	             	
             	 	<input type="radio" name="quizcheck[2]" value="5">
             	 	//comment             	
      <br>	               	
             	 	<input type="radio" name="quizcheck[2]" value="6">
             	 	/*comment*/             	
     <br>	                	
             	 	<input type="radio" name="quizcheck[2]" value="7">
             	 	both //comment or /*comment*/             	
            <br>	         	
             	 	<input type="radio" name="quizcheck[2]" value="8">
             	 	//comment*/      <br><br>
</div>					
        3.   Who created c++?
<br>
<br>	
             	             <div class="edit2"> 	 	
             	 	<input type="radio" name="quizcheck[3]" value="9">
             	 	Bjarne Stroustrup             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[3]" value="10">
             	 	Dennis Ritchie             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[3]" value="11">
             	 	Ken Thompson             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[3]" value="12">
             	 	Brian Kernighan <br><br>	
</div>					
      4.  Wrapping data and its related functionality into a single entity is known as___. </h4>
<br>	
<br>
      <div class="edit2"> 	        	             	
             	 	<input type="radio" name="quizcheck[4]" value="13">
             	 	Abstraction             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[4]" value="14">
             	 	Encapsulation             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[4]" value="15">
             	 	Polymorphism             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[4]" value="16">
             	 	Modularity 
<br><br>				
</div>						
         5. Which concept allows you to reuse the written code? </h4>
<br><br>	
<div class="edit2"> 	 
             	             	
             	 	<input type="radio" name="quizcheck[5]" value="17">
             	 	Encapsulation             	
            <br>	         	
             	 	<input type="radio" name="quizcheck[5]" value="18">
             	 	Abstraction             	
                    <br>	 	
             	 	<input type="radio" name="quizcheck[5]" value="19">
             	 	Inheritance             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[5]" value="20">
             	 	Polymorphism
 <br><br>
</div> 
        6. Which of the following class allows to declare only one object of it? </h4>
<br>	
<br>
             	         <div class="edit2"> 	     	
             	 	<input type="radio" name="quizcheck[6]" value="21">
             	 	Abstract class             	
        <br>	             	
             	 	<input type="radio" name="quizcheck[6]" value="22">
             	 	Virtual class             	
                <br>	     	
             	 	<input type="radio" name="quizcheck[6]" value="23">
             	 	Singleton class             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[6]" value="24">
             	 	Friend class
<br><br>										
</div>
        7. Which of the following is not a type of Constructor? </h4>
<br><br>	
<div class="edit2"> 	 
             	             	
             	 	<input type="radio" name="quizcheck[7]" value="25">
             	 	Friend constructor             	
            <br>	         	
             	 	<input type="radio" name="quizcheck[7]" value="26">
             	 	Copy constructor             	
                    <br>	 	
             	 	<input type="radio" name="quizcheck[7]" value="27">
             	 	Default constructor             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[7]" value="28">
             	 	Paraneterized constructor         
<br><br>					</div>					
        8. What is the other name used for functions inside a class? </h4>
<br>	

             	             	<br>
								<div class="edit2"> 	 
             	 	<input type="radio" name="quizcheck[8]" value="29">
             	 	Member variables             	
        <br>	             	
             	 	<input type="radio" name="quizcheck[8]" value="30">
             	 	Member functions             	
                <br>	     	
             	 	<input type="radio" name="quizcheck[8]" value="31">
             	 	Class functions             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[8]" value="32">
             	 	Class variables     
<br><br>					
</div>
       9. Which of the following cannot be a friend? </h4>
<br>	

             	             	<br>
								<div class="edit2"> 	 
             	 	<input type="radio" name="quizcheck[9]" value="33">
             	 	Function             	
        <br>	             	
             	 	<input type="radio" name="quizcheck[9]" value="34">
             	 	Class             	
                <br>	     	
             	 	<input type="radio" name="quizcheck[9]" value="35">
             	 	Object             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[9]" value="36">
             	 	Operator function 
<br>
<br>					</div>
        10.How many types of polymorphism are there in C++? </h4>
<br>	
<br>
            <div class="edit2"> 	             	
             	 	<input type="radio" name="quizcheck[10]" value="37">
             	 	1             	
        <br>	             	
             	 	<input type="radio" name="quizcheck[10]" value="38">
             	 	2             	
                <br>	     	
             	 	<input type="radio" name="quizcheck[10]" value="39">
             	 	3             	
                     	<br>	
             	 	<input type="radio" name="quizcheck[10]" value="40">
             	 	4 
</div>					
        <br><br>
        <center><input type="submit"  name="submit" value="SUBMIT" class="btn btn-sucess m-auto d-block"></center>
            </form>
    </div>
   </body>
    </html>