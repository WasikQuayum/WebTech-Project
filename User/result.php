<?php
session_start();
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype']!="user") ){
	header("Location:  ../login.php");
}
$_SESSION['score']=$_GET['score'];
header("Location: sresult.php");
?>

