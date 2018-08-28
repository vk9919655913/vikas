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


$sr_no = $_REQUEST['q'];


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
    

$run = $conn->query("select * from half_yearly where sr_no='$sr_no'");
$row = mysqli_fetch_assoc($run);

$run1 = $conn->query("select * from annual where sr_no='$sr_no'");
$row1 = mysqli_fetch_assoc($run1);



$thindi = $row['hindi']+$row1['hindi'];
$tenglish = $row['english']+$row1['english'];
$tmath = $row['math']+$row1['math'];
$tbio = $row['bio']+$row1['bio'];
$tphysics = $row['physics']+$row1['physics'];
$tchemistry = $row['chemistry']+$row1['chemistry'];
$tsocial_science = $row['social_science']+$row1['social_science'];
$tscience = $row['science']+$row1['science'];
$tcomputer_gk = $row['computer_gk']+$row1['computer_gk'];
$tsanskrit = $row['sanskrit']+$row1['sanskrit'];
$tart = $row['art']+$row1['art'];


$run2 = $conn->query("select * from student_details where sr_no='$sr_no'");
$row2 = mysqli_fetch_assoc($run2);	

}
?>

<!doctype html>
<html>
<head>

<style>
table{

	 
	 border: 1px solid black;
	border-collapse:collapse;
	
}

 .thh{
		
	
	 border: 1px solid black;
	
	
}
 .tdd {
    border: 1px solid black;
	
	
	
}
.tdwidth{
	width:50px;
	height:40px;
	
}
.center{
text-align:center;

}

</style>

</head>
<body>

<form action="insertpractical.php" method="post">

<input type="text" name="sr_no" value="<?php echo $sr_no; ?>"><br>
<input type="text" name="physics" placeholder="physics"><br>
<input type="text" name="chemistry" placeholder="chemistry"><br>
<input type="text" name="bio" placeholder="biology"><br>
<input type="submit" value="submit">
</form>
</body>
</html>