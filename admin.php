<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Admin</title>

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
                                
                                
								<li><a href="#">Lectures</a>
                                    <ul class="dropdown">
                                        <li><a href="lecture_list.php">List</a></li>
                                        <li><a href="add_lecture.php">Add</a></li>
                                        <li><a href="remove_lec.php">Remove</a></li>
										 <li><a href="modify_lec.php">Modify</a></li>
                                        
                                    </ul>
                                </li>
								<li><a href="#">Users</a>
                                    <ul class="dropdown">
                                        <li><a href="user_list.php">List</a></li>
                                        <li><a href="remove_user.php">Remove</a></li>
                                        
                                    </ul>
                                </li>
							        <li><a href="#">Messages</a>
                                    <ul class="dropdown">
                                        <li><a href="msg_list.php">List</a></li>
                                        <li><a href="remove_msg.php">Remove</a></li>
                                        
                                    </ul>
                                </li>
								 <li><a href="#">Comments</a>
                                    <ul class="dropdown">
                                        <li><a href="cmnt_list.php">List</a></li>
                                        <li><a href="remove_cmnt.php">Remove</a></li>
                                        
                                    </ul>
                                </li>
                         
                         

                                
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="search_admin.php" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit" name="searc" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                           

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg-img/x.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Admin Panel</h2>
                        <a href="index.php" class="btn clever-btn">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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





















