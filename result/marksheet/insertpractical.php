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

$physics = $_POST['physics'];
$chemistry = $_POST['chemistry'];
$bio = $_POST['bio'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
} 
if($exam == 1){
$sql1 = "select * from half_yearly where sr_no = '$srno'";
$run1 = $conn->query($sql1);
$row = mysqli_fetch_assoc($run1);
$ph = $row['p_practical'];
$ch = $row['c_practical'];
$bi = $row['b_practical'];
$totalphysics = $row['physics1']+$row['physics2']+$physics;
$totalchemistry = $row['chemistry1']+$row['chemistry2']+$chemistry;
if($row['bio']==0){$bio=0;}
$totalbio = $row['bio1']+$row['bio2']+$bio;
$total = $row['hindi']+$row['english']+$row['math']+$totalphysics+$totalchemistry+$totalbio;	
if ($row['p_practical']<10){
$sql = "UPDATE half_yearly SET p_practical = '$physics', c_practical= '$chemistry', b_practical='$bio', physics='$totalphysics', chemistry='$totalchemistry', bio='$totalbio', total='$total'
WHERE sr_no= '$srno';";
	$run = $conn->query($sql);
	

   
header("location: ../half.php?data=data insert successfully");
}
else{echo "NO. Already registered";}
}
/*
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
   $sanskrit =  $_POST['sanskrit']; 
  $art =  $_POST['art']; 
 
$total = $hindi+$english+$math+$social_science+$science+$computer_gk+$moral_science+$sanskrit+ $art;

$sql1 = "select total from half_yearly where sr_no = '$srno'";
	$run1 = $conn->query($sql1);
	$row1 = mysqli_fetch_assoc($run1);
		
	
$grand_total = $row1['total']+$total;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "INSERT INTO annual(hindi, english, math, social_science, science, computer_gk, sanskrit, art, total, grand_total, sr_no) VALUES ('$hindi','$english','$math','$social_science','$science','$computer_gk','$sanskrit','$art','$total','$grand_total','$srno')";
	$run = $conn->query($sql);
	

   
header("location: half1.php?data=data insert successfully");
  
}
	}
	else{echo "Wrong input"; exit();}
}
?>

