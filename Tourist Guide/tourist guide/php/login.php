
<?php
include 'connect.php'; //database connection page
//include('logout.php');
session_start();

if (isset($_POST["submit"])) {
    
//    $url = 'https://www.google.com/recaptcha/api/siteverify';
//    $privatekey = "6LfTwkAUAAAAABv0qaagKeb3f_WpISGvWkTXRsGN";
//    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
//    $data = json_decode($response);
//
//    if (isset($data->success) AND $data->success == true)
   //  {



	$user = $_POST['username'];//username value from the form

	$pass =md5($_POST['password']);//password value from the form
	
	//echo $username;

	$sql = "select * from login_tbl where user_name='$user' and password ='$pass' and status=1"; //value querried from the table
	// echo $sql;
	
	$res = mysqli_query($connection, $sql);  //query executing function
	if (mysqli_num_rows($res)>0){
		$fetch = mysqli_fetch_assoc($res);
			if ($fetch['user_type'] == '1') {
//			$_SESSION["name"]=$fetch['name'];
				$_SESSION["userid"] = $fetch['userid'];
				$_SESSION["user_name"] = $user;
				// setting username as session variable 
				 header("location:../adminhome.php");	//home page or the dashboard page to be redirected
	
			 } elseif ($fetch['user_type'] == '2') {
				$_SESSION["Username"] = $user;	// setting username as session variable 
				$_SESSION["userid"] = $fetch['userid'];
				header("location:../regis/businesshome.php");
			 } elseif ($fetch['user_type'] == '3') {
			 	$_SESSION["Username"] = $user;	// setting username as session variable 
			 	$_SESSION["userid"] = $fetch['userid'];
			 	header("location:../regis/userhome.php");
			 }
	}
	else{
		// header("location:login.php");
		   echo "<script>alert('Unauthorized access!!!');window.location='../login.php';</script>";
		}
	
}


?>