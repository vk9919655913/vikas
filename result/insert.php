<?php
$servername="localhost";
$username="root";
 $password="";
$dbname="quiz_oops";



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
} 
  

$sr_no = $_POST['sr_no'];
$s_name = $_POST['s_name'];
$dob = $_POST['dob'];
$classs = $_POST['classs'];
$section = $_POST['section'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$address = $_POST['address'];

$sql1 = "select sr_no from student_details where sr_no = '$sr_no'";
$run1 = $conn->query($sql1);
	$count = mysqli_num_rows($run1);
if ($count>0){
echo "<center><h1>This Sr No. is alreay registered</h1></center>";
exit();
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $sql = "INSERT INTO student_details(sr_no, s_name, dob, classs, section, f_name, m_name, address) VALUES ('$sr_no','$s_name','$dob','$classs','$section','$f_name','$m_name','$address')";
	$run = $conn->query($sql);
	
 
}

   
header("location: index2.php?data=$s_name data insert successfully");
  



?>
