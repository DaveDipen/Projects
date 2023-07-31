<?php
error_reporting(0);
session_start();
require "dbconnect.php";
if(isset($_POST["signup"]))
{
 $fn=$_POST["fname"];
 $ln=$_POST['lname'];
 $em=$_POST['uname'];
 $pas=$_POST['pass'];
$g=$_POST['gender'];
$add=$_POST['number'];
 


$qry="INSERT INTO `user_register`(`fname`, `lname`, `uname`, `pass`, `gender`, `number`) VALUES ('".$fn."','".$ln."','".$em."','".$pas."','".$g."','".$add."')";
$qry1=mysqli_query($conn,$qry);
header("location:dashboard.php");
}
else
{
	echo "try again";
}
	


?>