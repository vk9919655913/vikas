<?php 

session_start();
if(!isset($_SESSION['uid']) && !isset($_SESSION['pwd']))
{
	header("location: index.php");
}


$classs = $_SESSION['classs'];
$section = $_SESSION['section'];
$exam = $_SESSION['exam'];

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
} else {
    



$sql = "select s_name, sr_no from student_details  where classs = '$classs' and section = '$section' order by s_name";
$run = $conn->query($sql);
?>
<h3 style="color:red;"><?php echo @$_GET['data']; ?></h3>
<form method = "post" action = "halfinsert.php">
<label class="w3-text-blue"><b>Select Student Name:</b></label><br>
<select class="w3-select w3-border" name="srno" required>
    <option value="" disabled selected>Choose your option</option><?php
while($row = mysqli_fetch_assoc($run)){
	?><option value = "<?php echo $row['sr_no']; ?>"><?php
	echo $row['s_name'];
	?></option><?php
} 
    
?></select>


 <?php if($classs == 1 || $classs==2){ ?>
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
     


<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p>
  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Moral Science:</b></label>
  <input class="w3-input w3-border" name="moral_science" type="text" required></p>
  
  
  <p>      
  <label class="w3-text-blue"><b>Sanskrit:</b></label>
  <input class="w3-input w3-border" name="sanskrit" type="text" required></p>
  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>
  <?php } ?>  
  
  
  
  <?php if($classs == 3 || $classs==4 ){ ?>
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
  
  
  
   <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p> 
     


<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  

  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Moral Science:</b></label>
  <input class="w3-input w3-border" name="moral_science" type="text" required></p>
  
  
 
  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>
  <?php } ?>      
  
  
  
  <?php if($classs ==5){ ?>
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
 
 
 
   <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p>    


<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  

  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Moral Science:</b></label>
  <input class="w3-input w3-border" name="moral_science" type="text" required></p>
  

  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>
  
  
    
  <p>      
  <label class="w3-text-blue"><b>Sanskrit:</b></label>
  <input class="w3-input w3-border" name="sanskrit" type="text" required></p>
  
  
  <?php } ?>    
 




<?php if($classs == 6 || $classs==7 || $classs==8){ ?>
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
     


  <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  

  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  
  
  
  <p>      
  <label class="w3-text-blue"><b>Sanskrit:</b></label>
  <input class="w3-input w3-border" name="sanskrit" type="text" required></p>
  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>
  <?php } ?>    
  
  
  
  
  <?php if($classs ==11){ ?>
  
  <p>      
  <label class="w3-text-blue"><b>Physics:</b></label>
  <input class="w3-input w3-border" name="physics" type="text" placeholder="Physics" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Chemistry:</b></label>
  <input class="w3-input w3-border" name="chemistry" type="text" placeholder="chemistry" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Bio:</b></label>
  <input class="w3-input w3-border" name="bio" type="text" placeholder="bio" required></p>
  
  
  <!--
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
     


<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p>
  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Moral Science:</b></label>
  <input class="w3-input w3-border" name="moral_science" type="text" required></p>
  
  
  <p>      
  <label class="w3-text-blue"><b>Sanskrit:</b></label>
  <input class="w3-input w3-border" name="sanskrit" type="text" required></p>
  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>-->
  <?php } ?>    
  
  
  
  <?php if(false){ ?>
<p>      
  <label class="w3-text-blue"><b>Hindi:</b></label>
  <input class="w3-input w3-border" name="hindi" type="text"  required></p>
     
<p>      
  <label class="w3-text-blue"><b>English:</b></label>
  <input class="w3-input w3-border" name="english" type="text" required></p>

<p>      
  <label class="w3-text-blue"><b>Maths:</b></label>
  <input class="w3-input w3-border" name="math" type="text"  required></p>
     


<p>      
  <label class="w3-text-blue"><b>Social Science:</b></label>
  <input class="w3-input w3-border" name="social_science" type="text"  required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Science:</b></label>
  <input class="w3-input w3-border" name="science" type="text" required></p>
  
       
<p>      
  <label class="w3-text-blue"><b>Computer/GK:</b></label>
  <input class="w3-input w3-border" name="computer_gk" type="text" required></p>
  
  <p>      
  <label class="w3-text-blue"><b>Moral Science:</b></label>
  <input class="w3-input w3-border" name="moral_science" type="text" required></p>
  
  
  <p>      
  <label class="w3-text-blue"><b>Sanskrit:</b></label>
  <input class="w3-input w3-border" name="sanskrit" type="text" required></p>
  
   <p>      
  <label class="w3-text-blue"><b>Art:</b></label>
  <input class="w3-input w3-border" name="art" type="text" required></p>
  <?php } ?>    
  
  
  
  
  
  

<button class="w3-btn w3-blue">Submit</button></form>
<?php	
  
}

?>

</div>
<div style="text-align:center; max-width:900px; min-width:400px; max-height:30px;" class="w3-container w3-teal">
  &copy; 1997-<?php echo date("Y");?> SDLV All Rights Reserved
</div>

</body>
</html>



