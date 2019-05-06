<?php
include "php/connect.php";
?>
<html>
<body>
<style>
.card {
-webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
border: 0;
}
.card {
position: relative;
display: flex;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #ffffffb0;
background-clip: border-box;
border: 1px solid rgba(0,0,0,.125);
border-radius: .25rem;
}
.card-body {
-ms-flex: 1 1 auto;
flex: 1 1 auto;
padding: 1.25rem;
}
.card, .navbar-nav {
display: -ms-flexbox;
}
*, ::after, ::before {
box-sizing: border-box;
}
.mb-4, .my-4 {
margin-bottom: 1.5rem!important;
}
/* @media (min-width: 768px) */
.col-md-4 {
-ms-flex: 0 0 33.333333%;
flex: 0 0 33.333333%;
max-width: 33.333333%;
}
.offset-4 {
margin-left: 33.333333%;
}
</style>
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
    <!-- Adding oh-autoVal css style  -->
    <link rel="stylesheet" type="text/css" href="js/jsval/oh-autoval-style.css">
    <!-- Adding jQuery script. It must be before other script files -->
    <script src="js/jsval/jquery.min.js"> </script>
    <!-- Adding oh-autoVal script file -->
    <script src="js/jsval/oh-autoval-script.js"></script>
</head>

<body class="header2">
    <!-- top start here -->
    <div id="top">
        <div class="container">
            <div id="top-links" class="nav">
                <ul class="list-inline pull-left">
                    <li>
                        <a href="#">Welcome to Tourist Guide</a>
                    </li>
                    <li><a href="contact.html">Email :Touristguide@gmail.com</a></li>
                </ul>

                
            </div>
        </div>
    </div>
    <!-- top end here -->

    <!-- header start here-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <div id="logo">
                        <a href="index-2.html"><img class="img-responsive" src="images/logo2.png" alt="logo" title="logo" /></a>
                    </div>
                </div>

                
                <div class="col-sm-2 col-md-2 col-xs-12 text-center">
                    <div class="phone">
                        
						
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
                                <li class="dropdown"><a href="regis/userhome.php">HOME</a>
                                   
                                
                        
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div>
    <form method="post" action ="php/addplaceu.php" enctype="multipart/form-data" class="oh-autoval-form" onSubmit="return validate()">
    <div class="col-md-6 col-md-offset-3">
    <div class="card">	
	    <div class="card-body">
    <i class="fa fa-user"></i><input type="text" name="place"  placeholder="PLACE NAME" id="placename" av-message="Invalid Name" class="form-control oh-autoval av-name" />
							</div>
							
                <div class="card-body">
                <i class="fa fa-user"></i><input type="text" name="dis"  placeholder="DISCRIPTION" id="dis" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" />
                </div>
              
								<div class="card-body">
                                <input type="file" id="fileupload"  class="form-control" name="fileupload" accept=".jpg,.jpeg,.png" required >
								</div>
                                
                                <div class="card-body">
                                <Select name="District" id="District" class="form-control" />
                                    <i class="fa fa-envelope"></i><option value="-1">SELECT DISTRICT</option>

                                        <?php                                                                                         //PHP code for district select
                                        $q=mysqli_query($connection,"SELECT D_id,district_name from district where status=1");
                                        while ($row = mysqli_fetch_array($q)){
                                           echo '<option value=' .$row['D_id'] . '>' .$row['district_name']. '</option>';
                                        }
                                        ?>

                                    </select>
                </div>
								
								<!-- <div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div> -->
      					<div class="card-body">
                          <i class="fa fa-volume-control-phone"></i><input type="number" name="contact"  placeholder="CONTACT" id="contact" class="form-control oh-autoval av-mobile" />
								</div>
								<!-- <div class="card-body">
                                <i class="fa fa-user"></i><input type="text" name="type"  placeholder="MAJOR ATTRACTION" id="type" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" />
								</div>
								<div class="card-body">
                                <i class="fa fa-user"></i><input type="text" name="n_o_t"  placeholder="AVILABLE TICKETS" id="n_o_t" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" />
                                    </div>
                                    <div class="card-body">
                                    <i class="fa fa-user"></i><input type="text" name="amount"  placeholder="AMOUNT" id="amonunt" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" /> -->
                                    </div>
										<button type="submit" class="btn btn-default" name="submit" id="submit" action="php/addplaceu.php">Submit</button>
								</div>
 				    </form>
        </div>
	</div>
</div>

<!-- footer start here -->
<!-- <footer>
        
         <div class="row">
            <div class="col-sm-12">
                <div class="powered">
                    <div class="col-sm-6 padd0">
                        <p>© Copyright 2019. <span>Tourist Guide </span></p>
                    </div>
                   
            </div>
        </div>
    </div>
</footer> -->
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
<!-- Mirrored from wptheme.co.in/travel-html/register.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:18 GMT -->

</html>