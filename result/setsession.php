<?php 

session_start();
if(!isset($_SESSION['uid']) && !isset($_SESSION['pwd']))
{
	header("location: index.php");
}

$_SESSION['classs'] = $_POST['classs'];
$_SESSION['section'] = $_POST['section'];
$_SESSION['exam'] = $_POST['exam'];
header("location: half.php");
?>