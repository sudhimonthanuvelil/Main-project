<?php
session_start();
// if (!isset($_SESSION["userid"])){
//     header('location:../index.php');
//}
include 'connect.php'; 
//getting id from url
//$id = $_GET['userid'];
$id = $_SESSION["userid"];
//$qry ="SELECT * From users_registration_tbl as t, district as d,tb_category as c WHERE t.userid='$id' and t.Pid=p.Pid and p.Did=d.Did and t.cat_id=c.cat_id";
//echo "$qry";
$qry ="SELECT * From users_registration_tbl as r, login_tbl as l, district as d WHERE r.userid='$id' and r.userid=l.userid and r.D_id=d.D_id";
//echo $qry;
$records= mysqli_query($connection,$qry);

?>



<?php
while($orgi=mysqli_fetch_assoc($records)){
 //'<center><img src="../'.$orgi['profile_pic'].'" height="100px" width="100px"><center>';
 ?>
 <html>
<head>
<title>My Profile</title>
</head>
<body><b><h1>MY PROFILE<b></h1>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Place</th>
<th>District</th>
<th>Email</th>
<th>Mobile</th>
<th>Action</th>

<tr>
<?php
echo "<tr>";
echo "<td>".$orgi['First_name']."</td>";
echo "<td>".$orgi['Last_name']."</td>";
echo "<td>".$orgi['Place']."</td>";
echo "<td>".$orgi['district_name']."</td>";
echo "<td>".$orgi['Email']."</td>";
echo "<td>".$orgi['Mobile']."</td>";

//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$orgi['Emp_id']."'>APPROVE</a> | <a href='delete.php?id=".$orgi['Emp_id']."'>DELETE</a></td>";
echo "<td><a name='' href='userdetail.php?id=".$orgi['userid']."'>Update</a> | <a href='deletes.php?id=".$orgi['userid']."' onClick=\"return confirm('Are you sure you want to delete?')\"></a></td>";


echo "</tr>";



}
?>
</tr>
</tr>
</table>
</body>
</html>


