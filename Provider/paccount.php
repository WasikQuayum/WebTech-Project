<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="provider")  ){
	header("Location: ../login.php");
}
	include '../include/dbconnect.php';
	$name=$_SESSION['username'];
	
	if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
		
		if (isset($_POST['esubmit'])) {
			if(!empty($_POST['em'])){
				$uemail=$_POST['em'];
				$q="UPDATE `login` SET `email`='$uemail' WHERE name='$name'";
				$result=mysqli_query($conn,$q);
			}
        
		}
		elseif (isset($_POST['psubmit'])) {
			if(!empty($_POST['ps'])){
				$upass=$_POST['ps'];
				$uPassToDB = password_hash($upass, PASSWORD_DEFAULT);
				$q="UPDATE `login` SET `pass`='$uPassToDB' WHERE name='$name'";
				$result=mysqli_query($conn,$q);
				header("Location:../login.php");
			}
        
		}
	}

			$q="select * from login where name= '$name'";
			$result=mysqli_query($conn,$q);
			
			while($row = mysqli_fetch_assoc($result)){
				$uemail=$row['email'];
				$upass=$row['pass'];
			}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Account page</title>
    <link rel="stylesheet" href="../css/style.css">
	
	
	<script>
		function showinfo(str) {
		if (str == "") {
		document.getElementById("quiz").innerHTML = "";
		return;
		} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
        document.getElementById("quiz").innerHTML = this.responseText;
			}
			};
			xmlhttp.open("GET","qgetinfo.php?q="+str,true);
			xmlhttp.send();
		}
	}
</script>

  </head>
  
    <body>
	<form action="account.php"method="post">
		<header>
			<div >
			<div >
						
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>		
            <li > 
			<a href="pvhome.php" style="color:White"  > Home </a>&nbsp  &nbsp
			<a href="paccount.php" style="color:Red">Account </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white" >Sign Out  </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] .". Keep up the good work."?></h1>

		<div align="center">
		<label id="1" ><h4>Name : <?php echo $name ?></h4></label><br>
		<label id="2" ><h4>Email : <?php echo $uemail ?></h4></label>
		<input type="email" placeholder="Type new email" name="em"  id="em" value="">
		<input type="submit" name="esubmit" id="esubmit" value="Change Email"><br><br>
		<input type="password" placeholder="Type new password" name="ps"  id="ps" value="">
		<input type="submit" name="psubmit" id="psubmit" value="Change pass"><br><br><br>
			<form>
			<select name="sub" onchange="showinfo(this.value)">
				<option value="">Select a Subject:</option>
			<option value="cs">Computer Science</option>
			<option value="mh">Modern History</option>
			<option value="mp">Math and Physics</option>
			<option value="gk">General Knowledge</option>
			</select>
			</form>
			<br>
			<div id="quiz"><b>All the question u added will be listed here...</b></div>
		</div>
		
		
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
		</form>
	</body>

</html>	