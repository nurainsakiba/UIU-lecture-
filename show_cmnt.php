<!DOCTYPE html>
<html>
<head>
 <title>Comment LIST</title>

</head>
<body>
 <table border="10" cellpadding = "15">
 <tr>
  <th>Comment_ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Comment</th>
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM comment";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    //echo "<tr><td>" . $row["Name"]. "</td><td>" .$row["price"]. "</td></tr>";
	
	?>
	<tr>
	<td> <?php echo $row["C_ID"];?></td>
	<td> <?php echo $row["C_Name"];?></td>
	<td> <?php echo $row["Email_"];?></td>
	<td> <?php echo $row["Comment"];?></td>
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