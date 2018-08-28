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


$sr_no = $_SESSION['srno'];
$classs=$_SESSION['classs']; 
$section=$_SESSION['section'];

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
	
	
}

 th{
		
	
	 border: 1px solid black;
	
	
}
 td {
    border: 1px solid black;
	
	
	border-radius: .3em;
}

</style>
<script>
function myFunction()
{
var str = document.getElementById("mark").value;

 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mark1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "get9data.php?q=" + str, true);
        xmlhttp.send();
}
function hide()
{
document.getElementById("mark").style.display="none";
document.getElementById("mar").style.display="none";

}
function show()
{
document.getElementById("mark").style.display="block";
document.getElementById("mar").style.display="block";

}
</script>
</head>
<body onbeforeprint="hide()" onafterprint="show()">







<?php




$sql22 = "select s_name, sr_no from student_details where classs = '$classs' and section = '$section' order by s_name";
$run22 = $conn->query($sql22);
?>
<h3 style="color:red;"><?php echo @$_GET['data']; ?></h3>
<form method = "post" action = "final.php">
<label class="w3-text-blue" id="mar"><b>Select Student Name:</b></label><br>
<select class="w3-select w3-border" id = "mark" name="srno" onchange="myFunction()">
    <option value="" disabled selected>Choose your option</option><?php
while($row22 = mysqli_fetch_assoc($run22)){
	?><option value = "<?php echo $row22['sr_no']; ?>"><?php
	echo $row22['s_name'];
	?></option><?php
} 
    
?></select><br><br>



<div id="mark1"></div>


</body>
</html>