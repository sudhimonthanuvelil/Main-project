<?php
include 'connect.php'; 
//$id=$_SESSION['userid'];
 $qry ="SELECT * From users_registration_tbl as r, login_tbl as l,  org_tbl as o ,district as d WHERE r.Status='0' and r.userid=l.userid and r.D_id=d.D_id and r.org_id=o.org_id";
//echo $qry;
	$records= mysqli_query($connection,$qry);
?>
<html>
<head>
<title>Organization Details</title>
</head>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Organization Name</th>
<th>Type of Organization</th>
<th>Description</th>
<th>Licence No</th>
<th>Place</th>
<th>District</th>
<th>Email</th>
<th>Mobile</th>
<th>Photo</th>
<th>Cancel</th> 
<tr>
<?php


while($user=mysqli_fetch_assoc($records)){
	// $did=$user['Did'];
	// $dist="select * from district where D_id='$did'";
	// $record= mysqli_query($connection,$dist);
	// $dis=mysqli_fetch_assoc($record);

echo "<tr>";
echo "<td>".$user['org_name']."</td>";
echo "<td>".$user['org_type']."</td>";
echo "<td>".$user['org_desc']."</td>";
echo "<td>".$user['licno']."</td>";
echo "<td>".$user['Place']."</td>";
echo "<td>".$user['district_name']."</td>";
echo "<td>".$user['user_name']."</td>";
echo "<td>".$user['Mobile']."</td>";
echo '<td><img src="'.$user['profile_pic'].'" width="150px" height="150px"></td>';
// echo "<td>".$user['Aadhar']."</td>";


//echo "<td><a onclick='SAVE'  href='aprov.php?id=".$user['userid']."'>APPROVE</a> | <a href='delete.php?id=".$user['userid']."'>DELETE</a></td>";
echo "<td><a href='aprovs.php?id=".$user['userid']."' onClick=\"return confirm('Are you sure you want to Approve?')\">APPROVE</a> |<a href='deletes.php?id=".$user['userid']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


echo "</tr>";



}
?>
</tr>
</tr>
</table>
</body>
</html>



