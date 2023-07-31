<?php

$db = mysqli_connect('localhost','root','','styleit');
if(!$db){
  echo json_encode("Connection Issue");
}

$name = $_POST['name'];
$pwd = $_POST['pwd'];

$result = mysqli_query($db,"SELECT * FROM user_info JOIN address_info on user_info.U_id = address_info.U_id WHERE user_info.U_userName= '$name' AND user_info.U_Password = '$pwd'");

$arr1 = array();

while ($res = mysqli_fetch_array($result)) {
  $arr1[] = $res;
}

echo json_encode($arr1);

?>