
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
                    <li><a href="">Email :Touristguide@gmail.com</a></li>
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
                                <li class="dropdown"><a href="../regis/userhome.php">HOME</a>
                                   
                                </li>
                                
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


<?php
//session_start();
include 'connect.php';
?>
<html>
<head>
</head>
<body>
<div class="row">
<div class="col-md-3 pb-5">
<div class="row" style="border:0px solid; padding:20px; background: #f5f5f5;margin: 10px; box-shadow: 0px 3px 5px rgba(100,100,100,.3)">

<?php
$sql = "SELECT * FROM users_registration_tbl as u join org_tbl as o on o.org_id=u.org_id join district as d on d.D_id=u.D_id where u.Status ='1'";
// //print_r($sql);
// return;
 $val = mysqli_query($connection, $sql);
 if ($val) {
while ($result = mysqli_fetch_array($val)) {
?>

<div class="col-md-4 pb-5">
<div class="row" >

<div class="col">
<img width="100%" height="100%" src="<?php echo $result['profile_pic']; ?>"class="image1">
</div>
<div class="col">
<!-- <label><b><?php echo $result['org_name']; ?></b></label><br> -->
<?php
$sql1="SELECT * FROM users_registration_tbl as u join org_tbl as o on o.org_id=u.org_id join district as d on d.D_id=u.D_id where u.Status ='1'";
$val1 = mysqli_query($connection, $sql1);
$result1 = mysqli_fetch_array($val1);
$place=$result1['org_name'];


?>
<form action="" method="post">
<!-- <div class="col">
<img width="30%" height="30%" src="<?php echo $result['profile_pic']; ?>"class="image1">
</div> -->
<label><b><?php echo $result1['org_name']; ?></b></label><br>
<label><b><?php echo $result1['org_type']; ?></b></label><br>
<label><b><?php echo $result1['org_desc']; ?></b></label><br>
<label><b><?php echo $result1['licno']; ?></b></label><br>
<label><b><?php echo $result1['Email']; ?></b></label><br>
<label><b><?php echo $result1['Place']; ?></b></label><br>
<label><b><?php echo $result1['Mobile']; ?></b></label>
<!-- <input type="hidden" name="place" value='<?php echo "$place" ?>'> -->
<!-- <button type="submit" class="btn btn-default"  name="remove" id="remove" action="">Remove</button> -->
</div>
</div>
</div>
<?php
}
 }
?>
</body>
</html>
