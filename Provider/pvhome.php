<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "provider")  ){
	header("Location: ../login.php");
}
	include '../include/dbconnect.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Provider Home page</title>
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
			<a href="paccount.php" style="color:white">Account </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white" >Sign Out  </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] .". We Are Greatful for your service"?></h1>

		<div class="center" >
		<label style="color:Blue"><h2>To add a question click on Question type <h2></label>
		
		<a href="soption.php" class="square_btn" >Single <br> Option  </a> &nbsp  &nbsp
		<a href="mchoice.php" class="square_btn">Multiple <br> Choice </a></br> </br>
		
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	