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
    <title>My Profile</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
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
                                
								<li><a href="#">Department</a>
                                    <ul class="dropdown">
                                        <li><a href="Courses.php">CSE</a></li>
                                        <li><a href="#">EEE</a></li>
                                        <li><a href="#">BBA</a></li>
                                        
                                    </ul>
                                </li>
                         

                                
								
                            </ul>

                            <!-- Search Button -->
                           

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a class="btn btn-light action-button" role="button"><?php  echo $_SESSION['username']; ?></a>
								<a href="history.php" class="btn btn-light action-button" role="button" >My Lectures</a>
                                <a href="index.php" class="btn active">LogOut</a>
                            </div>
							 <div class="search-area">
                                <form action="search_profile.php" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit" name="searc"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Department</a></li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory ##### -->
 <div class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/ll.jpg);">  
<div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>My Profile</h2>
                    </div>
                </div>
            </div>
    </div>
 <section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Available Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
               
				
				 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/bg-img/apl.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Advanced Programming Laboratory</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">CSE Department</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>United International University</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="apl.php" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/bg-img/assemb.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Assembly Programming Laboratory</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">CSE Department</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>United International University</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="assemb.php" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>
				 

        <div class="register-login-area">
                  <a class="btn btn-light action-button" role="button">Page Numbers >> </a>            
				  <a href="courses.php" class="btn active">1</a>
				  <a href="page2.php" class="btn active">2</a>
				  <a href="page3.php" class="btn active">3</a>
				  <a href="page4.php" class="btn active">4</a>
				  <a href="page5.php" class="btn active">5</a>
        </div>





  
    <!-- ##### Popular Course Area End ##### -->

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