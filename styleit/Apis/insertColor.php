<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
	echo json_encode("Connection Issue");
}

$name = $_POST['name'];
$mname = $_POST['mname'];
$pname = $_POST['pname'];
$cname = $_POST['cname'];
$sname = $_POST['sname'];

$record = "INSERT INTO `colors`(`Color_Name`, `M_Name`, `P_Name`, `C_Name`, `S_Name`) VALUES ('$name','$mname','$pname','$cname','$sname')";


$res = mysqli_query($db,$record);

echo json_encode("Success");

?>