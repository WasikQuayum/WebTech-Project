<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="provider") ){
	header("Location: ../login.php");
}
$user=$_SESSION['username'];
	include '../include/dbconnect.php';
$q="";
 if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
		if (  (isset($_POST['op'])) and (!empty($_POST['opt1']))        and        (!empty($_POST['opt2']))    and         (!empty($_POST['opt3'])) and (!empty($_POST['opt4'])) and (!empty($_POST['qs']))  and ($_POST['sub']!="") and ($_POST['dif']!="")  )
		{$q="";
		    $opt1=mysqli_real_escape_string($conn, $_POST['opt1']);
			$opt2=mysqli_real_escape_string($conn, $_POST['opt2']);
			$opt3=mysqli_real_escape_string($conn, $_POST['opt3']);
			$opt4=mysqli_real_escape_string($conn, $_POST['opt4']);
			$qs=mysqli_real_escape_string($conn, $_POST['qs']);
			$dif=mysqli_real_escape_string($conn, $_POST['dif']);
			$ansid=mysqli_real_escape_string($conn, $_POST['op']);
			$ans=mysqli_real_escape_string($conn, $_POST['opt'.$_POST['op']]);
			$sub=mysqli_real_escape_string($conn, $_POST['sub']);
			
			
			
			$sql="INSERT INTO ".$sub." ( `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `ansid`, `dif`, `addby`) VALUES ( '$qs' ,'$opt1' ,'$opt2','$opt3','$opt4','$ans','$ansid','$dif','$user') ";
			mysqli_query($conn,$sql);
			
			echo "<script>
								alert('Thnx For Your Contribution');
							</script>";
			
		
		}
		else{
			$q=" *a value may be not set , please check again (check select option carefully)";
		}
 }




?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Single option Quiz add page</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  
    <body>
		<header>
			<div >
			<div >
						
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>		
            <li > 
			<a href="pvhome.php" style="color:white"  > Home </a>&nbsp  &nbsp
			<a href="paccount.php" style="color:white">Account </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white" >Sign Out  </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] .". We Are Greatful for your service"?></h1>

		<div align="center"  style="font-size: 150%">
		<form action="soption.php" method="post">
		        <label>Type your qusetion and select your answer</label><br>
				<input type="text" name="qs" id="qs" value="" Placeholder="Type the question" size="40"  required>
				
				<select name="sub" id="sub">
				<option value="">Select a Subject:</option>
				<option value="cs">Computer Science</option>
				<option value="mh">Modern History</option>
				<option value="mp">Math and Physics</option>
				<option value="gk">General Knowledge</option>
				</select>
				
				<select name="dif" id="dif">
				<option value="">Select Difficulty</option>
				<option value="0">Easy</option>
				<option value="1">Hard</option>
				</select><br>
			
			
			
				
				<input type="radio" id="op" name="op" value="1" required>  <input type="text" name="opt1" id="opt1" value="" Placeholder="Type option 1" size="40" required><br>
				<input type="radio" id="op" name="op" value="2">  <input type="text" name="opt2" id="opt2" value="" Placeholder="Type option 2" size="40" required><br>
				<input type="radio" id="op" name="op" value="3">  <input type="text" name="opt3" id="opt3" value="" Placeholder="Type option 3" size="40"  required><br>
				<input type="radio" id="op" name="op" value="4">  <input type="text" name="opt4" id="opt4" value="" Placeholder="Type option 4" size="40"  required><br><br>
				
				<label style="color:red"><?php echo $q?></label><br>
				
				<button type="submit" name=""  class="green">Submit</button>
			
			</form>
		
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	