<?php

session_start();

	include '../include/dbconnect.php';
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "admin") ){
	header("Location: ../login.php");
}
?>


<?php
			
			if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
				
			if ( (!empty($_POST['h_name']))        and        (!empty($_POST['h_email']))    and         (!empty($_POST['h_pass'])) and (!empty($_POST['hc_pass'])) and (!empty($_POST['h_utype']))   )
			{
				
				$name=mysqli_real_escape_string($conn, $_POST['h_name']);
				$email=mysqli_real_escape_string($conn, $_POST['h_email']);
				$pass=$_POST['h_pass'];
				$uPassToDB = password_hash($pass, PASSWORD_DEFAULT);
				$cpass=$_POST['hc_pass'];
				$uType=mysqli_real_escape_string($conn, $_POST['h_utype']);
				
				if($pass==$cpass)
				{
					$q="select * from login where name= '$name' || email = '$email' ";
					$result=mysqli_query($conn,$q);
					
					$num=mysqli_num_rows($result);
					
					if($num == 1)
					{
						echo "<script>
								alert('Data alreary exist');
							</script>";
					}else{
						$qy="insert into login(name,pass,email,userType) values ('$name','$uPassToDB','$email','$uType')";
						mysqli_query($conn,$qy);
						
						echo "<script>
								alert('Registered');
								window.location.href='addadmin.php';
							</script>";
					}
				}
				else{
					echo "<script>
								alert('Password and confirm password are not matched');
								window.location.href='addadmin.php';
							</script>";
				}
				
			}
			
			else{
				echo "<script>
								alert('One of the field is empty');
							</script>";
				
			}
			}
			
		?>


<html>
<head>
	<link rel="stylesheet" href="../css/style.css"></link>

	<title>Registation</title>
	
	<script>
	function home(){
		window.location.href='Adminhome.php';
	}
	</script>
	
</head>
<body id="b">



			<header>
			<div >
			<div >
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>
            <li > 
			<a href="Adminhome.php" style="color:white"  > Home </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white">Sign Out </a>&nbsp  &nbsp
			</div>
		</header>
		<br><br>
	<div id="d">
	
		<form action="addadmin.php"method="post">
		
		<center>
		<img src="../image/reg.png" class="img">
		</center>
			
				
					<label id ="f">User Name: </label><br>
					<input type="text" name="h_name" id ="f" placeholder="Etner your name" required><br>
				
					<label  id ="f">Email: </label><br>
					<input type="email" name="h_email" id ="f" placeholder="Etner your email id" required><br>
				
				
					<label id ="f">Password: </label><br>
					<input type="password" name="h_pass" id ="f" placeholder="Etner password"   required><br>
				
				
					<label  id ="f">Confirm Password: </label><br>
					<input type="password" name="hc_pass" id ="f" placeholder="Confirm password"   required><br>
					
					<label  id ="f">User Type: </label><br>
					
					
					<select id="f" name="h_utype"> 
					<option value="admin" >Admin</option>
					</select>
				
				
				
					<input type="submit" name="register" value="Register" id="btn">
				
				
				
					<input type="button" name="back" value="Back" id="btn1" onclick="home()">
				
				
		
				
		
		</form>
		
		
		
	</div>
	<br><br>
	    <footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
		
		

</body>
</html>
	