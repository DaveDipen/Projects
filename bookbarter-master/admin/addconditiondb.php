<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$condition_name=$_GET['condition_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM condition_table WHERE condition_name LIKE '".$condition_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addcondition.php?msg=Condition Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO condition_table(condition_name,is_active) VALUES('".$condition_name."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addcondition.php");
	}
}
