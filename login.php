<?php

session_start();
session_unset();

	include 'include/dbconnect.php';

?>


<?php
			
			if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
				
			if ( (!empty($_POST['h_name']))      and         (!empty($_POST['h_pass']))    )
			{
				$name=mysqli_real_escape_string($conn, $_POST['h_name']);
				$pass=$_POST['h_pass'];
				
				
				
					$q="select * from login where name= '$name' ";
					$result=mysqli_query($conn,$q);
					
					$num=mysqli_num_rows($result);
					
					
					
					if($num != 1)
					{
						echo "<script>
								alert('User doesnt exist');
							</script>";
					}
					else{
						while($row = mysqli_fetch_assoc($result)){
							$uPassInDB = $row['pass'];
							$usertype=$row['userType'];
							$_SESSION['username'] =$row['name'];
							$_SESSION['userid'] = $row['id'];
						}
						if(password_verify($pass, $uPassInDB)){
							if($usertype=='user'){
								$_SESSION['usertype']="user";
								
								header("Location: User/userhome.php");
							}
							else{
								if($usertype=='admin'){
									$_SESSION['usertype']="admin";
									header("Location: Admin/Adminhome.php");
									
								}
								else{
									$_SESSION['usertype']="provider";
									
									header("Location: Provider/pvhome.php");
								}
							}
						}
						else{
							echo "<script>
								alert('Password does not match');
							   </script>";
						}
				
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
	<link rel="stylesheet" href="css/style.css"></link>

	<title>Login</title>
	
	<script>
	function home(){
		window.location.href='home.php';
	}
	</script>
	
</head>

<body  id="b">

	<header>
			<div >
			<div >
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>
            <li > 
			<a href="Guest/home.php" style="color:white"  > Home </a>&nbsp  &nbsp
			<a href="login.php" style="color:red">Login </a>&nbsp  &nbsp
			<a href="Registration.php" style="color:white">Sign Up </a></li>
			</div>
		</header>
		
		
		<br><br><br><br><br><br><br>
		<div id="da">
	
		<form action="login.php"method="post">
		
		<center>
		<img src="image/reg.png" class="img">
		</center>
			
				
					<label id ="f">User Name: </label><br>
					<input type="text" name="h_name" id ="f" placeholder="Etner your name" required><br>
				
					<label id ="f">Password: </label><br>
					<input type="password" name="h_pass" id ="f" placeholder="Etner password"   required><br>
				
				
				
					<input type="submit" name="login" value="Login" id="btn">
				
				
				
					<input type="button" name="back" value="Back" id="btn1" onclick="home()">
				
				
		
				
		
		</form>
		
		
		
		</div>
		<br><br><br><br><br><br>
	    <footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>


</body>

</html>