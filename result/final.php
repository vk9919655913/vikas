<?php
session_start();
if(!isset($_SESSION['uid']) && !isset($_SESSION['pwd']))
{
	header("location: index.php");
}
$servername="localhost";
$username="root";
 $password="";
$dbname="quiz_oops";

$sr_no = $_POST['srno'];
$_SESSION['srno']=$sr_no;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
} 



if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} else {

if($_SESSION['classs']==1 || $_SESSION['classs']==2){header("location: marksheet/1to2.php");}
elseif($_SESSION['classs']==3 || $_SESSION['classs']==4){header("location: marksheet/3to4.php");}
elseif($_SESSION['classs']==5){header("location: marksheet/5.php");}
elseif($_SESSION['classs']==6 || $_SESSION['classs']==7 || $_SESSION['classs']==8){header("location: marksheet/6to8.php");}
elseif($_SESSION['classs']==9){header("location: marksheet/9.php");}
elseif($_SESSION['classs']==11){header("location: marksheet/11.php");}
else{echo "something wrong!";}    


}
?>


