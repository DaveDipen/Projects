<?php

$db = mysqli_connect('localhost','root','','styleit');
if(!$db){
  echo json_encode("Connection Issue");
}

$arr1 = array();
// SELECT * FROM `design_info` JOIN user_info on design_info.U_id = user_info.U_id WHERE design_info.Tailor_id IS NULL AND user_info.U_id = 5
$result = mysqli_query($db,"SELECT * FROM `design_info` WHERE `Tailor_id` IS NULL AND U_id = 5");

while ($res = mysqli_fetch_array($result)) {
  $arr1[] = $res;
}

echo json_encode($arr1);

?>