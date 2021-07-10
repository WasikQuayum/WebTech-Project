<?php

session_start();

	include '../include/dbconnect.php';
	
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "admin") ){
	header("Location: ../login.php");
}
	
	$sub=$_GET['sub'];
	$id=$_GET['id'];
	$sql2 = "select * from ".$sub." where id= $id ";
	$result = mysqli_query($conn, $sql2);
	$num=mysqli_num_rows($result);
	if($num!=1){
					echo$sub.$id."<script> alert('Id doesnt Exist'); </script>";
			}
			
	else{
		$_SESSION['sub']=$sub;
		$_SESSION['qid']=$id;
		while($row = mysqli_fetch_assoc($result)){
		$ansid=$row['ansid'];
		}
			if(strlen($ansid)!=1){
				header("Location: mchoicemodify.php");
			}
			else{
				header("Location: smodify.php");
			}
		}
				
	




?>