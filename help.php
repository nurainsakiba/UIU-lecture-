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
                                <form action="search_index.php" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit" name="searc" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="reg.php" class="btn">Register</a>
                                <a href="logIn.php" class="btn active">Login</a>
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
                <li class="breadcrumb-item active" aria-current="page">Help &amp; FAQ</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url(img/blog-img/sei.jpg);">
        <div class="blog-details-headline">
            <h3>Help & FAQ</h3>
           
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
					     <p>We are here to help UIU students through lectures. Students who can't attend some classes because of some issues, they can get lectures without doing classes through our website. We provide note papers slides, lectures of senior students who have great capability to provide us good lectures. If you need some specific subject lectures,slides or anything just let us know, we will try our best to help you. Thank you.</p>
                        <h5 class="text-center py-4">You can send us your lectures in our email address. If anyone has any problem and needs any help just post a comment below.</h5>
                        <!-- Tags -->
                        
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post A Comment -->
                <div class="col-12 col-lg-6">
                    <div class="post-a-comments mb-70">
                        <h4>Post a Comment</h4>

                        <form action="comment.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="name" placeholder="Name" required="" >
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required="" ></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100" type="submit" name="post_cmnt" >Post A Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    <!-- ##### Blog Details Content ##### -->

    <!-- ##### Footer Area Start ##### -->

    
    <!-- ##### Footer Area End ##### - ##### Footer Area End ##### -->

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