
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

	$pass =$_POST['password'];//password value from the form
	//echo $username;

	$sql = "select * from login_tbl where user_name='$user' and password ='$pass' and status=1"; //value querried from the table
	echo $sql;
	
	$res = mysqli_query($connection, $sql);  //query executing function
	if ($res){
		$fetch = mysqli_fetch_assoc($res);
			if ($fetch['user_type'] == 'business') {
//			$_SESSION["name"]=$fetch['name'];
				$_SESSION["userid"] = $fetch['userid'];
				$_SESSION["user_name"] = $user;
				// setting username as session variable 
				 header("location:../register.html");	//home page or the dashboard page to be redirected
	
			// } elseif ($fetch['user_type'] == 'buisiness') {
			// 	$_SESSION["Username"] = $user;	// setting username as session variable 
			// 	$_SESSION["userid"] = $fetch['userid'];
			// 	header("location:../staff.php");
			// } elseif ($fetch['user_type'] == 'user') {
			// 	$_SESSION["Username"] = $user;	// setting username as session variable 
			// 	$_SESSION["userid"] = $fetch['userid'];
			// 	header("location:../user.php");
			// }
	}

}
   //else{
    //    echo '<script> alert("Unauthorized access!!!");</script>';
    //}
}
?>