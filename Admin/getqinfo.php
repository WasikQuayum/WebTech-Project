<?php

include '../include/dbconnect.php';

if( (isset($_POST['limitVal']))  and  (isset($_POST['sub'])) ){
	$lv = $_POST['limitVal'];
	$sub=$_POST['sub'];
	$sql = "select * from ".$sub."  limit $lv";
	$result = mysqli_query($conn, $sql);
}
else if( (isset($_POST['searchVal'])) and (isset($_POST['sub'])) ) {
	$sv = $_POST['searchVal'];
	$sub=$_POST['sub'];
	$sql = "select * from ".$sub."  where addby like '%$sv%'";
	$result = mysqli_query($conn, $sql);
}
else if( (isset($_POST['startingVal']))   and (isset($_POST['sub'])) and (isset($_POST['limit']))  ){
	$stv = $_POST['startingVal'];
	$sub=$_POST['sub'];
	$lv = $_POST['limit'];
	$sql2 = "select * from ".$sub." limit $stv,$lv ";
	$result = mysqli_query($conn, $sql2);
}
else if( (isset($_POST['id']))   and (isset($_POST['sub'])) ){
$sub=$_POST['sub'];
$id = $_POST['id'];
$sql2 = "select * from ".$sub." where id= $id ";
	$result = mysqli_query($conn, $sql2);
	$num=mysqli_num_rows($result);
	if($num!=1){
					echo"<script> alert('Id doesnt Exist'); </script>";
				}
	else{
		$sqli = "delete from ".$sub." where id= $id ";
		 mysqli_query($conn, $sqli);
		echo "<script> alert('Id  $id from $sub deleted'); </script>";
	}			
}

echo"<table>
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
			</tr>"
			;
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['ques'] . "</td>";
				echo "<td>" . $row['opt1'] . "</td>";
				echo "<td>" . $row['opt2'] . "</td>";
				echo "<td>" . $row['opt3'] . "</td>";
				echo "<td>" . $row['opt4'] . "</td>";
				echo "<td>" . $row['ans'] . "</td>";
				echo "<td>" . $row['dif'] . "</td>";
				echo "<td>" . $row['addby'] . "</td>";
				echo "</tr>";
			}
			echo "</table>"

?>