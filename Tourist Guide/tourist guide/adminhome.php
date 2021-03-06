<?php
session_start();
if(!$_SESSION["userid"])
{
    header("location:login.php");
}
include('php/connect.php')

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/travel-html/header2.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:27 GMT -->

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


    <!-- top end here -->

    <!-- header start here-->
    <header>
                       
    </header>
    <!-- header end here -->

    <!-- menu start here -->
    <div id="menu">
    <img width="50px" height="50px "class="img-responsive" src="images/logo.png" alt="logo" title="logo" />
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
                                
                                <li class="dropdown"><a href="">HOME</a>
                                   
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">PLACES</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="php/placeapprv.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Approve Place</a></li>
                                                <li><a href="Addplace.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Add Place</a></li>
                                                <li><a href="php/Editplace.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Edit Place</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="php/viewuser.php">USERS</a>
                                <!-- <li><a href="php/viewuser.php" class="dropdown-toggle" data-toggle="dropdown">USERS</a> -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                        <ul class="list-unstyled">
                                            <li><a href="php/viewuser.php"><i class="fa fa-angle-right" aria-hidden="true"></i>User</a></li>
                                            <!-- <li><a href="php/aprov.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Business Organization</a> -->
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">BUSINESS ORGANIZATION</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="php/aprov.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Approve</a></li>
                                                <li><a href="php/vieworg.php"><i class="fa fa-angle-right" aria-hidden="true"></i>View</a></li>
                                              </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">BOOKING</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>View Booking</a></li>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                
                                
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images\b2.png" alt="Avatar" class="avatar"></a>
                                <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li><a href="php/admindetail.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Edit Profile</a></li>
                                        <li><a href="php/logout.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Logout</a></li>
                                         </ul>
                                </div>
                                </div>
                                </li>
                        
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end here -->

    <!-- slider start here -->
    <div class="slice">
        <div class="slideshow owl-carousel">
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
        </div>

        <!-- slide-detail start here -->
        <div class="slide-detail">
            <div class="container">
                <div class="matter">
                    <p><span>Go Travel</span> is here to make<br> your <span>destination dreams</span> reachable</p>
                </div>
               
            </div>
        </div>
        <!-- slide-detail end here -->
    </div>
    <!-- slider end here -->

    <!-- main container start here -->
    

    <!-- footer start here -->
    <footer>
        <div class="container">
            <div class="row padd-b"></div>
                <div class="col-sm-3 info">
                    <!-- <h3>My Account</h3>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>My Address</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>My Personal Info</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>My Cart</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h3>Information</h3>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About us</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Use</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h3>Booking Now</h3>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Hotels</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Packages</a></li>
                        
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tours</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 contact">
                    <h3>Contact us</h3>
                    <ul class="list-inline">
                        <li>
                            <div class="inner"><i class="fa fa-home" aria-hidden="true"></i> Address</div>
                            <div class="in"><a href="#"> : 123 Lorem, Ludhiana, India</a></div>
                        </li>
                        <li>
                            <div class="inner"><i class="fa fa-phone" aria-hidden="true"></i>Phone No.</div>
                            <div class="in"><a href="#"> : (+91)123457890, (1234)</a></div>
                        </li>
                        
                    </ul>
                    <div class="footersrch">
                        <p>Sign up for our Lorem ipsum dolor sit amet,</p>
                         -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="powered">
                        <div class="col-sm-6 padd0">
                            <p>© Copyright 2019. <span>Tourist Guide</span> by Multimedia</p>
                        </div>
                        <div class="col-sm-6 padd0">
                            <img src="images/pay-icon.png" alt="pay" title="pay" class="img-responsive pull-right" />
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

<!-- Mirrored from wptheme.co.in/travel-html/header2.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:36 GMT -->

</html>