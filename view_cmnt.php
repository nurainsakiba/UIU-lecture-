<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Lectures for UIU Student</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

 <header class="header-area">
<!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Email:</span> sakiba256@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                     <a class="nav-brand" href="index.php"><img src="img/core-img/uiu.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
						
                        <div class="classynav">
						
						<ul>
                                <li><a href="index.php">Home</a></li>
                                
								<li><a href="#">Department</a>
                                    <ul class="dropdown">
                                        <li><a href="courses_from_cse.php">CSE</a></li>
                                        <li><a href="#">EEE</a></li>
                                        <li><a href="#">BBA</a></li>
                                        
                                    </ul>
                                </li>
                         

                                <li><a href="about.php">About Us</a></li>
								<li><a href="help.php">Help & FAQ</a></li>
                                <li><a href="contact.php">Contact</a></li>
							   <li><a href="blog.php">Blog</a></li>
							   <li><a href="view_cmnt.php">Comments</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="reg.php" class="btn">Register</a>
                                <a href="logIn.php" class="btn active">Login</a>
                            </div>

                        </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    
	<div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Comment List</a></li>
            </ol>
        </nav>
    </div>
 <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/c-img/cmnt.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Comment List</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Regular Page Area Start ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h4>Lets Study Together</h4>
                        <p> 

<!DOCTYPE html>
<html>
<head>
 <title></title>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #;
   font-family: calibri;
   font-size: 23px;
   text-align: center;
     } 
  th {
   background-color: #E67E22;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table border="1" cellpadding = "2">
 <tr>
  <th>Comments</th>
 
 </tr>
 <?php
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  
  
  
  
  $sql3 = "SELECT * FROM comment order by C_ID DESC";
  $result = $con->query($sql3);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	
	?>
	<tr>
	<td> <?php 
	echo 'Name: ';
	echo $row["C_Name"]; 
	echo '</br>';
	
	echo 'Email: ';
	echo $row["Email_"];
	echo '</br>';
	
	echo 'Comment: ';
	echo $row["Comment"];
	echo '</br>';?></td>
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
						
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Regular Page Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>