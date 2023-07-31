<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
  echo json_encode("Connection Issue");
}

$arr1 = array();

$result = mysqli_query($db,"SELECT * FROM product");

while ($res = mysqli_fetch_array($result)) {
  $arr1[] = $res;
  
}

echo json_encode($arr1);

?>