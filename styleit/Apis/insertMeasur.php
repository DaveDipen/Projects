<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
	echo json_encode("Connection Issue");
}

$name = $_POST['name'];
$chest = $_POST['chest'];
$waist = $_POST['waist'];
$sleeve = $_POST['sleeve'];
$shoulder = $_POST['shoulder'];
$neck = $_POST['neck'];
$length = $_POST['length'];


$record = "INSERT INTO `measurment_info`(`U_Name`, `M_Chest`, `M_Waist`, `M_Sleeve`, `M_Shoulder`, `M_Neck`, `M_Length`) VALUES ('$name','$chest','$waist','$sleeve','$shoulder','$neck','$length')";
$res = mysqli_query($db,$record);
echo json_encode("Success");

?>