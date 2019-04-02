<?php
session_start();
// if (!isset($_SESSION["userid"])){
//     header('location:index.php');
// }
 include 'connect.php'; 
 //$id=$_SESSION['userid'];
$query=("SELECT * FROM users_registration_tbl where Status='0'");
$result=mysqli_query($connection,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['userid'];
$qry=("SELECT * FROM login_tbl where userid='$id'");
$rows=mysqli_query($connection,$qry);
//echo $qry;


//echo $r;
$sql="UPDATE login_tbl set status=1 where `userid` = '$id";
//echo $sql;
$res=mysqli_query($connection, $sql);
$row=mysqli_fetch_array($rows);
$r=$row['userid'];
$sqls="UPDATE users_registration_tbl set Status=1 where `userid` = '$id'";
//echo $sqls;
$ress=mysqli_query($connection, $sqls);

 //$sql="update table login_tbl set status=1 where `userid` = '$id'";
 //$res=mysqli_query($connection, $sql);

// if($res=1)
// {
//  if($ress=1)

//       {
//          <script>
//         //echo"<script>alert('Approved.........');
 
//         //document.location=('aprov.php');
//         </script>";
//       }
//     }   
?>



