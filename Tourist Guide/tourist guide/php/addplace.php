<?php
	include("connect.php");
	

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$name = $_POST['place'];
$dis = $_POST['dis'];
$contact = $_POST['contact'];
$D_id = $_POST['District'];
$path= "../upload/".$_FILES['fileupload']['name'];
// 	//echo($path);
	 copy($_FILES['fileupload']['tmp_name'],$path );

$image = $path;
$sql=  mysqli_query($connection, "select * from addplace_tbl where place_name='$name'");
// $exe=mysqli_fetch_array($sql);
// $pl=$exe['place_name'];
if(mysqli_num_rows($sql)>0)
{
	echo "<script> alert('Place Already exist');window.location='../Addplace.php'</script>";
}
else
{


//Insert Query of SQL
 $query = "insert into addplace_tbl(place_name,discription,contact,D_id,image) values ('$name', '$dis', '$contact', '$D_id','$path')";
$query_exes=mysqli_query($connection,$query);

}
}
// else{

// }
//mysql_close($connection); // Closing Connection with Server
?>
<html>
<head>
<title>Organization Details</title>
</head>
<body>
<?php
include("connect.php");
$con=  mysqli_query($connection, "select * from addplace_tbl as a,district as d where a.D_id=d.D_id");
//echo $con;
?>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Place Name</th>
<th>Description</th>
<th>District</th>
<th>Contact</th>
<th>Image</th>

</tr>
<?php
while ($user = mysqli_fetch_array($con)){
	?>
<tr>

<td><?php echo $user['place_name'];?></td>
<td><?php echo $user['discription'];?></td>
<td><?php echo $user['district_name'];?></td>
<td><?php echo $user['contact'];?></td>
<td width="40px"><img width="100%" height="10%" src="<?php echo $user['image']?>"></td>

</tr>
<?php
}
?>

</table>
</body>
</html>

