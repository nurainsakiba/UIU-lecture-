<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');


if (isset($_POST['insert'])) {
  
  $dept = mysqli_real_escape_string($con, $_POST['dept']);
  $course_code = mysqli_real_escape_string($con, $_POST['course_code']);
  $course_title = mysqli_real_escape_string($con, $_POST['course_title']);
  $download_link = mysqli_real_escape_string($con, $_POST['download_link']);
  $provide_by = mysqli_real_escape_string($con, $_POST['provide_by']);
  $faculty = mysqli_real_escape_string($con, $_POST['faculty']);

  //$user_check_query = "SELECT * FROM item WHERE Name='$itemname'";
 // $result = mysqli_query($con, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
  
  //if ($user) { // if user exists
    //if ($user['Name'] == $itemname) {
    //  array_push($errors, "Username already exists");
    //}
 // }

			  
	$query	= "insert into lectures(Lecture_ID, Department, Course_code, Course_title, Download_Link, Provide_by, Faculty) 
values('', '$dept', '$course_code', '$course_title', '$download_link', '$provide_by', '$faculty')";
				
  	mysqli_query($con, $query);
	
  	
  header ('location: lecture_list.php');
  
}

?>