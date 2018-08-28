<?php
session_start();
if(isset($_SESSION['uid']) && isset($_SESSION['pwd']))
{
	header("location: home.php");
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
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

</style>
</head>
<body>
<div style="max-width:900px; min-width:450px; margin:auto; border:2px solid black;">
<header class="w3-container w3-teal">
  <h1 style="text-align:center;">Welcome to SDLV Inter College</h1>
</header>



<!--<div class="w3-bar w3-green">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
 

  
  
  <div class="w3-dropdown-hover">
    <button class="w3-button">Online Test</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="sdlv/home.php" class="w3-bar-item w3-button">G.K.</a>
      
      </div>
  </div>
  
  <div class="w3-dropdown-hover">
    <button class="w3-button">class 4</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="/class 4/science/index.php" class="w3-bar-item w3-button">Science</a>
      <a href="#" class="w3-bar-item w3-button">Social Science</a>
     </div>
  </div>
 <div class="w3-dropdown-hover">
    <button class="w3-button">class 6</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="/sdlv/class 6/science/index.php" class="w3-bar-item w3-button">Science</a>
      <a href="/class 6/social science/index.php" class="w3-bar-item w3-button">Social Science</a>
     </div>
  </div>
  
  <div class="w3-dropdown-hover">
    <button class="w3-button">class 7</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="/class 7/science/index.php" class="w3-bar-item w3-button">Science</a>
      <a href="#" class="w3-bar-item w3-button">Social Science</a>
      
    </div>  
    </div>
     
     
     <div class="w3-dropdown-hover">
    <button class="w3-button">class 8</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="/class 8/science/index.php" class="w3-bar-item w3-button">Science</a>
      <a href="#" class="w3-bar-item w3-button">Social Science</a>
      
    </div>  
    </div>
    
    
     <div class="w3-dropdown-hover">
    <button class="w3-button">class 9</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="/class 9/maths/index.php" class="w3-bar-item w3-button">Maths</a>
      <a href="#" class="w3-bar-item w3-button">Physics</a>
      <a href="#" class="w3-bar-item w3-button">Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Biology</a>
      
    </div>  
    </div>
    
    
     <div class="w3-dropdown-hover">
    <button class="w3-button">class 10</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="/sdlv/class 10/maths/index.php" class="w3-bar-item w3-button">Maths</a>
      <a href="#" class="w3-bar-item w3-button">Physics</a>
      <a href="#" class="w3-bar-item w3-button">Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Biology</a>
      
    </div>  
    </div>
    
    
    
     <div class="w3-dropdown-hover">
    <button class="w3-button">class 11</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="#" class="w3-bar-item w3-button">Physics</a>
      <a href="#" class="w3-bar-item w3-button">Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Biology</a>
      
    </div>  
    </div>
    
    
     <div class="w3-dropdown-hover">
    <button class="w3-button">class 12</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Hindi</a>
      <a href="#" class="w3-bar-item w3-button">English</a>
      <a href="#" class="w3-bar-item w3-button">Maths</a>
      <a href="#" class="w3-bar-item w3-button">Physics</a>
      <a href="#" class="w3-bar-item w3-button">Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Biology</a>
      
    </div>
    </div>
    </div>-->
     
<div style=" max-width:900px; min-width:400px; margin:auto;  overflow:auto;">

<div class="w3-quarter  w3-container">
  
</div>
<div class="w3-half  w3-container">
 



<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit">Login</button>
  
</form>
</div>
<div class="w3-quarter  w3-container">
 
</div>



</div>
</div>
<div style="text-align:center; max-width:900px; min-width:400px; max-height:30px;" class="w3-container w3-teal">
  &copy; 1997-<?php echo date("Y");?> SDLV All Rights Reserved
</div>

</body>
</html>