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
$tsocial_science = $row['social_science']+$row1['social_science'];
$tscience = $row['science']+$row1['science'];
$tcomputer_gk = $row['computer_gk']+$row1['computer_gk'];
$tsanskrit = $row['sanskrit']+$row1['sanskrit'];
$tart = $row['art']+$row1['art'];
$tmoral_science=$row['moral_science']+$row1['moral_science'];


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
<tr><td colspan="16" style="text-align:center;"><b>श्रीमती सुशीला देवी बाल विद्यालय ईश्वरपुर साई</b></td></tr>


<tr><th>Sr. No.</th><td colspan="1"><?php echo $sr_no; ?></td><th colspan="1">Name</th><td colspan="1"><?php echo $row2['s_name']; ?></td><th colspan="2">class</th><td colspan="2"><?php echo $row2['classs']; ?></td><th colspan="2">section</th><td colspan = "2"><?php echo $row2['section']; ?></td><th colspan="2">Date of Birth</th><td colspan="2"><?php echo $row2['dob']; ?></td></tr>



<tr><th colspan="3">Father's Name</th><td colspan = "3"><?php echo $row2['f_name']; ?></td><th colspan="2">Mother's Name</th><td colspan = "2"><?php echo $row2['m_name']; ?></td><th colspan = "3">Address</th><td colspan = "3"><?php echo $row2['address']; ?></td></tr>



<tr><td rowspan="2">विषय</td><td colspan="5" style="text-align:center;">अर्द्धवार्षिक परीक्षा</td><td rowspan="13">वि</td><td colspan="5" style="text-align:center;">वार्षिक परीक्षा</td><td colspan="3" style="text-align:center;">समस्त परीक्षा योग</td><td rowspan="2">उपस्थिति</td></tr>



<tr><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्राप्तांक</td><td>ग्रेड</td></tr>



<tr><td>हिन्दी</td><td>50</td><td><?php echo $row['hindi']; ?></td><td></td><td></td><td><?php echo $row['hindi']; ?></td><td>50</td><td><?php echo $row1['hindi']; ?></td><td></td><td></td><td><?php echo $row1['hindi']; ?></td><td>100</td><td><?php echo $thindi; ?></td><td></td><td></td></tr>



<tr><td>अंग्रेजी</td><td>50</td><td><?php echo $row['english']; ?></td><td></td><td></td><td><?php echo $row['english']; ?></td><td>50</td><td><?php echo $row1['english']; ?></td><td></td><td></td><td><?php echo $row1['english']; ?></td><td>100</td><td><?php echo $tenglish; ?></td><td></td><td rowspan="2">आचरण</td></tr>



<tr><td>गणित</td><td>50</td><td><?php echo $row['math']; ?></td><td></td><td></td><td><?php echo $row['math']; ?></td><td>50</td><td><?php echo $row1['math']; ?></td><td></td><td></td><td><?php echo $row1['math']; ?></td><td>100</td><td><?php echo $tmath; ?></td><td></td></tr>



<tr><td>सा. विज्ञान</td><td>50</td><td><?php echo $row['social_science']; ?></td><td></td><td></td><td><?php echo $row['social_science']; ?></td><td>50</td><td><?php echo $row1['social_science']; ?></td><td></td><td></td><td><?php echo $row1['social_science']; ?></td><td>100</td><td><?php echo $tsocial_science; ?></td><td></td><td>अच्छा</td>
</tr>


<tr><td>विज्ञान</td><td>50</td><td><?php echo $row['science']; ?></td><td></td><td></td><td><?php echo $row['science']; ?></td><td>50</td><td><?php echo $row1['science']; ?></td><td></td><td></td><td><?php echo $row1['science']; ?></td><td>100</td><td><?php echo $tscience; ?></td><td></td><td rowspan="2">कक्षा में स्थान</td></tr>



<tr><td>कम्प्यूटर/जी.के.</td><td>50</td><td><?php echo $row['computer_gk']; ?></td><td></td><td></td><td><?php echo $row['computer_gk']; ?></td><td>50</td><td><?php echo $row1['computer_gk']; ?></td><td></td><td></td><td><?php echo $row1['computer_gk']; ?></td><td>100</td><td><?php echo $tcomputer_gk; ?></td><td></td></tr>



<tr><td>नैतिक शिक्षा</td><td>50</td><td><?php echo $row['moral_science']; ?></td><td></td><td></td><td><?php echo $row['moral_science']; ?></td><td>50</td><td><?php echo $row1['moral_science']; ?></td><td></td><td></td><td><?php echo $row1['moral_science']; ?></td><td>100</td><td><?php echo $tmoral_science; ?></td><td></td><td></td></tr>



<tr><td>संस्कृत</td><td>50</td><td><?php echo $row['sanskrit']; ?></td><td></td><td></td><td><?php echo $row['sanskrit']; ?></td><td>50</td><td><?php echo $row1['sanskrit']; ?></td><td></td><td></td><td><?php echo $row1['sanskrit']; ?></td><td>100</td><td><?php echo $tsanskrit; ?></td><td></td><td></td></tr>



<tr><td>कला</td><td>50</td><td><?php echo $row['art']; ?></td><td></td><td></td><td><?php echo $row['art']; ?></td><td>50</td><td><?php echo $row1['art']; ?></td><td></td><td></td><td><?php echo $row1['art']; ?></td><td>100</td><td><?php echo $tart; ?></td><td></td><td>प्रोन्नति/उत्तीर्ण</td></tr>



<tr><td>अतिरिक्त</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>



<tr><td>कुल योग</td><td>450</td><td></td><td></td><td></td><td><?php echo $row['total']; ?></td><td>450</td><td></td><td></td><td></td><td><?php echo $row1['total']; ?></td><td>900</td><td><?php echo $row1['grand_total']; ?></td><td></td><td>प्रयो./ग्रेड</td></tr>



<tr><td colspan = "6"> ह0 कक्षाध्यापक</td><td colspan = "9">ह0 कक्षाध्यापक</td><td></td></tr>


<tr><td colspan = "6">ह0 प्रधानाचार्य</td><td colspan = "9">ह0 प्रधानाचार्य</td><td>परीक्षाफल</td></tr>


<tr><td colspan = "6">ह0 अभिभावक</td><td colspan = "9">ह0 अभिभावक</td><td>उत्तीर्ण</td></tr>


</table></center>
</body>
</html>