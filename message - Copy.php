 <?php  
 //insert.php  
 $con = mysqli_connect("localhost", "root", "", "LECTURES_FOR_UIU_STUDENT");  
 
 if(isset($_POST['post_cmnt']))  
 {  
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $cmnt = mysqli_real_escape_string($con, $_POST['message']);
	  
      $sql = "INSERT INTO comment(C_ID, C_Name, Email_, Comment) VALUES ('', '$name', '$email', '$cmnt')";  
	  
      if($con->query($sql)){
		  
		  echo "<script type='text/javascript'>alert('Comment Posted')</script>";
		  
		  
	  }
	    
		header ('location: help.php');
 }  
 ?>