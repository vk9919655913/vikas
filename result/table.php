<?php
session_start();
if(!isset($_SESSION['uid']) && !isset($_SESSION['pwd']))
{
	header("location: index.php");
}
?>



<!doctype html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse:collapse;
}
</style>
</head>
<body>
<center><table width="80%">
<caption>प्रगति पत्र 2016-2017</caption>
<tr><td colspan="3">Student name</td><td colspan="5"></td><td colspan="2">class</td><td colspan="2"></td><td colspan="2">section</td><td colspan = "2"></td></tr>
<tr><td rowspan="2">विषय</td><td colspan="5">अर्द्धवार्षिक परीक्षा</td><td rowspan="12">वि</td><td colspan="5">वार्षिक परीक्षा</td><td colspan="3">समस्त परीक्षा योग</td><td rowspan="2">उपस्थिति</td></tr>
<tr><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्रथम</td><td>द्वितीय</td><td>तृतीय</td><td>योग</td><td>पूर्णांक</td><td>प्राप्तांक</td><td>ग्रेड</td></tr>
<tr><td>Hindi</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td></td></tr>
<tr><td>English</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td rowspan="2">आचरण</td></tr>
<tr><td>maths</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td></tr>
<tr><td>so science</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td></td></tr>
<tr><td>science</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td rowspan="2">कक्षा में स्थान</td></tr>
<tr><td>computer</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td></tr>
<tr><td>sanskrit</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td></td></tr>
<tr><td>drawing</td><td>100</td><td></td><td></td><td></td><td></td><td>100</td><td></td><td></td><td></td><td></td><td>200</td><td></td><td></td><td>प्रोन्नति/उत्तीर्ण</td></tr>
<tr><td>अतिरिक्त</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>कुल योग</td><td>550</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>प्रयो./ग्रेड</td></tr>
<tr><td colspan = "6"> ह0 कक्षाध्यापक</td><td colspan = "9">ह0 कक्षाध्यापक</td><td></td></tr>
<tr><td colspan = "6">ह0 प्रधानाचार्य</td><td colspan = "9">ह0 प्रधानाचार्य</td><td>परीक्षाफल</td></tr>
<tr><td colspan = "6">ह0 अभिभावक</td><td colspan = "9">ह0 अभिभावक</td><td></td></tr>
</table></center>
</body>
</html>