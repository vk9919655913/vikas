<?php 
session_start();

$_SESSION['uid'] = $_POST['uid'];
$_SESSION['pwd'] = $_POST['pwd'];
if($_SESSION['uid']=="sdlv" && $_SESSION['pwd']==3232222222){
	
	header('location:home.php');
}
else{
	echo "Invalid User Name or Password";
	session_destroy();
	
}
?>