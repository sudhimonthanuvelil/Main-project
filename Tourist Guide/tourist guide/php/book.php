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
                                <li class="dropdown"><a href="../regis/userhome.php">HOME</a>
                                   
                                </li>
                                
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


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
        <?php
        $id=$_POST['place'];
        ?>
        <form action="booking.php" method="post" enctype="multipart/form-data" id="adplace" name="adplace">
            <div class="col-md-4 offset-4">
            <div class="card">	
                <div class="card-body">
                                                <label for="place name"> Place Name:</label>
                                              <input id="place" type="text" value="<?php echo "$id" ?>" name="place" class="av-name form-control" av-message="Invalid Name" required="">
                                        </div>
                                        
                            <div class="card-body">
                                <label for="ticketdate">Ticket date:</label>
                                <input type="date" name="ticdate"  id="ticdate" class="av-name form-control" av-message="Invalid House Name"></textarea>
            
                            </div>
                            <div class="card-body">
                                                    <label for="noticket">Number of Ticket:</label>
                                                    <input id="noc" name="noc" class="av-name form-control" av-message="Invalid Place" required=""><br>
                                                    <button type="submit" class="btn btn-default" name="submit" id="submit">Book</button>
                                            </div>
                                            
                                        </body>


                                        </html>