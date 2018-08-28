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

<center><table width="100%">
<caption style="font-size:20px;"><b>परीक्षा प्रगति - पत्र - 2017 - 18</b></caption>
	
	<tr>
		<td class="tdwidth center">क्रम सं0</td><td class="tdwidth"><?php echo $row2['sr_no']; ?></td><td colspan="11" class="tdwidth center"style="font-size:20px;"><b>श्री दर्शन लाल वर्मा स्मारक इण्टर कॉलेज ईश्वरपुर साई मल्लावाँ हरदोई</b></td><td colspan="2" class="tdwidth center">छात्र पंजी सं0</td><td class="tdwidth center"></td>
	</tr>
	<tr>
		<td class="tdwidth center">कक्षा</td><td class="tdwidth"><?php echo $row2['classs']; ?></td><td colspan="12" class="tdwidth"></td><td class="tdwidth center">वर्ग</td><td  class="tdwidth center"><?php echo $row2['section']; ?></td>
	</tr>
	<tr>
		<td class="tdwidth center">छात्र / छात्रा का नाम:</td><td class="tdwidth center" colspan="4"><?php echo $row2['s_name']; ?></td><td class="tdwidth center" colspan="2">पिता का नाम:</td><td class="tdwidth center" colspan="3"><?php echo $row2['f_name']; ?></td><td class="tdwidth center" colspan="2">माता का नाम:</td><td class="tdwidth center" colspan="3"><?php echo $row2['m_name']; ?></td><td  class="tdwidth center" colspan="3"></td>
	</tr>
	
	<tr>
		<td rowspan="3" class= "tdd center" style="width:150px;"><b>विषय</b></td><td colspan="5" class="center tdwidth tdd"><b>अर्द्धवार्षिक परीक्षा</b></td><td class="tdwidth tdd"></td><td colspan="5" class="tdwidth tdd center"><b>वार्षिक परीक्षा</b></td><td class="tdwidth tdd"></td><td colspan="2" class="tdwidth center tdd"><b>कुल योग</b></td><td class="tdwidth center tdd" rowspan="3"><b>परीक्षाफल</b></td>
	</tr>
	<tr>
		<td rowspan="2" class="tdwidth center tdd">पूर्णांक</td><td class="tdwidth tdd center"colspan="4">प्राप्तांक</td><td class="tdwidth tdd"></td><td rowspan="2" class="tdwidth center tdd">पूर्णांक</td><td class="tdwidth tdd center"colspan="4">प्राप्तांक</td><td class="tdwidth tdd"></td><td rowspan="2" class="tdwidth center tdd">पूर्णांक</td><td class="tdwidth center tdd"rowspan="2">प्राप्तांक</td>
	</tr>
	<tr>
		<td class="tdwidth center tdd">प्रथम</td><td class="tdwidth center tdd">द्वितीय</td><td class="tdwidth center tdd">प्रयो.</td><td class="tdwidth center tdd">योग</td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">प्रथम</td><td class="tdwidth center tdd">द्वितीय</td><td class="tdwidth center tdd">प्रयो.</td><td class="tdwidth 
center tdd">योग</td><td class="tdwidth center tdd"></td>
	</tr>
	<tr>
		<td class=" tdd">हिन्दी</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['hindi1']; ?></td><td class="tdwidth center tdd"><?php echo $row['hindi2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row['hindi']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['hindi1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['hindi2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row1['hindi']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">200</td><td class="tdwidth center tdd"><?php echo $thindi; ?></td><td class="tdwidth center tdd">अर्द्धवार्षिक परीक्षाफल</td>
	</tr>
	<tr>
		<td class=" tdd">अंग्रेजी</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['english1']; ?></td><td class="tdwidth center tdd"><?php echo $row['english2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row['english']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['english1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['english2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row1['english']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth 
 center tdd">200</td><td class="tdwidth center tdd"><?php echo $tenglish; ?></td><td class="tdwidth center center tdd"></td>
	</tr>
	<?php if($tmath!=0){ ?>
	<tr>
		<td class=" tdd">गणित</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['math1']; ?></td><td class="tdwidth center tdd"><?php echo $row['math2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row['math']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['math1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['math2']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd"><?php echo $row1['math']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">200</td><td class="tdwidth center tdd"><?php echo $tmath; ?></td><td class="tdwidth center center tdd">वार्षिक परीक्षाफल</td>
	</tr>
	<?php } ?>
	<tr>
		<td class=" tdd">भौतिक विज्ञान</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['physics1']; ?></td><td class="tdwidth 
 center tdd"><?php echo $row['physics2']; ?></td><td class="tdwidth center tdd"><?php echo $row['p_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row['physics']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['physics1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['physics2']; ?></td><td class="tdwidth center tdd"><?php echo $row1['p_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row1['physics']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">200</td><td class="tdwidth center tdd"><?php echo $tphysics; ?></td><td class="tdwidth center center tdd"></td>
	</tr>
	<tr>
		<td class=" tdd">रसायन विज्ञान</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['chemistry1']; ?></td><td class="tdwidth 
 center tdd"><?php echo $row['chemistry2']; ?></td><td class="tdwidth center tdd"><?php echo $row['c_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row['chemistry']; ?></td><td class="tdwidth 
 center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['chemistry1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['chemistry2']; ?></td><td class="tdwidth center tdd"><?php echo $row1['c_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row1['chemistry']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">200</td><td class="tdwidth center tdd"><?php echo $tchemistry; ?></td><td class="tdwidth center tdd"></td>
	</tr>
	<?php if($tbio!=0){ ?>
	<tr id = "bio">
		<td class=" tdd">जीव विज्ञान</td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row['bio1']; ?></td><td class="tdwidth center tdd"><?php echo $row['bio2']; ?></td><td class="tdwidth center tdd"><?php echo $row['b_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row['bio']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">100</td><td class="tdwidth center tdd"><?php echo $row1['bio1']; ?></td><td class="tdwidth center tdd"><?php echo $row1['bio2']; ?></td><td class="tdwidth center tdd"><?php echo $row1['b_practical']; ?></td><td class="tdwidth center tdd"><?php echo $row1['bio']; ?></td><td class="tdwidth center tdd"></td><td class="tdwidth center tdd">200</td><td class="tdwidth center tdd"><?php echo $tbio; ?></td><td class="tdwidth center center tdd">वार्षिक परीक्षाफल</td>
	</tr>
	<?php } ?>
	<tr>
		<td class=" tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td>
	</tr>
	<tr>
		<td class="tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth center tdd">कार्य आचरण</td>
	</tr><tr>
		<td class="tdd">योग</td><td class="tdwidth tdd">500</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"><?php echo $row['total']; ?></td><td class="tdwidth tdd"></td><td class="tdwidth tdd">500</td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"></td><td class="tdwidth tdd"><?php echo $row1['total']; ?></td><td class="tdwidth tdd"></td><td class="tdwidth tdd">1000</td><td class="tdwidth tdd"><?php echo $row1['grand_total']; ?></td><td class="tdwidth tdd"></td>
	</tr>
	<tr>
		<td colspan="2" >ह0 कक्षाध्यापक</td><td colspan="2" class="tdwidth"></td><td class="tdwidth" colspan="2">ह0 प्रधानाचार्य</td><td class="tdwidth" colspan="2"></td><td class="tdwidth" colspan="2">जाँचकर्ता के ह0</td><td class="tdwidth" colspan="2"></td><td class="tdwidth" colspan="2"> ह0 अभिभावक</td><td class="tdwidth" colspan="2" style="border-right:1px solid black"></td>
	</tr>
</table></center>




</body>
</html>