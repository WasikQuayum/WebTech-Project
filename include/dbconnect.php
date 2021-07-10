<?php

	$dbname="info";
	$pass="";
	$uname="root";
	$host="localhost";
	
	$conn=mysqli_connect($host,$uname,$pass)or die('Database connection error');
	mysqli_select_db($conn,$dbname);
	
	
?>