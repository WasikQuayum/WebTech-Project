<?php
session_start();

$_SESSION['gscore']=$_GET['gscore'];
header("Location: gsresult.php");
?>
