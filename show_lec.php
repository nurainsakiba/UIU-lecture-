<!DOCTYPE html>
<html>
<head>
 <title>Lecture LIST</title>

</head>
<body>
 <table border="10" cellpadding = "15">
 <tr>
  <th>Lecture_ID</th>
  <th>Dept. </th>
  <th>Course_code</th>
  <th>Course_title</th>
  <th>Download_Link</th> 
  <th>Provide_by</th> 
  <th>Faculty</th>
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM lectures";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    //echo "<tr><td>" . $row["Name"]. "</td><td>" .$row["price"]. "</td></tr>";
	
	?>
	<tr>
	<td> <?php echo $row["Lecture_ID"];?></td>
	<td> <?php echo $row["Department"];?></td>
	<td> <?php echo $row["Course_code"];?></td>
	<td> <?php echo $row["Course_title"];?></td>
	<td> <!DOCTYPE html>
<html>
<head></head>
<body> <a href="<?php echo $row["Download_Link"];?>" > <FONT COLOR="BLUE" size="5">Download </FONT> </a> </body>
</html></td>
	
	<td> <?php echo $row["Provide_by"];?></td>
	<td> <?php echo $row["Faculty"];?></td>
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