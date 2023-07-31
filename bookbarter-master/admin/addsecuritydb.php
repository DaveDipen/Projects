<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$security_name=$_GET['security_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM security_table WHERE security_name LIKE '".$security_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addsecurity.php?msg=security Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO security_table(security_name,is_active) VALUES('".$security_name."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addsecurity.php");
	}
}
