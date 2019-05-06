<?php 
session_start();
//print_r($_POST);
 $uid=$_SESSION['userid'];
 $id=$_GET['userid'];
 $seid=$_GET['fid'];
extract($_POST);

?>
<?php
include 'connect.php';

if (isset($_GET['submit'])) {

    //$details=$_POST['details'];
   $sql="select * from features_tbl where fid='$seid'";
$exep=mysqli_query($connection,$sql);
$fetp=mysqli_fetch_array($exep);
$amt=$fetp['amount'];
// $sql1="select * from users_registration_tbl where userid='$sche'";
// $exe=mysqli_query($connection,$sql1);
// $fet=mysqli_fetch_array($exe);
// $sid=$fet['userid'];
  echo $sql = "INSERT INTO booking_tbl (userid,eid,status)
VALUES ('$id', '$uid','0')";
$exeb=mysqli_query($connection,$sql);
//$fetb=mysqli_fetch_array($exeb);
$bid= mysqli_insert_id($connection);
// echo $sqll = "INSERT INTO tb_payment (Log_id,bid,status,Amount)
// VALUES ('$id', '$bid','0','$amt')";
// $exepa=mysqli_query($con,$sqll);
// if ($sqll && $sqll) {
// ?>
// <script>
// alert('Booking request successfully send');
// window.location.href='sersearch.php';</script>  
// <?php// } else
//  {
//     ?>
// <script>
// alert('Failed , Try again later');
// window.location.href='sersearch.php';
// </script>
// <?php
// }
}
//$con->close();
?>