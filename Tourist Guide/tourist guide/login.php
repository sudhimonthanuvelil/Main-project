<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "<script type=\"text/javascript\"> window.location.assign(\"userhome.php\")</script>";
	}
?>

<DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/travel-html/login.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:18 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Bootstrap stylesheet -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="css/ele-style.css" rel="stylesheet" type="text/css" />
    <!-- stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- font-awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- crousel css -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <!--bootstrap select-->
    <link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- top start here -->
    <div id="top">
        <div class="container">
            <div id="top-links" class="nav">
                <ul class="list-inline pull-left">
                    <li>
                        <a href="#">Welcome to Tourist Guide</a>
                    </li>
                    
                    
                </ul>

                <ul class="list-inline pull-right button">
                    <li><a href="login.html">Login</a>
                        <a href="register.html">Register</a>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- top end here -->

    <!-- header start here-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="social-icon">
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://photos.google.com/" target="_blank"><i class="social_picassa"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div id="logo">
                        <a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="logo" title="logo" /></a>
                    </div>
                </div>
               
            </div>
        </div>
    </header>
    <!-- header end here -->


    <!-- menu start here -->
    <div id="menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <nav class="navbar">
                        <div class="navbar-header">
                            <span class="menutext visible-xs">Menu</span>
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="index-2.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 1</a></li>
                                                <li><a href="header2.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 2</a></li>
                                                <li><a href="header3.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 3</a></li>
                                                <li><a href="header4.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">TOUR</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="tour-grid-view.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour</a></li>
                                                <li><a href="tour-detail-view.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour Detail</a></li>
                                                <li><a href="tour-booking-form.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour Booking Form</a></li>
                                                <li><a href="thank-you.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Thank You</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="guides.html">GUIDES</a></li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                                                <li><a href="blog-detail.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="gallery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
                                                <li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error-404</a></li>
                                                <li><a href="faq.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Faq</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">USER</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="login.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Login</a></li>
                                                <li><a href="register.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Register</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="about.html">ABOUT</a></li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end here -->

    <!-- breadcrumb start here -->
    <div class="bread-crumb">
        <div class="container">
            <h2>Login</h2>
            <ul class="list-inline">
                <li><a href="index-2.html">home</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end here -->

    <!-- main container start here -->
    <div class="login">
        <div class="col-sm-6">
            <div class="leftside"></div>
        </div>
        <div class="container">
            <div id="content" class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="loginto">
                            <h2>Login to Your account</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat.</p>
                            <div class="donot">Don't have account -
                                <a href="register.php">register Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="loginnow">
                            <div class="places">
                                <h1>Login now</h1>
                                <p>please login to your account</p>
                                <hr>
                            </div>
                            <form method="post" action ="php/login.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <i class="fa fa-user"></i><input type="text" name="username"  placeholder="username" id="input-email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-key"></i><input type="password" name="password"  placeholder="password" id="input-password" class="form-control" />
                                </div>
                                <div class="links">
                                    <input type="radio" class="radio-inline" />Remember me
                                    <a href="mails/forgotpassword.php" class="pull-right">Forgot Password?</a>
                                </div>
                                <input type="submit" name="submit" id="submit" value="Login now" class="btn btn-primary btn-block" />
                                <div class="or">
                                    <span>or</span>
                                    <hr/>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a></li>
                                    <li><a href="https://twitter.com/" target="_blank" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a></li>
                                    <li><a href="https://plus.google.com/" target="_blank" class="gp"><i class="fa fa-google-plus"></i> Login Via Google+</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main container end here -->

    <!-- footer start here -->
    <footer>
        <
                    
            <div class="row">
                <div class="col-sm-12">
                    <div class="powered">
                        <div class="col-sm-6 padd0">
                            <p>© Copyright 2019. <span>Tourist Guide </span> by Multimedia</p>
                        </div>
                        <div class="col-sm-6 padd0 text-right">
                            <div class="social-icon">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="https://photos.google.com/" target="_blank"><i class="social_picassa"></i></a></li>
                                    <li><a href="https://www.youtube.com/?gl=IN" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end here -->

    <!-- jquery -->
    <script src="js/jquery.2.1.1.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--bootstrap select-->
    <script src="js/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <!-- owlcarousel js -->
    <script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <!--internal js-->
    <script src="js/internal.js" type="text/javascript"></script>
    <!--date js-->
    <script src="js/datetimepicker/moment.js" type="text/javascript"></script>
    <script src="js/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
</body>

<!-- Mirrored from wptheme.co.in/travel-html/login.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:18 GMT -->

</html>