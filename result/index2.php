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

<form class="w3-container" action="insert.php" method = "post">
  <h2 class="w3-text-blue">Input Data</h2>
  <h3 style="color:red;"><?php echo @$_GET['data']; ?></h3>
 
  <p>      
        
  <label class="w3-text-blue"><b>Class</b></label>
  <select class="w3-select w3-border" name="classs">
  <option value="" selected disabled autofocus required>Select Class</option>
  <option value = "1">1</option>
  <option value = "2">2</option>
  <option value = "3">3</option>
  <option value = "4">4</option>
  <option value = "5">5</option>
  <option value = "6">6</option>
  <option value = "7">7</option>
  <option value = "8">8</option>
  <option value = "9">9</option>
  <option value = "10">10</option>
  <option value = "11">11</option>
  <option value = "12">12</option>
  
  </select>
  </p> 
   <p>      
  <label class="w3-text-blue"><b>Section</b></label>
  <select class="w3-select w3-border" name="section">
  <option value="" selected disabled autofocus required>Select Section</option>
  <option value = "A1">A1</option>
  <option value = "A2">A2</option>
  <option value = "A">A</option>
  <option value = "B">B</option>
  <option value = "C">C</option>
  <option value = "D">D</option>
  <option value = "E">E</option>
  
  
  </select>
  </p> 
 
 
 
 
 
 
  <p>      
  <label class="w3-text-blue"><b>S. R. NO:</b></label>
  <input class="w3-input w3-border" name="sr_no" type="text" required></p>
  
   
  
<p>      
  <label class="w3-text-blue"><b>Student Name:</b></label>
  <input class="w3-input w3-border" name="s_name" type="text" required></p>
  
  <p>  
  <label class="w3-text-blue"><b>Date Of Birth</b></label>
  <input class="w3-input w3-border" name="dob" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Father's Name</b></label>
  <input class="w3-input w3-border" name="f_name" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Mother's Name</b></label>
  <input class="w3-input w3-border" name="m_name" type="text" required></p>
  


 
 
      
    
  
    <p>      
  <label class="w3-text-blue"><b>Address</b></label>
  <input class="w3-input w3-border" name="address" type="text" required></p>
  <p> 
  <button class="w3-btn w3-blue">Insert Data</button></p>
</form>


</div>
<div style="text-align:center; max-width:900px; min-width:400px; max-height:30px;" class="w3-container w3-teal">
  &copy; 1997-<?php echo date("Y");?> SDLV All Rights Reserved
</div>

</body>
</html>