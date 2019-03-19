<?php
	include("connect.php");
	$path= "../upload/".$_FILES['fileupload']['name'];
		//echo($path);
        copy($_FILES['fileupload']['tmp_name'], $path);
	$sql="select * from usertype_tbl where usertype='business'";
	$rec=mysqli_query($connection,$sql); 
	$recs=mysqli_fetch_array($rec);
    $tid=$recs['usertypeid'];
    $q="insert into org_tbl (`org_name`, `org_type`, `org_desc`, `licno`) values(
                                    
        \"".$_POST['orgname']."\",
        \"".$_POST['orgtype']."\",
        \"".$_POST['orgdiscription']."\",
        \"".$_POST['licenseno']."\"
        
)";
echo $q;
$lic=$_POST['licenseno'];
$exe=mysqli_query($connection,$q);
$s="select * from org_tbl where licno='$lic'";
$sq=mysqli_query($connection,$s);
$fet=mysqli_fetch_array($sq);
		$orgid=$fet['org_id'];
	$querys="insert into users_registration_tbl (`org_id`,`D_id`, `Email`, `profile_pic`,`Place`, `Mobile`) values(
                                    '$orgid',
                                    \"".$_POST['District']."\",
									\"".$_POST['Email']."\",
									'$path',
									\"".$_POST['place']."\",
                    
                                    \"".$_POST['contact']."\"
                )";
                echo $querys;
		$query_exe=mysqli_query($connection,$querys);
		$email=$_POST['Email'];
		$qry="select userid from users_registration_tbl where Email='$email'";
		$ex_qry=mysqli_query($connection,$qry);
		$fe_qry=mysqli_fetch_array($ex_qry);
		$uid=$fe_qry['userid'];
		$querys="insert into login_tbl (`userid`,`user_name`, `password`, `user_type`, `status`) values(
			'$uid',
			\"".$_POST['Email']."\",
			\"".$_POST['password']."\",
			'$tid',
			1
			
)";
$query_exes=mysqli_query($connection,$querys);
		echo "Sign Up Successful.<br>Login to continue.";
?>