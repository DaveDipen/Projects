<?php
error_reporting(0);
session_start();
require "dbconnect.php";
if(isset($_POST["signup"]))
{
 $fn=$_POST["fname"];
 $ln=$_POST['lname'];
 $em=$_POST['email'];
 $pas=$_POST['pass'];
$g=$_POST['gender'];
$add=$_POST['address'];
$con=$_POST['contact'];
 $ci=$_POST['city'];
}
$ar=$_POST['area'];
$sqq=$_POST['sq'];
 $saa=$_POST['sa'];
 $isactive=1;


$qry="INSERT INTO `user_register`(`fname`, `lname`, `email`, `pass`, `gender`, `address`,`contact`, `city`, `area`, `sq`, `sa` , `is_active`) VALUES ('".$fn."','".$ln."','".$em."','".$pas."','".$g."','".$add."','".$con."','".$ci."','".$ar."','".$sqq."','".$saa."','".$isactive."')";
$qry1=mysqli_query($conn,$qry);

header("location:login.php");


?>