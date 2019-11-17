 <?php  
 //insert.php  
 $con = mysqli_connect("localhost", "root", "", "LECTURES_FOR_UIU_STUDENT");  
 
 if(isset($_POST['send_msg']))  
 {  
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $msg = mysqli_real_escape_string($con, $_POST['message']);
	  
      $sql = "INSERT INTO message(M_ID, M_Name, M_Email, Message) VALUES ('', '$name', '$email', '$msg')";  
	  
      if($con->query($sql)){
		  
		  echo "<script type='text/javascript'>alert('Message Send')</script>";
		  
		  
	  }
	    
		header ('location: index.php');
 }  
 ?>