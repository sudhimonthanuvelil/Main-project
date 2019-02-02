<?php
include "dbcon.php";
header("Access-control-Allow-Origin: *");
header("Access-control-Allow-Methods: PUT,GET,POST");
header("Access-control-Allow-Headers: Origin,X-Requested-With,Content-Type,Accept");
$postdata=file_get_contents("php://input");
$request=json_decode($postdata);

// print_r($request->data->username);

$username=mysqli_real_escape_string($con,trim($request->data->uname));
$password=mysqli_real_escape_string($con,trim($request->data->pword));


$sql="INSERT INTO `login`(`uname`,`pword`,`status`) VALUES('$username','$password',1)";
if(mysqli_query($con, $sql))
{
$student=[
'uname' => $username,
'pword'=> $password
];
echo json_encode(['data'=>$student]);
}