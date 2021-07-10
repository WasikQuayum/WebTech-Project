<?php
session_start();
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="user") ){
	header("Location:  ../login.php");
}
$_SESSION['oqp']=1;
include '../include/dbconnect.php';

$r=$_SESSION["qnum"]-$_SESSION['score'];

$sql = "INSERT INTO `qhistory`(`Name`, `Subject`, `number`, `Correct`, `Date`) VALUES ( '".$_SESSION['username']."','".$_SESSION['choice']."','".$_SESSION["qnum"]."','".$_SESSION["score"]."','". date("Y-m-d h:i:sa")."');";
  mysqli_query($conn, $sql);
?>


<html>

	<head>
	<title>Result page</title>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div align="center">
		<h2>Your Score is <?php echo $_SESSION['score']; ?> out of  <?php echo $_SESSION['qnum']; ?> </h2>
	
		<img src="<?php if($r<5){echo '../image/gd.gif'; } else{ echo '../image/no.gif'; } ?>" alt="<?php if($r>5){echo 'Good job'; } else{ echo 'Study hard'; } ?>">
		
		<br> <br>
		
		<a href="userhome.php" style="color:Red"  > Go back to Home page </a>
        <br><br>
		<button name="b" onclick="op();" class="green">See Answer</button>
		
		
		
		
		
		</div>
		<div>
		<label name="all" id="all"> </label>
		</div>
		
		<script>
		function op(){
			var wrong = JSON.parse(localStorage.getItem('wrong'));
			var wrongans = JSON.parse(localStorage.getItem('wrongans'));
			var x="";
			for(var i=0;i<wrong.length;i++){
				x=x+"Question : "+wrong[i] +"<br>"+"Ans:  " +wrongans[i]+"<br> <br>";
			}	
			document.getElementById("all").innerHTML= x;
		}
		</script>
	</body>
<html>