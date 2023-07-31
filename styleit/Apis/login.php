<?php

$db = mysqli_connect('localhost','root','','styleit');
if(!$db){
  echo json_encode("Connection Issue");
}

$name = $_POST['name'];
$pwd = $_POST['pwd'];

$result = mysqli_query($db,"SELECT * FROM user_info WHERE U_userName= '$name' AND U_Password = '$pwd'");

$count = mysqli_num_rows($result);

$arr = array();

if ($count == 1) {
  echo json_encode("Success");
}
else{
  echo json_encode("Error");
}

?>