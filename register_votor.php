<?php
   include "./connect.php";
    if(isset($_POST['submit'])){ 
       $error=""; 	   
			$cid=$_POST['vid'];
			$fname=$_POST['fname'];
			$address=$_POST['address'];
			$age=$_POST['age'];
             $user=$_POST['user'];
             $pass=$_POST['password'];
			$result_1='no';

			if($cid && $fname &&$address && $age && $user && $pass ){
			   $sql="insert into votor values(NULL,'".$cid."','".$fname."','".$address."','".$age."','".$result_1."','".$user."','".$pass."')";
			   $result=mysql_query($sql);
			   if($result){
			     $error="votor Registered Successfully"; 
			              }else{
						  echo(mysql_error());
						       }
			   }else{
			    $error="please fill all fields..."; 
			       }
				}
   
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Big Business 2.0 by TEMPLATED</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Adigrat University Student Union Online Election System</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
				<li class="first"><a href="index.php">Home</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="help.php">Help</a></li>

			<li><a href="contact.php">Contact</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="last"><a href="login.php">Login</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
			<div class="box">
				<div id="contact_form">
                
                	    <form method="post" name="contact" action="register_votor.php">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Votor Id:</label> <input type="text" id="author" name="vid" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="author"> Name:</label> <input type="text" id="author" name="fname" class="required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Age:</label> <input type="number" id="email" name="age" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Email:</label> <input type="text" id="email" name="address" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">username:</label> <input type="text" id="email" name="user" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Password:</label> <input type="password" id="email" name="password" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Send" />
                    
                    </form>
                </div>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	
</div>
<div id="footer">
	&copy; Untitled. All rights reserved. Design by  Adigrat University Students.
</div>
</body>
</html>