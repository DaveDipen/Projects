<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
	echo json_encode("Connection Issue");
}

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$record = "INSERT INTO `user_info`(`U_Email`, `U_Password`) VALUES ('$email','$pwd')";
$res = mysqli_query($db,$record);
echo json_encode("Success");

?>