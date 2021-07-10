<?php
include '../include/dbconnect.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$_SESSION["gqnum"]=$_POST["gqnum"];
	$_SESSION["gqdif"]=$_POST["gqdif"];
	header("Location:gqpage.php");
}
else{
$_SESSION['gchoice'] = $_GET['gchoice'];
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Home page</title>
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
				<h2 style="color:red;text-align:left; "> You are using Guest account please login to save your progress</h1>

		<div class="center" >
		<form action="gselection.php" method="post">
		
		
		<label  id="qsnumber">Question number</label> 
		<select id="" name="gqnum"> 
		<option value="10">10</option>
		<option value="20" >20</option>
		</select>
		
		<label  id="qsdifficulty">Quiz Difficulty</label> 
		<select id="" name="gqdif"> 
		<option value="easy">Easy</option>
		<option value="midium" >Midium</option>
		<option value="hard" >Hard</option>
		</select>
		

        <button type="submit"  name="start" class="button" >Start</button><br>
		
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	