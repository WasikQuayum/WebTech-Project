<?php

session_start();

	include '../include/dbconnect.php';
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "admin") ){
	header("Location: ../login.php");
}
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
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Question page</h1>
			</div>
            <li > 
			<a href="Adminhome.php" style="color:Red"  > Home </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white">Sign Out </a></li>
			</div>
		</header>
		
<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] ?></h1>

		<div align="center" >
		
		<a href="addadmin.php"  class="a">Add  Admin  </a> &nbsp  &nbsp
		<a href="uinfo.php" class="a" >User  Info </a></br> </br>
		<a href="qinfo.php"  class="a"> Question  Info  </a>&nbsp  &nbsp
		
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	