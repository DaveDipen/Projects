<?php
session_start();
require 'dbconnect.php';
var_dump($_POST);
var_dump($_FILES);
var_dump($_SESSION);
$id = $_SESSION['id'];
$myfile = "";
$myfile1 = "";
$myfile2 = "";
$myfile3 = "";
echo 'id:'. $id;
if($_FILES['myfile']['name']!="")
{
	require 'fileupload.php';
	$myfile = $_FILES['myfile']['name'];
	echo "$myfile";
}
if($_FILES['myfile1']['name']!="")
{
	require 'fileupload1.php';
	$myfile1 = $_FILES['myfile1']['name'];
	echo "$myfile1";
}
if($_FILES['myfile2']['name']!="")
{
	require 'fileupload2.php';
	$myfile2 = $_FILES['myfile2']['name'];
	echo "$myfile2";
}
if($_FILES['myfile3']['name']!="")
{
	require 'fileupload3.php';
	$myfile3 = $_FILES['myfile3']['name'];
	echo "$myfile3";
}

$bookname = $_POST['name'];
$bid = $_POST['sbt'];
$cid = $_POST['sbc'];
$catid = $_POST['sbcc'];
$bdd = $_POST['bd'];

$qry="INSERT INTO `postbook_table`(`uid`, `name`, `booktype_id`, `condition_id`, `cat_id`, `img1`, `img2`, `img3`, `img4`, `book_dec`, `is_active`) VALUES ('$id','$bookname','$bid','$cid','$catid','$myfile','$myfile1','$myfile2','$myfile3','$bdd','0')";
$res=mysqli_query($conn,$qry);
if($res)
		{
			header("location:index.php?success");
		}
?>