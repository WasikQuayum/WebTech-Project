<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "user") ){
	header("Location:  ../login.php");
}
$_SESSION['oqp']=0;
	include '../include/dbconnect.php';
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
		
		<a href="selection.php?choice=cs" class="square_btn" >Computer <br> Science  </a> &nbsp  &nbsp
		<a href="selection.php?choice=gk" class="square_btn">General <br> knowledge </a></br> </br>
		<a href="selection.php?choice=mh" class="square_btn"> Modern <br> History  </a>&nbsp  &nbsp
		<a href="selection.php?choice=mp" class="square_btn">Math  & <br> Physics  </a>
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	