<?php
	include("connect.php");
	//SESSION_START();
	session_start();
	
	//$ud_ID =$_SESSION["userid"];
	   $u_type =$_SESSION["userid"];
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
$type = $_POST['type'];
$not = $_POST['n_o_t'];
$amount = $_POST['amount'];

$sqls="select * from login_tbl where userid='$u_type'";
$exe=mysqli_query($connection,$sqls);
$fe=mysqli_fetch_assoc($exe);
 $utid=$fe['user_type'];
$sql = "select usertype from usertype_tbl where usertypeid='$utid'"; //value querried from the table
	// echo $sql;
	
	$res = mysqli_query($connection, $sql);  //query executing function
	if (mysqli_num_rows($res)>0){
		$fetch = mysqli_fetch_assoc($res);
		//$uid=$fetch['usertype'];
$_SESSION["usertype"] = $fetch['usertype'];
$sql=  mysqli_query($connection, "select * from addplace_tbl where place_name='$name'");

if(mysqli_num_rows($sql)>0)
{
	echo "<script> alert('Place Already exist');window.location='../userplaceadd.php'</script>";
}
else{


if($utid==1)
{


//Insert Query of SQL
 $query = "insert into addplace_tbl(place_name,discription,contact,D_id,image,status) values ('$name', '$dis', '$contact', '$D_id','$path','0')";
$query_exes=mysqli_query($connection,$query); $querys = "insert into features_tbl(type,n_o_t,amount) values ('$type', '$not', '$amount')";
$query_exess=mysqli_query($connection,$querys);
//$sql=  mysqli_query($connection, "select * from addplace_tbl");
if($query_exes && $query_exess)
{
echo "<script> alert('Place Successfully added');window.location='../Addplace.php'</script>";
}
}
elseif($utid==3){
echo $query = "insert into addplace_tbl(place_name,discription,contact,D_id,image,status) values ('$name', '$dis', '$contact', '$D_id','$path','1')";
$query_exes=mysqli_query($connection,$query);
//$sql=  mysqli_query($connection, "select * from addplace_tbl");
if($query_exes)
{ 	
echo "<script> alert('Place Successfully added');window.location='../userplaceadd.php'</script>";
}
}
}
}
 //else{

 }
//mysql_close($connection); // Closing Connection with Server
?>