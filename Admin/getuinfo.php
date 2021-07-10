<?php

include '../include/dbconnect.php';

if(isset($_POST['limitVal'])){
	$lv = $_POST['limitVal'];
	$commentsQuery = "select * from login limit $lv";
	$resultComments = mysqli_query($conn, $commentsQuery);
}
else if(isset($_POST['searchVal'])) {
	$sv = $_POST['searchVal'];
	$commentsQuery = "select * from login where name like '%$sv%'";
	$resultComments = mysqli_query($conn, $commentsQuery);
}
else if(isset($_POST['startingVal'])){
	$stv = $_POST['startingVal'];
	$commentsQuery = "select * from login limit $stv, 5";
	$resultComments = mysqli_query($conn, $commentsQuery);
}

echo "<table>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>User type</th>
			</tr>";
			while($row = mysqli_fetch_assoc($resultComments)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['userType'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

?>