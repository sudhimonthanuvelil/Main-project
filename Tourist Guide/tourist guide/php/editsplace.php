<?php
session_start();
include 'connect.php';

 $ud_ID =$_POST['plid'];
if(isset($_POST['submit'])){


$name = $_POST['place'];
$dis = $_POST['dis'];
$contact = $_POST['mob'];
$D_id = $_POST['pl'];
//$ud_ID = $
//$path= "../upload/".$_FILES['fileupload']['name'];//$pho =    $_POST['pho' ];
//$pho= "upload/".$_FILES['fileupload']['name'];
		//echo($path);
        //copy($_FILES['fileupload']['tmp_name'], "../upload/".$_FILES['fileupload']['name']);
$ed =    $_POST['ed' ];


    $sql1="SELECT * From district where district_name='$ed'";

    $qsq1=mysqli_query($connection,$sql1);
    $row1=mysqli_fetch_array($qsq1);
   // $pid=$row['Pid'];
    $did=$row1['D_id'];
    

    $query="UPDATE addplace_tbl SET  discription='$dis' ,  contact='$contact'
    WHERE pid =$ud_ID";
   //echo $query; 7--;
	 mysqli_query($connection,$query);
   //mysqli_close($con);
   //$query1="UPDATE  district SET  D_id='$did' ";
    
   //echo $query;
	// mysqli_query($con,$query);
   // $querys="UPDATE  login_tbl SET user_name='$email'
   //  WHERE userid ='$ud_ID'";
   // //echo $query;
	//  mysqli_query($connection,$querys);
   mysqli_close($connection);
echo "<script>window.onload=function(){alert('update successfully');window.location='Editplace.php';}</script>";
 }	 
?>