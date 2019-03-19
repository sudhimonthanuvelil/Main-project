<?php
	include("connect.php");
	$path= "../upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], $path);
	$sql="select * from usertype_tbl where usertype='user'";
	$rec=mysqli_query($connection,$sql); 
	$recs=mysqli_fetch_array($rec);
	$tid1=$recs['usertypeid'];
	$query="insert into users_registration_tbl (`First_name`, `Last_name`, `Address`, `Email`, `profile_pic`,`Place`, `Mobile`) values(
									\"".$_POST['firstname']."\",
									\"".$_POST['lastname']."\",
									\"".$_POST['Address']."\",
									\"".$_POST['Email']."\",
									'$path',
									\"".$_POST['place']."\",
									\"".$_POST['mobile']."\"
				)";
				
		$query_exe=mysqli_query($connection,$query);
		$email=$_POST['Email'];
		$qry="select userid from users_registration_tbl where Email='$email'";
		$ex_qry=mysqli_query($connection,$qry);
		$fe_qry=mysqli_fetch_array($ex_qry);
		$uid=$fe_qry['userid'];
		$querys="insert into login_tbl (`userid`,`user_name`, `password`, `user_type`, `status`) values(
			'$uid',
			\"".$_POST['Email']."\",
			\"".$_POST['password']."\",
			'$tid1',
			1
			
)";

		
$query_exes=mysqli_query($connection,$querys);
		echo "Sign Up Successful.<br>Login to continue.";
?>