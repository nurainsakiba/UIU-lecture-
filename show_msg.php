<!DOCTYPE html>
<html>
<head>
 <title>Message LIST</title>

</head>
<body>
 <table border="10" cellpadding = "15">
 <tr>
  <th>Message_ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Message</th>
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM message";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    //echo "<tr><td>" . $row["Name"]. "</td><td>" .$row["price"]. "</td></tr>";
	
	?>
	<tr>
	<td> <?php echo $row["M_ID"];?></td>
	<td> <?php echo $row["M_Name"];?></td>
	<td> <?php echo $row["M_Email"];?></td>
	<td> <?php echo $row["Message"];?></td>
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