<?php
session_start();

$_SESSION['goqp']=1;
include '../include/dbconnect.php';

$r=$_SESSION["gqnum"]-$_SESSION['gscore'];

?>


<html>

	<head>
	<title>Result page</title>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div align="center">
		<h1 style="color:red">**Login To save ur data so you can see your progress anytime**<h1>
		<h2>Your Score is <?php echo $_SESSION['gscore']; ?> out of  <?php echo $_SESSION['gqnum']; ?> </h2>
	
		<img src="<?php if($r<5){echo '../image/gd.gif'; } else{ echo '../image/no.gif'; } ?>" alt="<?php if($r>5){echo 'Good job'; } else{ echo 'Study hard'; } ?>">
		
		<br> <br>
		
		<a href="home.php" style="color:Red"  > Go back to Home page </a>
        <br><br>
		<button name="b" onclick="op();" class="green">See Answer</button>
		
		
		
		
		
		</div>
		<div>
		<label name="all" id="all"> </label>
		</div>
		
		<script>
		function op(){
			var wrong = JSON.parse(localStorage.getItem('gwrong'));
			var wrongans = JSON.parse(localStorage.getItem('gwrongans'));
			var x="";
			for(var i=0;i<wrong.length;i++){
				x=x+"Question : "+wrong[i] +"<br>"+"Ans:  " +wrongans[i]+"<br> <br>";
			}	
			document.getElementById("all").innerHTML= x;
		}
		</script>
	</body>
<html>