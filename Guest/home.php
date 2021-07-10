<?php

session_start();

	include '../include/dbconnect.php';
$_SESSION['goqp']=0;
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  
    <body>
		<header>
			<div >
			<div >
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>
            <li > 
			<a href="home.php" style="color:Red"  > Home </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white">Login </a>&nbsp  &nbsp
			<a href="../Registration.php" style="color:white">Sign Up </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
						<h2 style="color:red;text-align:left; ">You are using Guest account please login to save your progress.</h1>
						

		<div class="center" >
		<a href="gselection.php?gchoice=cs" class="square_btn" >Computer <br> Science  </a> &nbsp  &nbsp
		<a href="gselection.php?gchoice=gk" class="square_btn">General <br> knowledge </a></br> </br>
		<a href="gselection.php?gchoice=mh" class="square_btn"> Modern <br> History  </a>&nbsp  &nbsp
		<a href="gselection.php?gchoice=mp" class="square_btn">Math  & <br> Physics  </a>
		</div>
		</div>

		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	