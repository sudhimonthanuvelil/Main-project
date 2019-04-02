<?php
	include("connect.php");
	// $path= "../upload/".$_FILES['fileupload']['name'];
	// 	//echo($path);
    //     copy($_FILES['fileupload']['tmp_name'], $path);


if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$name = $_POST['place'];
$dis = $_POST['dis'];
$contact = $_POST['contact'];
// $date = $_POST['date'];
$D_id = $_POST['District'];
//$image = $_POST['path'];

//Insert Query of SQL
 $query = "insert into addplace_tbl(place_name,discription,contact,D_id) values ('$name', '$dis', '$contact', '$D_id',)";
$query_exes=mysqli_query($connection,$query);

}
else{

}
//mysql_close($connection); // Closing Connection with Server
?>
<html>
<head>
<title>Organization Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Place Name</th>
<th>Description</th>
<th>District</th>
<th>Contact</th>
<th>Photo</th>
<tr>
