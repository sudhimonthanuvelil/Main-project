<?php
//session_start();
include 'connect.php';
?>
<html>
<head>
</head>
<body>
<div class="row">
<?php

$sql = "SELECT * FROM `addplace_tbl`";
// print_r($sql);
// return;
$val = mysqli_query($connection, $sql);
if ($val) {
while ($result = mysqli_fetch_array($val)) {
?>

<div class="col-md-4 pb-5">
<div class="row" >

<div class="col">
<img width="30%" height="30%" src="<?php echo $result['image']; ?>"class="image1">
</div>
<div class="col">
<label><b><?php echo $result['place_name']; ?></b></label><br>
<?php
$sql1="SELECT * FROM addplace_tbl";
$val1 = mysqli_query($connection, $sql1);
$result1 = mysqli_fetch_array($val1);
$place=$result1['place_name'];
?>