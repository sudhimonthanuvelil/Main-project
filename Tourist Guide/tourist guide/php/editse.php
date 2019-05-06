<?php
session_start();
include 'connect.php';

$ud_ID =$_SESSION["userid"];
if(isset($_POST['submit'])){


$fn =$_POST['fn'];
$pl =$_POST['pl'];
$mob =$_POST['mob'];
$ln =    $_POST['ln'];
echo $ed = $_POST['dis'];
echo $email =    $_POST['email'];
//$pho =    $_POST['pho' ];
$pho= "../upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], "../upload/".$_FILES['fileupload']['name']);
 
 //print_r($_POST);


    $sql1="SELECT * From district where district_name='$ed'";

    $qsq1=mysqli_query($connection,$sql1);
    $row1=mysqli_fetch_array($qsq1);
   //$pid=$row['Pid'];
    $did=$row1['D_id'];
    

    $query="UPDATE  users_registration_tbl SET  First_name='$fn' ,   Last_name='$ln' ,  Place='$pl' , 
      profile_pic='$pho' ,  Mobile='$mob' ,  Email='$email' ,  D_id='$did'
    WHERE userid ='$ud_ID'";
   //echo $query; 
	 $rqs=mysqli_query($connection,$query);
   //mysqli_close($con);
   //$query1="UPDATE  district SET  D_id='$did' ";
    
   //echo $query;
	// mysqli_query($con,$query);
   $querys="UPDATE  login_tbl SET user_name='$email'
    WHERE userid ='$ud_ID'";
   //echo $query;
	 $rq=mysqli_query($connection,$querys);
   //mysqli_close($connection);
   //echo "<script>window.onload=function(){alert('update successfully');window.location='profile.php';}</script>";
   if($rqs && $rq)
   {
      echo "<script>window.onload=function(){alert('update successfully');window.location='userdetail.php';}</script>";
   }
   else{
      echo "<script>window.onload=function(){alert('update failed');window.location='userdetail.php';}</script>";
   }
 }	 
?>