<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$booktype_id=$_GET['booktype_id'];
$book_name=$_GET['book_name'];
$isactive=1;
$qry1="SELECT * FROM subbook_table WHERE book_name LIKE '".$book_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addsubbook.php?msg=Book Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO subbook_table(book_name,booktype_id,is_active) VALUES('".$book_name."','".$booktype_id."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addsubbook.php");
	}
}
