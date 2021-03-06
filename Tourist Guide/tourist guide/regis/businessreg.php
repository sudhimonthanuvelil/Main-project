<?php
include "../php/connect.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from wptheme.co.in/travel-html/register.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:18 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Bootstrap stylesheet -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="css/ele-style.css" rel="stylesheet" type="text/css" />
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

    <!-- Adding oh-autoVal css style -->
    <link rel="stylesheet" type="text/css" href="../js/jsval/oh-autoval-style.css">
    <!-- Adding jQuery script. It must be before other script files -->
    <script src="../js/jsval/jquery.min.js"> </script>
    <!-- Adding oh-autoVal script file -->
    <script src="../js/jsval/oh-autoval-script.js"></script>
</head>

<body>
    <!-- top start here -->
  
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
                                <li class="dropdown"><a href="../index.html" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                                    <div class="dropdown-menu">
                                        
                                    </div>
                                    <li class="dropdown"><a href="../login.php" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
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
    <img width="100px" height="100px" align="right" class="img-responsive"  src="../images/logo.png" alt="logo" title="logo" />
        <div class="container">
            <h2>Business Register</h2>
            <!-- <ul class="list-inline">
                <li><a href="index.html">home</a></li>
                <li><a href="register.html">Register</a></li>
            </ul> -->
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
                            <h2>Register Your account</h2>
                            <p>This will helps the tourist who want to visit a place. This contains the major tourist places all over in kerala</p>
                            <div class="donot">Already have a account -
                                <a href="../login.php">Login Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="loginnow">
                            <div class="places">
                                <h1>Register now</h1>
                                <p>please login to your account</p>
                                <hr> 
                            </div>
                            <form method="POST" action ="../php/busi.php" enctype="multipart/form-data" class="oh-autoval-form" onSubmit="return validate()">
                                <div class="form-group">
                                    <i class="fa fa-user"></i><input type="text" name="orgname"  placeholder="ORGANIZATION NAME" id="orgname" av-message="Invalid Name" class="form-control oh-autoval av-name" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-user"></i><input type="text" name="orgtype"  placeholder="ORGANIZATION TYPE" id="orgtype" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-file-text"></i><input type="text" name="orgdiscription"  placeholder="DISCRIPTION" id="orgdiscription" av-message="Feild is Mandatory" class="form-control oh-autoval av-required" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-file-text"></i><input type="text" name="licenseno"  placeholder="LICENCE NUMBER" id="licenseno" av-message="Feild is Mandatory" class="form-control oh-autoval av-required"/>
                                </div>
                                
                                <div class="form-group"> 
                                
                                <input type="file" name="fileupload" class="form-control" accept="image/*" size="70" id="fileupload"/>              
                                   <!-- <input type="file" id="fileupload"  class="form-control" name="fileupload" accept=".jpg,.jpeg,.png" required > -->
                                </div>
                                      
                                 <div class="form-group">
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
                                
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i><input type="text" name="place"  placeholder="PLACE" id="place" av-mess age="Feild is Mandatory" class="form-control oh-autoval av-required" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-volume-control-phone"></i><input type="number" name="contact"  placeholder="CONTACT" id="contact" class="form-control oh-autoval av-mobile" />
                                    <!-- <script>                                                                                                         //validation for number
                                   document.querySelector("text").addEventListener("keyup", function () {
                                    console.log(this.value);
                                    }); -->
                                </script>
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i><input type="email" name="Email"  placeholder="EMAIL" id="email" av-message="Invalid Email" class="form-control oh-autoval av-email" />
                                </div>
                                
                        
                               <div class="form-group">
                                    <i class="fa fa-key"></i><i class="fa fa-eye eye" aria-hidden="true"></i><input type="password" name="password" value="" placeholder="PASSWORD" id="password" av-message="invalid password" class="form-control oh-autoval av-password" />
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-key"></i><i class="fa fa-eye eye" aria-hidden="true"></i><input type="password" name="confirm" value="" placeholder="CONFIRM PASSWORD" id="confirm" av-message="invalid password" class="form-control oh-autoval av-password" />
                                </div>
                                <script>
        function validate(){

    if(document.getElementById("password").value!=document.getElementById("confirm").value)alert("Passwords do no match");
    return document.getElementById("password").value==document.getElementById("confirm").value;
   return false;
    }
    </script>
                                
                                <input type="submit" value="Register now" class="btn btn-primary btn-block" />
                                
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main container end here -->

    <!-- news start here -->
   

    <!-- footer start here -->
    <footer>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="powered">
                        <div class="col-sm-6 padd0">
                            <p>© Copyright 2019. <span>Tourist Guide </span></p>
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

<!-- Mirrored from wptheme.co.in/travel-html/register.html  [XR&CO'2014], Sat, 13 Oct 2018 17:29:18 GMT -->

</html>