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
    <link href="../https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
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
                                
                        </div>
                    </nav>
                </div>
            </div>
        </div>
	</div>
<head>
<title>Organization Details</title>
</head>
<body>
<?php
include("connect.php");
$con=  mysqli_query($connection, "select * from addplace_tbl as a,district as d where a.D_id=d.D_id");
// echo $con;
?>

<!-- <div class="card-body"> -->
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Place Name</th>
<th>Description</th>
<th>District</th>
<th>Contact</th>
<th>Image</th>

</tr>
<?php
while ($user = mysqli_fetch_array($con)){
	?>
<tr>

<td><?php echo $user['place_name'];?></td>
<td><?php echo $user['discription'];?></td>
<td><?php echo $user['district_name'];?></td>
<td><?php echo $user['contact'];?></td>
<td width="40px"><img width="100%" height="10%" src="<?php echo $user['image']?>"></td>
<th><li><a href="placedetails.php?pid='<?php echo $user['pid']?>'">Remove</a></li></th>

</tr>
<?php
}
?>

</table>
</body>
</html>

