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

                
            </div>
        </div>
    </div>
    <!-- top end here -->

    <!-- header start here-->
    <header>
      

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
                                <li class="dropdown"><a href="index.html">HOME</a>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTER</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="regis/register.php"><i class="fa fa-angle-right" aria-hidden="true"></i>User</a></li>
                                                <li><a href="regis/businessreg.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Business Organization</a></li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                
                                <li><a href="">ABOUT</a></li>
                                <li><a href="">CONTACT</a></li>
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
                            <p>This will helps the tourist who want to visit a place. This contains the major tourist places all over in kerala</p>
                            <div class="donot">Don't have account -
                                <a href="">register Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                                    <i class="fa fa-user"></i><input type="text" name="username"  placeholder="USERNAME" id="input-email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-key"></i><input type="password" name="password"  placeholder="PASSWORD" id="input-password" class="form-control" />
                                </div>
                                <div class="links">
                                    <input type="radio" class="radio-inline" />Remember me
                                    <a href="mails/forgotpassword.php" class="pull-right">Forgot Password?</a>
                                </div>
                                <input type="submit" name="submit" id="submit" value="Login now" class="btn btn-primary btn-block" />
                                
                            
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
                            <!--  -->
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