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
} ?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>SDLV</TITLE>
		<link rel="stylesheet" href="w3.css">
	</HEAD>
	
	<body>
		<table class="w3-table-all w3-hoverable">
		<caption>Class 9th A</caption>
		<tr>
			<th>Sr.No</th><th>Name</th><th>Date Of Birth</th><th>Father's Name</th><th>Mother's Name</th><th>Address</th><th>Hindi</th><th>English</th><th>Maths</th><th>Science</th><th>So. Science</th><th>Art</th><th>Total</th>
		</tr>
		<?php
		$i = 1;
		$sql = "SELECT student_details.s_name,student_details.dob,student_details.f_name,student_details.m_name,student_details.address, half_yearly.hindi, half_yearly.english, half_yearly.math, half_yearly.science, half_yearly.social_science, half_yearly.art, half_yearly.total
FROM half_yearly
LEFT JOIN student_details ON student_details.sr_no = half_yearly.sr_no
WHERE student_details.classs =9
AND student_details.section =  'A'";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $i; ?></td><td><?php echo $row['s_name']; ?></td><td><?php echo $row['dob']; ?></td><td><?php echo $row['f_name']; ?></td><td><?php echo $row['m_name']; ?></td><td><?php echo $row['address']; ?></td><td><?php echo $row['hindi']; ?></td><td><?php echo $row['english']; ?></td><td><?php echo $row['math']; ?></td><td><?php echo $row['science']; ?></td><td><?php echo $row['social_science']; ?></td><td><?php echo $row['art']; ?></td><td><?php echo $row['total']; ?></td>
		</tr>	
		
<?php $i++; } ?>
		</table>
	</body>	
</html>	




