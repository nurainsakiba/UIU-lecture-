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

// Drop database
$sql_ = "Drop DATABASE LECTURES_FOR_UIU_STUDENT";
if (mysqli_query($con, $sql_)) {
    echo "Database droped successfully";
} else echo "Error creating database: " . mysqli_error($con);


mysqli_close($con);

?>


</body>
</html>