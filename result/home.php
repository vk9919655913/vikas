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
<title>SDLV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
<style>
h5,h2{
	padding:10px;
}
</style>
</head>
<body>
<div style="max-width:900px; min-width:450px; margin:auto; border:2px solid black;">
<header class="w3-container w3-teal">
  <h1 style="text-align:center;">Welcome to SDLV Inter College</h1>
</header>


<div class="w3-container">

  <div class="w3-bar w3-green" style="max-width:896px;">
  <a href="index2.php" class="w3-bar-item w3-button">Insert Student Details</a>
  <a href="selectclass.php" class="w3-bar-item w3-button">Insert Student Marks</a>
  <a href="selectmarksheet.php" class="w3-bar-item w3-button">Print Marks Sheet</a>
 
 
</div>
  
 
    </div>
     
<div style="max-height:500px; min-height:500px; max-width:900px; min-width:400px; margin:auto; border:2px solid black; overflow:auto;">

<center><h1>Welcome To SDLV Inter College</h1></center>


</div>
<div style="text-align:center; max-width:900px; min-width:400px; max-height:30px;" class="w3-container w3-teal">
  &copy; 1997-<?php echo date("Y");?> SDLV All Rights Reserved
</div>

</body>
</html>