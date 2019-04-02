<?php

 include 'connect.php'; 
 //$id=$_SESSION['userid'];
$query=("SELECT * FROM users_registration_tbl where Status='0'");
$result=mysqli_query($connection,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['userid'];
$qry=("SELECT userid FROM login_tbl where userid='$id'");
$rows=mysqli_query($connection,$qry);
//echo $qry;
$row=mysqli_fetch_array($rows);
$ids=$row['userid'];
//echo $ids;


$sql="delete from login_tbl where `userid` = '$ids'";
//echo $sql;
$res=mysqli_query($connection, $sql);
$sqls="delete from users_registration_tbl where `userid` = '$id'";
$ress=mysqli_query($connection, $sqls);
if($res=1)
{
if($ress=1)

      {
         
        echo"<script>alert('Deleted.........');
 
        document.location=('aprov.php');
        </script>";
      }
    }
?>