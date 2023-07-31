<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$cat_id=$_GET['cat_id'];
$subcat_name=$_GET['subcat_name'];
$isactive=1;
$qry1="SELECT * FROM subcat_table WHERE subcat_name LIKE '".$subcat_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addarea.php?msg=Area Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO subcat_table(subcat_name,cat_id,is_active) VALUES('".$subcat_name."','".$cat_id."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addsubcat.php");
	}
}
