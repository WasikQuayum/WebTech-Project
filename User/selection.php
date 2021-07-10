<?php
include '../include/dbconnect.php';
session_start();
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="user") ){
	header("Location:  ../login.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$_SESSION["qnum"]=$_POST["qnum"];
	$_SESSION["qdif"]=$_POST["qdif"];
	header("Location: qpage.php");
}
else{
$_SESSION['choice'] = $_GET['choice'];
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
			<a href="userhome.php" style="color:Red"  > Home </a>&nbsp  &nbsp
			<a href="account.php" style="color:white">Account </a>&nbsp  &nbsp
			<a href=" ../login.php" style="color:white" >Sign Out  </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] ?></h1>

		<div class="center" >
		<form action="selection.php" method="post">
		
		
		<label  id="qsnumber">Question number</label> 
		<select id="" name="qnum"> 
		<option value="10">10</option>
		<option value="20" >20</option>
		</select>
		
		<label  id="qsdifficulty">Quiz Difficulty</label> 
		<select id="" name="qdif"> 
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