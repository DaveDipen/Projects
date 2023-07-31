<?php
require "dbconnect.php";
session_start();


if(isset($_POST['btn_sb']))
{
$id=$_POST['id'];
$subcat_name =$_POST['subcat_name'];
$cat_id=$_POST['cat_id'];

$qry = "UPDATE subcat_table SET subcat_name='".$subcat_name."' WHERE id='".$id."'";
echo $qry;
$rs = mysqli_query($conn,$qry);
if($rs) {
	
		header("location:managesubcat.php");

		}
}

?>