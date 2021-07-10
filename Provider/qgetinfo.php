<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="provider")  ){
	header("Location:../login.php");
}
include '../include/dbconnect.php';

?>


<!DOCTYPE html>
<html>
<head>
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

<?php
$q = $_GET['q'];


	$sql="SELECT * FROM ".$q." WHERE addby = '".$_SESSION['username']."'";
	$result = mysqli_query($conn,$sql);
	
echo "<table>
<tr>
<th>Question</th>
<th>Option 1</th>
<th>Option 2</th>
<th>Option 3</th>
<th>Option 4</th>
<th>Answer</th>
<th>Difficulty</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	if($row['dif']==1 ){
		$dif="hard";
	}
	else{
		$dif="easy";
	}
  echo "<tr>";
  echo "<td>" . $row['ques'] . "</td>";
  echo "<td>" . $row['opt1'] . "</td>";
  echo "<td>" . $row['opt2'] . "</td>";
  echo "<td>" . $row['opt3'] . "</td>";
  echo "<td>" . $row['opt4'] . "</td>";
  echo "<td>" . $row['ans'] . "</td>";
  echo "<td>" . $dif . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html> 