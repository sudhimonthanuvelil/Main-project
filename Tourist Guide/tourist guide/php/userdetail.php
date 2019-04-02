<?php
session_start();
$id = $_SESSION['userid'];
// if (!isset($_SESSION["$userid"])){
// 		header('location:../index.php');
// }
?>
<?php
//session_start();
include 'connect.php';
//getting id from url
//$id = $_GET['$userid'];

//$qry ="SELECT * From users_registration_tbl as t,tb_place as p, tb_district as d,tb_category as c WHERE t.$userid='$id' and t.Pid=p.Pid and p.Did=d.Did and t.cat_id=c.cat_id";
//echo "$qry";
$qry ="SELECT * From users_registration_tbl as r, login_tbl as l, district as d WHERE r.userid='$id' and r.userid=l.userid and r.D_id=d.D_id";
echo $qry;
$records= mysqli_query($connection,$qry);
//	$records= mysqli_query($connectionnection,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	$fn =  $row['First_name'];
    $ln =  $row['Last_name'];
    $mob =  $row['Mobile'];
    $pl =  $row['Place'];
	$email =  $row['Email'];
	$pho =  $row['profile_pic'];
	$ed =  $row['district_name'];
  
		}
	}
?>

<!-- banner -->


<html>
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
<!-- Adding oh-autoVal css style -->
    <link rel="stylesheet" type="text/css" href="../js/jsval/oh-autoval-style.css">
    <!-- Adding jQuery script. It must be before other script files -->
    <script src="../js/jsval/jquery.min.js"> </script>
    <!-- Adding oh-autoVal script file -->
    <script src="../js/jsval/oh-autoval-script.js"></script>   
<body>
 <!-- header start here-->
 <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="social-icon">
                        <ul class="list-inline">
                     
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div id="logo">
                        <a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="logo" title="logo" /></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    
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
                                <li class="dropdown"><a href="../index.html" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                                    <div class="dropdown-menu">
                                        
                                    </div>
                                </li>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!--<h2 class="text-secondary">Apply Now</h2><br><br>-->
            <form id="employee" name="employee" enctype="multipart/form-data" action="editse.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
							<div class="form-group">	
									<label for="first name"> First Name:</label><br>
							  	<input id="fn" type="text" value="<?php echo "$fn" ?>" name="fn" class="av-name form-control" av-message="Invalid Name" required="">
							</div>
							
                <div class="form-group">
                    <label for="house name">Last Name:</label>
                    <br><input type="text" name="ln"  id="ln" value="<?php echo "$ln" ?>" class="av-name form-control" av-message="Invalid House Name"></textarea>

                </div>
              
								<div class="form-group">
										<label for="place">Place:</label><br>
										<input id="pl" name="pl" value="<?php echo "$pl" ?>" class="av-name form-control" av-message="Invalid Place" required="">
								</div>
								<div class="form-group">
				   				 <label for="dist">District:</label>
                    <select class="form-control" id="ed" name="ed">
                    <option value="select" ><?php echo "$ed" ?></option>
                    <option value="Alapuzha">Allapuzha</option>
                    <option value="Ernakulam">Ernakulam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasargodu">Kasargodu</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kozhikodu">Kozhikodu</option>
                    <option value="Malapuram">Malapuram</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Thiruvanathapuram">Thiruvanathapuram</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Wayanad">Wayanad</option>
                    </select>
                </div>
								
								<div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div>
      					<div class="form-group">
										<label for="photo">Photo:</label>
										<input type="file" value="<?php echo "$pho" ?>" id ="fileupload" name="fileupload" class="av-image form-control" av-message="Invalid Image Format" required="">
								</div>
								<div class="form-group">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="av-mobile form-control" av-message="Invalid mobile" required="">
								</div>
								<div class="form-group">
										<button type="submit" class="btn btn-default" name="submit" id="submit" action="../regis/userhome.php">Submit</button>
								</div>
 				    </form>
        </div>
		</div>
</div>

</body>


</html>



