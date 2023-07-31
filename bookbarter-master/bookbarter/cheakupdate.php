<?php
ob_start();
session_start();
require 'dbconnect.php';
echo"<br>".$fname=$_POST['fname'];
echo"<br>".$lname=$_POST['lname'];
echo"<br>".$email=$_POST['email'];
echo"<br>".$pass=$_POST['pass'];
echo"<br>".$g=$_POST['radio'];
if($g="Male")
{
	echo"<br>".$gg=0;
}
else
{
	echo"<br>".$gg=1;
}
echo"<br>".$add=$_POST['address'];
echo"<br>".$con=$_POST['contact'];
echo"<br>".$city=$_POST['city'];
echo"<br>".$area=$_POST['area'];
echo"<br>".$sq=$_POST['sq'];
echo"<br>".$sa=$_POST['sa'];
echo"<br>".$semail=$_POST['id'];

$sql="UPDATE `user_register` SET `fname`='$fname',`lname`='$lname',`email`='$email',`pass`='$pass',`gender`='$gg',`address`='$add',`contact`='$con',`city`='$city',`area`='$area',`sq`='$sq',`sa`='$sa' WHERE `uid`='$semail'";
$res=mysqli_query($conn,$sql);

if ($res)
{
	header("location:myaccount.php");
}

?>