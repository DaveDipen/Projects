<?php
require 'dbconnect.php';
echo$fn=$_POST['fname'];
echo$ln=$_POST['lname'];
echo$email=$_POST['email'];
echo$pass=$_POST['password'];
$r=$_POST['radio'];
if($r=="Male")
{
	$rr=0;
}
else
{
	$rr=1;
}
echo $rr;
echo$add=$_POST['address'];
echo$con=$_POST['contact'];
echo$city=$_POST['city'];
echo$area=$_POST['area'];
echo$sq=$_POST['sq'];
echo$sa=$_POST['sa'];

$update=$_POST['update'];
$uid=$_POST['id'];


$sql="UPDATE `user_register` SET `fname`='$fn',`lname`='$ln',`email`='$email',`password`='$pass',`gender`='$rr',`address`='$add',`contact`='$con',`city`='$city',`area`='area',`sq`='$sq',`sa`='$sa' WHERE `email`='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
header("location:myaccount.php");	
}


?>