<?php
include 'connect.php';
if(isset($_POST["place"]))
{
 $query=("SELECT * FROM addplace_tbl where status='1'");
//echo $query;
$result=mysqli_query($connection,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['pid'];
$qry=("SELECT * FROM addplace_tbl where pid='$id'");
$rows=mysqli_query($connection,$qry);
$rowk=mysqli_fetch_array($rows);
$sql="UPDATE addplace_tbl set status=0 where `pid` = '$id'";
//echo $sql;
$res=mysqli_query($connection, $sql);
//$row=mysqli_fetch_array($rows);
if($res)
{
 //if($ress=1)

    // { 
          echo"<script>alert('Approved.........');
 
         document.location=('placeapprv.php');
          </script>";
       //}
    }
    }   
  ?>