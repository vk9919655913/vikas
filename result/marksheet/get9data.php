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


<center><table width="80%">
<caption>प्रगति पत्र 2016-2017</caption>
	<tr>
		<td class="tdwidth center" colspan="6"style="font-family:Gabriola; font-size:30px;"><b>SDLV INTER COLLEGE</b></td>
	</tr>
	<tr>
		<td class="tdwidth center">प्रवेशांक</td><td class="tdwidth center"><?php echo $row2['sr_no']; ?></td><td class="tdwidth center" colspan="3"style="font-size:20px; padding-right:112px;"><b>गृह परीक्षा प्रगति - पत्र - 2017 - 18<br>(सतत् मूल्यांकन)</b></td><td class="tdwidth"></td>
	</tr>
	<tr>
		<td class="tdwidth center">कक्षा</td><td class="tdwidth center"><?php echo $row2['classs']; ?></td><td class="tdwidth center">वर्ग</td><td class="tdwidth center"><?php echo $row2['section'];
 ?></td><td class="tdwidth center">अनुक्रमांक</td><td class="tdwidth center"></td>
	</tr>
	<tr>
		<td class="tdwidth center">छात्र / छात्रा का नाम:</td><td class="tdwidth center "><?php echo $row2['s_name']; ?></td><td class="tdwidth  center">पिता का नाम:</td><td class="tdwidth  center"><?php echo $row2['f_name']; ?></td><td class="tdwidth  center">माता का नाम:</td><td class="tdwidth  center"><?php echo $row2['m_name']; ?></td>
	</tr>
	
	<tr>
		<td class="tdwidth tdd center"><b>विषय</b></td><td class="tdwidth center tdd">प्राप्तांक <br>सत्रीय परीक्षा <br>30</td><td class="tdwidth center tdd">प्राप्तांक <br>वार्षिक परीक्षा <br>70</td><td class="tdwidth center tdd">सम्पूर्ण योग<br> 100</td><td class="tdwidth center tdd">ग्रेड</td><td class="tdwidth center tdd"><b>अभियुक्ति</b></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">हिन्दी</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth center"><b>परीक्षाफल</b></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">अंग्रेजी</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth"rowspan="2"></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">प्रा0 गणित / गणित</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">विज्ञान</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth center"><b>उत्तीर्ण / प्रोन्नति / अनुत्तीर्ण /<br>कम्पार्टमेन्ट</b></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">सामाजिक विज्ञान</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth"rowspan="2"></td>
	</tr>
	<tr>
		<td class="tdwidth tdd">खेलकूद एवं नैतिक शिक्षा</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td>
	</tr>
	<tr>
		<td class="tdwidth ">ह0 जाँचकर्ता</td><td class="tdwidth "></td><td class="tdwidth">ह0 कक्षाध्यापक</td><td class="tdwidth "></td><td class="tdwidth ">ह0 प्रधानाचार्य</td><td class="tdwidth " style="border-top:1px solid black;"></td>
	</tr>
</table></center>






</body>
</html>