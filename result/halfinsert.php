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
  $hindi =  $_POST['hindi']; 
  $english =  $_POST['english']; 
  $math =  $_POST['math']; 
  $social_science =  $_POST['social_science']; 
  $moral_science = $_POST['moral_science'];
  $science =  $_POST['science']; 
  $computer_gk =  $_POST['computer_gk']; 
  $sanskrit =  $_POST['sanskrit']; 
  $art =  $_POST['art']; 
  
 
$total = $hindi+$english+$math+$social_science+$science+$computer_gk+$moral_science+$sanskrit+ $art;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "INSERT INTO half_yearly(hindi, english, math, social_science, science, computer_gk, moral_science, sanskrit, art, total, sr_no) VALUES ('$hindi','$english','$math','$social_science','$science','$computer_gk', '$moral_science', '$sanskrit','$art','$total','$srno')";
	$run = $conn->query($sql);
	

   
header("location: half1.php?data=data insert successfully");
  
}
	}
if($exam == 2){



		
  $srno =  $_POST['srno']; 
  $hindi =  $_POST['hindi']; 
  $english =  $_POST['english']; 
  $math =  $_POST['math']; 
  $social_science =  $_POST['social_science']; 
  $science =  $_POST['science']; 
  $computer_gk =  $_POST['computer_gk'];
   $moral_science = $_POST['moral_science'];
   $sanskrit =  $_POST['sanskrit']; 
  $art =  $_POST['art']; 
 
$total = $hindi+$english+$math+$social_science+$science+$computer_gk+$moral_science+$sanskrit+ $art;

$sql1 = "select total from half_yearly where sr_no = '$srno'";
	$run1 = $conn->query($sql1);
	$row1 = mysqli_fetch_assoc($run1);
		
	
$grand_total = $row1['total']+$total;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "INSERT INTO annual(hindi, english, math, social_science, science, computer_gk, moral_science, sanskrit, art, total, grand_total, sr_no) VALUES ('$hindi','$english','$math','$social_science','$science','$computer_gk', '$moral_science','$sanskrit','$art','$total','$grand_total','$srno')";
	$run = $conn->query($sql);
	

   
header("location: half1.php?data=data insert successfully");
  
}
	}
	else{echo "Wrong input"; exit();}
}
?>
