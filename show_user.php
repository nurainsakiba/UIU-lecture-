<!DOCTYPE html>
<html>
<head>
 <title>User LIST</title>

</head>
<body>
 <table border="10" cellpadding = "15">
 <tr>
  <th>User_ID</th>
  <th>User_name</th>
  <th>Contact_number</th>
  <th>Email</th>
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT User_ID, User_name, contact_number, Email FROM user";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    //echo "<tr><td>" . $row["Name"]. "</td><td>" .$row["price"]. "</td></tr>";
	
	?>
	<tr>
	<td> <?php echo $row["User_ID"];?></td>
	<td> <?php echo $row["User_name"];?></td>
	<td> <?php echo $row["contact_number"];?></td>
	<td> <?php echo $row["Email"];?></td>
	<tr>
	<?php
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>