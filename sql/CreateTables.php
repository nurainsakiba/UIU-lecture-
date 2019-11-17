<html>

<head>
</head>

<body>

<?php

// Create connection
$con = mysqli_connect('localhost', 'root', '');

// Check connection
if(!$con){
	
	die("Can not connect: " . mysqli_error($con));
}

mysqli_select_db($con, "LECTURES_FOR_UIU_STUDENT");

// sql to create table

$sql1 = "CREATE TABLE User (
User_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
User_name varchar(250),
contact_number bigint,
Email varchar(250),
Password varchar(250),
UNIQUE KEY(Email)
)";

if (mysqli_query($con, $sql1)) {
    echo "Table User created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
//
$sql2= "CREATE TABLE Lectures (
Lecture_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Department varchar(250),
Course_code varchar(250),
Course_title varchar(250),
Download_Link varchar(250),
Provide_by varchar(250),
Faculty varchar(250)
)";

if (mysqli_query($con, $sql2)) {
    echo "Table Lectures created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
//
$sql4 = "CREATE TABLE Message (
M_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
M_Name varchar(250),
M_Email varchar(250),
Message varchar(250)
)";

if (mysqli_query($con, $sql4)) {
    echo "Table Message created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';

$sql5 = "CREATE TABLE Comment (
C_ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
C_Name varchar(250),
Email_ varchar(250),
Comment varchar(250)
)";

if (mysqli_query($con, $sql5)) {
    echo "Table Comment created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);

echo '</br>';
//
$sql3 = "CREATE TABLE admin (
Admin_name varchar(250),
password_ varchar(250)
)";

if (mysqli_query($con, $sql3)) {
    echo "Table Admin created successfully";
	echo '</br>';
} else echo "Error creating table: " . mysqli_error($con);
  
  
mysqli_close($con);

?>


</body>
</html>