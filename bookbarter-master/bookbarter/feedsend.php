<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?><?php

echo$name=$_POST['name'];
echo$email=$_POST['email'];
echo$sub=$_POST['subject'];
echo$mess=$_POST['mess'];
echo$email=$_SESSION["email"];
$sql="SELECT * FROM `user_register` WHERE `email`='$email'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

$uid=$row['uid'];

$sql1="INSERT INTO `feedback_table`(`user_id`, `user_name`, `user_email`, `subject`, `msg`, `is_active`) VALUES ('$uid','$name','$email','$sub','$mess','0')";
$res1=mysqli_query($conn,$sql1);
if($res1)
{
	header("location:feedback.php");
}


?>