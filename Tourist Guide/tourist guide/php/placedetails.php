<?php
session_start();
 $id = $_GET['pid'];
// if (!isset($_SESSION["$userid"])){
// 		header('location:../index.php');
// }
?>
<?php
//session_start();
include 'connect.php';

 $qry ="SELECT * From addplace_tbl as r, district as d WHERE r.pid=$id and r.D_id=d.D_id";
//echo $qry;
$records= mysqli_query($connection,$qry);
//	$records= mysqli_query($connectionnection,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
			//$fn = $row['firstname'];
			//$surname = $row['surname'];
			//$FBID = $row['FBID'];
			//$IMGNU = $row['IMGNU'];

	$name =  $row['place_name'];
    $dis =  $row['discription'];
   $image =  $row['image'];
    $contact =  $row['contact'];
    $pl =  $row['D_id'];
	// $email =  $row['Email'];
	
	$ed =  $row['district_name'];
  
		}
	}
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
    <link href="..//bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="../css/ele-style.css" rel="stylesheet" type="text/css" />
    <!-- stylesheet -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- font-awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="#">Welcome to Tourist Guide</a>
                    </li>
                    <li><a href="contact.html">Email :Touristguide@gmail.com</a></li>
                </ul>

                
            </div>
        </div>
    </div>
    <!-- top end here -->

    <!-- header start here-->
   
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
                                <li class="dropdown"><a href="../adminhome.php">HOME</a>
                                   
                                </li>
                                
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
            
<form action="editsplace.php" method="post" enctype="multipart/form-data" id="adplace" name="adplace">
<div class="col-md-4 offset-4">
<div class="card">	
	<div class="card-body">
									<label for="first name"> Place Name:</label>
							  	<input id="place" type="text" value="<?php echo "$name" ?>" name="place" class="av-name form-control" av-message="Invalid Name" required="">
							</div>
							
                <div class="card-body">
                    <label for="house name">Discription:</label>
                    <input type="text" name="dis"  id="dis" value="<?php echo "$dis" ?>" class="av-name form-control" av-message="Invalid House Name"></textarea>

                </div>
              
								<div class="card-body">
										<label for="place">Place:</label>
										<input id="pl" name="pl" value="<?php echo "$pl" ?>" class="av-name form-control" av-message="Invalid Place" required="">
								</div>
								<div class="card-body">
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
								
								<!-- <div class="form-group">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div> -->
      					<div class="card-body">
										<label for="photo">Photo:</label>
                                        <img src="<?php echo "$image" ?>" width="50px" height="50px">
										<input type="file" value="<?php echo "$image" ?>" id ="fileupload" name="fileupload" class="av-image form-control" av-message="Invalid Image Format">
								</div>
								<div class="card-body">
										<label for="mob">Contact:</label>
										<input id="mob" type="text" value="<?php echo "$contact" ?>" name="mob" class="av-mobile form-control" av-message="Invalid mobile" required="">
								</div>
								<div class="card-body">
                                <input type="hidden" id="plid" name="plid" value="<?php echo "$id" ?>">
										<button type="submit" class="btn btn-default" name="submit" id="submit" action="editsplace.php">Submit</button>
								</div>
 				    </form>
        </div>
		</div>
</div>
</body>


</html>