<?php
	include("connect.php");
	$path= "../upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], $path);
	$sql="select * from usertype_tbl where usertype='user'";
	$rec=mysqli_query($connection,$sql); 
	$recs=mysqli_fetch_array($rec);
	$tid1=$recs['usertypeid'];
	$query="insert into login_tbl (`user_name`, `password`, `user_type`, `status`) values(
		\"".$_POST['Email']."\",
		\"".md5($_POST['password'])."\",
		'$tid1',
		1
		
)";
				//echo $query;
				
		$query_exe=mysqli_query($connection,$query);
		$email=$_POST['Email'];
		$qry="select * from login_tbl where user_name='$email'";
		//echo $qry;
		$ex_qry=mysqli_query($connection,$qry);
		$fe_qry=mysqli_fetch_array($ex_qry);
		$uid=$fe_qry['userid'];

$querys="insert into users_registration_tbl (`userid`,`First_name`, `Last_name`, `Email`,`D_id`, `profile_pic`,`Place`, `Mobile`) values(
	'$uid',
	\"".$_POST['firstname']."\",
	\"".$_POST['lastname']."\",
	\"".$_POST['Email']."\",
	\"".$_POST['District']."\",
	'$path',
	\"".$_POST['place']."\",
	\"".$_POST['mobile']."\"
)";

		
$query_exes=mysqli_query($connection,$querys);
 header("location:../login.php");
?>