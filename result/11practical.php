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
} 

$sql = "SELECT s_name, sr_no FROM student_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	?><form action="insertpractical.php" method="post"><?php
    while($row = $result->fetch_assoc()) {
        ?><select><option value="<?php echo $row['sr_no'];  ?>"><?php echo $row['s_name']; ?></option></select><?php
    }
	?><input type="submit" value="Submit"></form><?php
} else {
    echo "0 results";
}
$conn->close();
?>