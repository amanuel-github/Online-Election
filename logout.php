<?php
session_start();
 if(isset($_SESSION['username'])){
   unset($_SESSION['username']);
	
	        header("location:login.php");
	       
 }else  die("0OPS...........");
     
?>