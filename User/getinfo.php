<?php		

  session_start();

if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="user") ){
	header("Location: ../login.php");
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

if($q=="all"){
$sql="SELECT * FROM qhistory WHERE name = '".$_SESSION['username']."'";
$result = mysqli_query($conn,$sql);
}
else{
	$sql="SELECT * FROM qhistory WHERE name = '".$_SESSION['username']."' and Subject= '".$q."' ";
	$result = mysqli_query($conn,$sql);
}
echo "<table>
<tr>
<th>Subject</th>
<th>Question Number</th>
<th>Correct Answer</th>
<th>Date and time</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td align='center'>" . $row['Subject'] . "</td>";
  echo "<td align='center'>" . $row['number'] . "</td>";
  echo "<td align='center'>" . $row['Correct'] . "</td>";
  echo "<td align='center'>" . $row['Date'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html> 