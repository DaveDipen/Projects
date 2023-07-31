<?php
require 'dbconnect.php';
session_start();
echo $uid= $_GET["id"];

$uname= $_SESSION["email"];

$u="SELECT * FROM `user_register` WHERE `email`='$uname'";
$uu=mysqli_query($conn,$u);
$uuu=mysqli_fetch_assoc($uu);
echo $userid=$uuu['uid'];
echo $contact=$uuu['contact'];

echo $exchange="You have one book Exchange Request";

$sql="SELECT * FROM `postbook_table` WHERE `id`='$uid'";
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res);

echo $uuid= $row['uid'];

$sqll="INSERT INTO `exchange_table`(`uid`, `uuid`, `exchange_msg`, `contect_u`) VALUES ('$userid','$uuid','$exchange','$contact')";
$ress=mysqli_query($conn,$sqll);

if($ress)
{
	header("location:book-detail.php?id=$uid");
}


?>