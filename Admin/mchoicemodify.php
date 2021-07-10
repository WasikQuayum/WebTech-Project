<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="admin") ){
	header("Location: ../login.php");
}
$user=$_SESSION['username'];
	include '../include/dbconnect.php';
$q="";
	$sql2 = "select * from ".$_SESSION['sub']." where id= ".$_SESSION['qid']."";
	$result = mysqli_query($conn, $sql2);
	
	$ko="<table>
			<tr>
			<th>Id</th>
			<th>Question</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Option 4</th>
			<th>Answer</th>
			<th>Difficulty</th>
			<th>Add by</th>
			</tr>";
			while($row = mysqli_fetch_assoc($result)){
				$ko=$ko. "<tr><td>" . $row['id'] . "</td><td>" . $row['ques'] . "</td><td>" . $row['opt1'] . 
				"</td><td>" . $row['opt2'] . "</td><td>" . $row['opt3'] . "</td><td>" . $row['opt4'] .
				"</td><td>" . $row['ans'] . "</td><td>" . $row['dif'] . "</td><td>" . $row['addby'] . "</td></tr>";
			}
			$ko=$ko. "</table>";
			
			
 if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
		if ( (isset($_POST['op']))  and (!empty($_POST['opt1']))        and        (!empty($_POST['opt2']))    and         (!empty($_POST['opt3'])) and (!empty($_POST['opt4'])) and (!empty($_POST['qs']))  and ($_POST['dif']!="")  )
		{$q="";
		  
			$ansid = "";
			$name = $_POST['op'];
			foreach ($name as $op){
			$ansid=$ansid.$op;
			}
			if(strlen($ansid)<=1){
				$q="U must choose atleast 2 option otherwise go to single option menu. ";
			}
			else{
			 $opt1=mysqli_real_escape_string($conn, $_POST['opt1']);
			$opt2=mysqli_real_escape_string($conn, $_POST['opt2']);
			$opt3=mysqli_real_escape_string($conn, $_POST['opt3']);
			$opt4=mysqli_real_escape_string($conn, $_POST['opt4']);
			$qs=mysqli_real_escape_string($conn, $_POST['qs']);
			$dif=mysqli_real_escape_string($conn, $_POST['dif']);
			$sub=mysqli_real_escape_string($conn, $_POST['sub']);
			$ans="";
			
			for($i=0;$i<strlen($ansid);$i++)
			{
				$ans=$ans.",".$_POST['opt'.$ansid[$i]];
				
			}
			$ans=trim($ans,",");
			
			
			
			$sql="UPDATE `".$_SESSION['sub']."` SET `ques`='$qs',`opt1`='$opt1',`opt2`='$opt2',`opt3`='$opt3',`opt4`='$opt4',`ans`='$ans',`ansid`='$ansid',`dif`='$dif' WHERE id='".$_SESSION['qid']."'";
			mysqli_query($conn,$sql);
			
			echo "<script>
								alert('Question modified');
							</script>";
			header("Location: mchoicemodify.php");
			}
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
	
	<style>
	table {
		width: 100%;
		border-collapse: collapse;
		
	  }

		table, td, th {
		border: 1px solid black;
			padding: 5px;
		}

			th {text-align: left;}
			</style>
  </head>
  
    <body>
		<header>
			<div >
			<div >
						
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Quiz Page</h1>
			</div>		
            <li > 
			<a href="Adminhome.php" style="color:white"  > Home </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white" >Sign Out  </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] ?></h1>

		<div align="center"  style="font-size: 150%">
		<label><?php echo $ko ?></label>
		<form action="mchoicemodify.php" method="post">
		        <label>Type your qusetion and select your answer (multiple)</label><br>
				<input type="text" name="qs" id="qs" value="" Placeholder="Type the question" size="40" required>
				
				
				<select name="dif" id="dif">
				<option value="">Select Difficulty</option>
				<option value="0">Easy</option>
				<option value="1">Hard</option>
				</select>
				<br>
			
			
			
				
				<input type="checkbox" id="1" name="op[]" value="1">  <input type="text" name="opt1" id="opt1" value="" Placeholder="Type option 1" size="40" required><br>
				<input type="checkbox" id="2" name="op[]" value="2">  <input type="text" name="opt2" id="opt2" value="" Placeholder="Type option 2" size="40" required><br>
				<input type="checkbox" id="3" name="op[]" value="3">  <input type="text" name="opt3" id="opt3" value="" Placeholder="Type option 3" size="40" required><br>
				<input type="checkbox" id="4" name="op[]" value="4">  <input type="text" name="opt4" id="opt4" value="" Placeholder="Type option 4" size="40" required><br><br>
				
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