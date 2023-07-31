<?php
require "dbconnect.php";
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$book_name =$_GET['book_name'];
$booktype_id=$_GET['booktype_id'];

$qry = "UPDATE subbook_table SET book_name='".$book_name."' WHERE id='".$id."'";
echo $qry;
$rs = mysqli_query($conn,$qry);
if($rs) {
	
		header("location:managesubbook.php");

		}
}

?>