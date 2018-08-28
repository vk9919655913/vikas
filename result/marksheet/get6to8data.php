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



if (!$conn->set_charset("utf8")) 
{
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} 
else 
{
		$run111 = $conn->query("select * from annual where sr_no='$sr_no'");
		$row111 = mysqli_fetch_assoc($run111);
		$grand = $row111['grand_total'];
 if($grand<1200)
 {
		
	$h_hindi = rand(70,90);
	$h_english = rand(35,45);
	$h_math = rand(70,90);
	$h_social_science = rand(70,90);
	$h_science = rand(30,45);
	$h_computer = rand(35,45);
	$h_sanskrit = rand(30,40);
	$h_drawing = rand(40,48);
	$h_total = $h_hindi+$h_english+$h_math+$h_social_science+$h_science+$h_computer+$h_sanskrit+$h_drawing;
	
	$run51 = $conn->query("update half_yearly set hindi='$h_hindi', english='$h_english',math='$h_math',social_science='$h_social_science',science='$h_science',computer_gk='$h_computer',sanskrit='$h_sanskrit',art='$h_drawing',total='$h_total' where sr_no='$sr_no'");
	@$row51 = mysqli_fetch_assoc($run51);


	$a_hindi = rand(70,90);
	$a_english = rand(35,45);
	$a_math = rand(70,90);
	$a_social_science = rand(70,90);
	$a_science = rand(30,45);
	$a_computer = rand(35,45);
	$a_sanskrit = rand(30,40);
	$a_drawing = rand(40,48);
	$a_total = $a_hindi+$a_english+$a_math+$a_social_science+$a_science+$a_computer+$a_sanskrit+$a_drawing;
	$grand_total = $h_total+$a_total;
	
	$run52 = $conn->query("update annual set hindi='$a_hindi', english='$a_english',math='$a_math',social_science='$a_social_science',science='$a_science',computer_gk='$a_computer',sanskrit='$a_sanskrit',art='$a_drawing',total='$a_total',grand_total='$grand_total' where sr_no='$sr_no'");
	@$row52 = mysqli_fetch_assoc($run52);

 }
    
	


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

</head>
<body>









<center><table width="100%">
<caption><b>प्रगति पत्र 2017-2018</b></caption>
<tr><td colspan="16" style="text-align:center;"><b>श्री दर्शन लाल वर्मा स्मारक इण्टर कॉलेज ईश्वरपुर साई मल्लावाँ हरदोई </b></td></tr>
<tr><th>Sr. No.</th><td colspan="1"><?php echo $sr_no; ?></td><th colspan="1">Name</th><td colspan="1"><?php echo $row2['s_name']; ?></td><th colspan="2">Class</th><td colspan="2"><?php echo $row2['classs']; ?></td><th colspan="2">Section</th><td colspan = "2"><?php echo $row2['section']; ?></td><th colspan="2">Date of Birth</th><td colspan="2"><?php echo $row2['dob']; ?></td></tr>
<tr><th colspan="3">Father's Name</th><td colspan = "3"><?php echo $row2['f_name']; ?></td><th colspan="2">Mother's Name</th><td colspan = "2"><?php echo $row2['m_name']; ?></td><th colspan = "3">Address</th><td colspan = "3"><?php echo $row2['address']; ?></td></tr>
<tr><td rowspan="2">विषय</td><td colspan="5" style="text-align:center;">अर्द्धवार्षिक परीक्षा</td><td rowspan="12">वि</td><td colspan="5" style="text-align:center;">वार्षिक परीक्षा</td><td colspan="3" style="text-align:center;">समस्त परीक्षा योग</td><td rowspan="2">उपस्थिति</td></tr>
<tr><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्राप्तांक</td><td>ग्रेड</td></tr>
<tr><td>हिन्दी</td><td>100</td><td><?php echo $row['hindi']; ?></td><td></td><td></td><td><?php echo $row['hindi']; ?></td><td>100</td><td><?php echo $row1['hindi']; ?></td><td></td><td></td><td><?php echo $row1['hindi']; ?></td><td>200</td><td><?php echo $thindi; ?></td><td></td><td></td></tr>
<tr><td>अंग्रेजी</td><td>50</td><td><?php echo $row['english']; ?></td><td></td><td></td><td><?php echo $row['english']; ?></td><td>50</td><td><?php echo $row1['english']; ?></td><td></td><td></td><td><?php echo $row1['english']; ?></td><td>100</td><td><?php echo $tenglish; ?></td><td></td><td rowspan="2">आचरण</td></tr>
<tr><td>गणित</td><td>100</td><td><?php echo $row['math']; ?></td><td></td><td></td><td><?php echo $row['math']; ?></td><td>100</td><td><?php echo $row1['math']; ?></td><td></td><td></td><td><?php echo $row1['math']; ?></td><td>200</td><td><?php echo $tmath; ?></td><td></td></tr>
<tr><td>सा. विज्ञान</td><td>100</td><td><?php echo $row['social_science']; ?></td><td></td><td></td><td><?php echo $row['social_science']; ?></td><td>100</td><td><?php echo $row1['social_science']; ?></td><td></td><td></td><td><?php echo $row1['social_science']; ?></td><td>200</td><td><?php echo $tsocial_science; ?></td><td></td><td>अच्छा</td></tr>
<tr><td>विज्ञान</td><td>50</td><td><?php echo $row['science']; ?></td><td></td><td></td><td><?php echo $row['science']; ?></td><td>50</td><td><?php echo $row1['science']; ?></td><td></td><td></td><td><?php echo $row1['science']; ?></td><td>100</td><td><?php echo $tscience; ?></td><td></td><td rowspan="2">कक्षा में स्थान</td></tr>
<tr><td>कम्प्यूटर/जी.के.</td><td>50</td><td><?php echo $row['computer_gk']; ?></td><td></td><td></td><td><?php echo $row['computer_gk']; ?></td><td>50</td><td><?php echo $row1['computer_gk']; ?></td><td></td><td></td><td><?php echo $row1['computer_gk']; ?></td><td>100</td><td><?php echo $tcomputer_gk; ?></td><td></td></tr>
<tr><td>संस्कृत</td><td>50</td><td><?php echo $row['sanskrit']; ?></td><td></td><td></td><td><?php echo $row['sanskrit']; ?></td><td>50</td><td><?php echo $row1['sanskrit']; ?></td><td></td><td></td><td><?php echo $row1['sanskrit']; ?></td><td>100</td><td><?php echo $tsanskrit; ?></td><td></td><td></td></tr>
<tr><td>कला</td><td>50</td><td><?php echo $row['art']; ?></td><td></td><td></td><td><?php echo $row['art']; ?></td><td>50</td><td><?php echo $row1['art']; ?></td><td></td><td></td><td><?php echo $row1['art']; ?></td><td>100</td><td><?php echo $tart; ?></td><td></td><td>प्रोन्नति/उत्तीर्ण</td></tr>
<tr><td>अतिरिक्त</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>कुल योग</td><td>550</td><td></td><td></td><td></td><td><?php echo $row['total']; ?></td><td>550</td><td></td><td></td><td></td><td><?php echo $row1['total']; ?></td><td>1100</td><td><?php echo $row1['grand_total']; ?></td><td></td><td>प्रयो./ग्रेड</td></tr>
<tr><td colspan = "6"> ह0 कक्षाध्यापक</td><td colspan = "9">ह0 कक्षाध्यापक</td><td></td></tr>
<tr><td colspan = "6">ह0 प्रधानाचार्य</td><td colspan = "9">ह0 प्रधानाचार्य</td><td>परीक्षाफल</td></tr>
<tr><td colspan = "6">ह0 अभिभावक</td><td colspan = "9">ह0 अभिभावक</td><td></td></tr>
</table></center>
</body>
</html>