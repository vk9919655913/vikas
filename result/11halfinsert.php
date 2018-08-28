<?php
session_start();

if(!isset($_SESSION['uid']) && !isset($_SESSION['pwd']))
{
	header("location: index.php");
}

$exam = $_SESSION['exam'];
$servername="localhost";
$username="root";
 $password="";
$dbname="quiz_oops";

$srno =  $_POST['srno'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
} 
if($exam == 1){
$sql1 = "select sr_no from half_yearly where sr_no = '$srno'";
$run1 = $conn->query($sql1);
	$count = mysqli_num_rows($run1);
if ($count>0){
echo "<center><h1>No. is alreay registered</h1></center>";
exit();
}
}
if($exam == 2){
$sql3 = "select sr_no from annual where sr_no = '$srno'";
$run3 = $conn->query($sql3);
	$count3 = mysqli_num_rows($run3);
if ($count3>0){
echo "<center><h1>No. is alreay registered</h1></center>";
exit();
}
}
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} else {
	if($exam == 1){
  $srno =  $_POST['srno']; 
  $hindi1 =  $_POST['hindi1']; 
 
  
  $english1 =  $_POST['english1']; 
 
  
  $math1 =  $_POST['math1'];
  
   
 
   
  $physics1 =  $_POST['physics1']; 
 
  
  $chemistry1 =  $_POST['chemistry1']; 
  
  $biology1 = $_POST['biology1'];
  
  $sscience1 = $_POST['sscience1'];
  $drawing1 = $_POST['drawing1'];
  
  
 $science = $physics1+$chemistry1+$biology1;
 
 
$total = $hindi1+$english1+$math1+$science+$sscience1+$drawing1;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "INSERT INTO half_yearly( hindi,english,math,physics,chemistry,bio, science, social_science, art, total, sr_no) VALUES ('$hindi1', '$english1','$math1','$physics1','$chemistry1','$biology1','$science','$sscience1','$drawing1','$total','$srno')";
	$run = $conn->query($sql);
	

   
header("location: 11half1.php?data=data insert in half exam successfully");
  
}
	}
if($exam == 2){
		
  $srno =  $_POST['srno']; 
  $hindi1 =  $_POST['hindi1']; 
  $hindi2= $_POST['hindi2'];
  
  $english1 =  $_POST['english1']; 
  $english2 = $_POST['english2'];
  
  $math1 =  $_POST['math1'];
  $math2 = $POST['math2'];
   
 
   
  $physics1 =  $_POST['physics1']; 
  $physics2 =  $_POST['physics2']; 
  
  $chemistry1 =  $_POST['chemistry1']; 
  $chemistry2 = $_POST['chemistry2'];
  
  $hindi = $hindi1+$hindi2;
  $english = $english1+$english2;
  $math = $math1+$math2;

  $physics = $physics1+$physics2;
  $chemistry = $chemistry1+$chemiistry2;
 
$total = $hindi+$englih+$math+$physics+$chemistry;

$sql1 = "select total from half_yearly where sr_no = '$srno'";
	$run1 = $conn->query($sql1);
	$row1 = mysqli_fetch_assoc($run1);
		
	
$grand_total = $row1['total']+$total;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "INSERT INTO annual(hindi1, hindi2, hindi, english1, english2, english, math1, math2, math, physics1, physics2, physics, chemistry1, chemistry2, chemistry, total, sr_no) VALUES ('$hindi1', '$hindi2','$hindi','$english1', '$english2','$english','$math1', '$math2','$math', '$physics1','$physics2','$physics','$chemistry1','$chemistry2','$chemistry','$total','$srno')";
	$run = $conn->query($sql);
	

   
header("location: 11half1.php?data=data insert in annual exam successfully");
  
}
	}
	else{echo "Wrong input"; exit();}
}
?>