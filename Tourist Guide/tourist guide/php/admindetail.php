<?php

$fn =  NULL;
$ln =   NULL;
$mob =   NULL;
$pl =  NULL;
$email =  NULL;
$pho =  NULL;
$ed =  NULL;
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
//echo $qry;
$records= mysqli_query($connection,$qry);
//	$records= mysqli_query($connectionnection,$qry);
	if(mysqli_num_rows($records)>=1){
		while($row = mysqli_fetch_array($records)) {
		

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
                                <li class="dropdown"><a href="../adminhome.php">HOME</a>
                                   
                                
                    </nav>
                </div>
            </div>
        </div>
    </div>

            <form id="employee" name="employee" enctype="multipart/form-data" action="editse.php" class="oh-autoval-form mt-5 mb-5 " method="post" onsubmit="return">
			<div class="col-md-4 offset-4">
			<div class="card">	
			<div class="card-body">	
									<label for="first name"> First Name:</label><br>
							  	<input id="fn" type="text" value="<?php echo "$fn" ?>" name="fn" class="av-name form-control" av-message="Invalid Name" required="">
							</div>
							
                <div class="card-body">
                    <label for="house name">Last Name:</label>
                    <br><input type="text" name="ln"  id="ln" value="<?php echo "$ln" ?>" class="av-name form-control" av-message="Invalid House Name"></textarea>

                </div>
              
								<div class="card-body">
										<label for="place">Place:</label><br>
										<input id="pl" name="pl" value="<?php echo "$pl" ?>" class="av-name form-control" av-message="Invalid Place" required="">
								</div>
								
                                
								<div class="card-body">
										<label for="email">Email:</label><br>
										<input type="email" id="email" value="<?php echo "$email" ?>" name="email" class="av-email form-control" av-message="Invalid email address" required="">
								</div>
                                <div class="card-body">
                                    <Select name="District" id="District" name="ed" class="form-control" /><br>
                                    <i class="fa fa-envelope"></i><option value="-1">SELECT DISTRICT</option>

                                        <?php                                                                                         //PHP code for district select
                                        $q=mysqli_query($connection,"SELECT D_id,district_name from district where status=1");
                                        while ($row = mysqli_fetch_array($q)){
                                            echo '<option value=' .$row['D_id'] . '>' .$row['district_name']. '</option>';
                                        }
                                        ?>
									
								</div>
      					<div class="card-body">
										<label for="photo">Photo:</label>
										<input type="file" value="<?php echo "$pho" ?>" id ="fileupload" name="fileupload" class="av-image form-control" av-message="Invalid Image Format" required="">
								</div>
								<div class="card-body">
										<label for="mob">Mobile:</label><br>
										<input id="mob" type="text" value="<?php echo "$mob" ?>" name="mob" class="av-mobile form-control" av-message="Invalid mobile" required="">
								</div>
                                
								<div class="card-body">
										<button type="submit" class="btn btn-default" name="submit" id="submit" action="../php/edits.php">Submit</button>
								</div>
                                
 				    </form>
        </div>
		</div>
</div>

</body>


</html>



