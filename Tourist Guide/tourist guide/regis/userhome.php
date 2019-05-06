<?php
session_start();
if(!$_SESSION["userid"])
{
    header("location:../login.php");
}
include('../php/connect.php');
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
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="../css/ele-style.css" rel="stylesheet" type="text/css" />
    <!-- stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- font-awesome -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- crousel css -->
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <!--bootstrap select-->
    <link href="../js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="header2">
    <!-- top start here -->
    <div id="top">
        <div class="container">
            <div id="top-links" class="nav">
                <ul class="list-inline pull-left">
                    <li>
                        <a href="">Welcome to Tourist Guide</a>
                    </li>
                    <li><a href="">Email :Touristguide@gmail.com</a></li>
                </ul>

                <ul class="list-inline pull-right button">
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- top end here -->

    <!-- header start here-->
    <!-- <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <div id="logo">
                        <a href="index-2.html"><img class="img-responsive" src="../images/logo2.png" alt="logo" title="logo" /></a>
                    </div>
                </div>

                <div class="col-sm-7 col-md-7 col-xs-12">
                    <div class="search">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input name="s" value="" class="form-control" placeholder="Type Your Search" type="text">
                                </div>
                                <div>
                                    <button type="submit" value="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div> -->
                <!-- <div class="col-sm-2 col-md-2 col-xs-12 text-center">
                    <div class="phone">
                        <span><i class="fa fa-phone" aria-hidden="true"></i>
						Help Desk</span>
                        <p>+91 9876543210</p>
                    </div>
                </div>
            </div>
        </div> -->
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
                                <li class="dropdown"><a href="">HOME</a>
                                   
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">PLACES</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li><a href="../php/viewplace.php"><i class="fa fa-angle-right" aria-hidden="true"></i>View Place</a></li>
                                                <li><a href="../userplaceadd.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Add Place</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                               
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">BUSINESS ORGANIZATION</a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <!-- <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>User</a></li> -->
                                                <li><a href="../php/vieworgs.php"><i class="fa fa-angle-right" aria-hidden="true"></i>View</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                
                                <li><a href="">ABOUT</a></li>
                                <li><a href="">CONTACT</a></li>

                               
                                <?php 
$tid=$_SESSION['userid'];
$sql="SELECT * FROM users_registration_tbl WHERE userid=$tid";
$result=mysqli_query($connection,$sql);
$i=0;
$row=mysqli_fetch_array($result);

 $img=$row['profile_pic'];
    ?>
        
	
    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">

	<img src='<?php echo "$img" ?>' class="avatar" />
                                    <!-- <img src="images\b2.png" alt="Avatar" class="avatar"> -->
                                </a>
                                <div class="dropdown-menu">
                                <div class="dropdown-inner">
                                    <ul class="list-unstyled">
                                        <li><a href="../php/userdetail.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Edit Profile</a></li>
                                        <li><a href="../php/logout.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Logout</a></li>
                                         </ul>
                                </div>
                                </div>
                                </li>
                                <li><a href="">	<?php echo $row['First_name'];?></a></li>

                        
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
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
            <div class="item">
                <img src="../images/banner1.jpg" alt="banner1" title="banner1" class="img-responsive" />
            </div>
        </div>

        <!-- slide-detail start here -->
        <!-- <div class="slide-detail">
            <div class="container">
                <div class="matter">
                    <p><span>Go Travel</span> is here to make<br> your <span>destination dreams</span> reachable</p>
                </div>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-sm-2 wid">
                            <h2>Where</h2>
                            <label>Destination</label>
                            <input name="s" class="form-control" value="" placeholder="Enter a destination or tour type.." type="text">
                        </div>

                        <div class="col-sm-10 wid1">
                            <h2>When</h2>
                            <div class="col-sm-2 paddleft wid date">
                                <label>From</label>
                                <input name="s" class="form-control" value="" placeholder="dd/mm/yy" type="text">
                                <button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-sm-2 wid date padd-left">
                                <label>To</label>
                                <input name="s" class="form-control" value="" placeholder="dd/mm/yy" type="text">
                                <button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-sm-2 wid padd-left">
                                <label>Trip Type</label>
                                <select class="selectpicker form-control" name="location">
								<option value="1">Trip Type</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
                            </div>
                            <div class="col-sm-3 wid2 padd-left">
                                <label>Max Budget</label>
                                <input name="s" class="form-control" value="" placeholder="Max budget ($)" type="text">
                            </div>
                            <div class="col-sm-3 wid2 padd-left">
                                <button class="btn-primary" type="button">Search Tours</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- slide-detail end here -->
    </div> -->
    <!-- slider end here -->

    <!-- main container start here -->
    

    <!-- footer start here -->
    <footer>
        <div class="container">
            <div class="row padd-b"></div>
                <div class="col-sm-3 info">
                    <h3>My Account</h3>
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
                            <img src="../images/pay-icon.png" alt="pay" title="pay" class="img-responsive pull-right" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end here -->

    <!-- jquery -->
    <script src="../js/jquery.2.1.1.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--bootstrap select-->
    <script src="../js/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <!-- owlcarousel js -->
    <script src="../js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <!--internal js-->
    <script src="../js/internal.js" type="text/javascript"></script>
    <!--date js-->
    <script src="../js/datetimepicker/moment.js" type="text/javascript"></script>
    <script src="../js/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
</body>

<!-- Mirrored from wptheme.co.in/travel-html/header2.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:36 GMT -->

</html>