<?php
require 'dbconnect.php';
echo$fn=$_POST['fn'];
echo$ln=$_POST['ln'];
echo$email=$_POST['email'];
echo$mo=$_POST['mo'];
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
$pass=$_POST['pass'];
$update=$_POST['update'];
$uname=$_POST['una'];


$sql="UPDATE `adminreg_table` SET `fname`='$fn',`lname`='$ln',`email`='$email',`password`='$pass',`gender`='$rr',`contact`='$mo' WHERE `uname`='$uname'";
$res=mysqli_query($conn,$sql);
if($res)
{
header("location:profilemanage.php");	
}


?>