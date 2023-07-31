<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
  echo json_encode("Connection Issue");
}

$arr1 = array();

if (isset($_POST['id'])) {
  $id = $_POST['id'];
}
else return;

$result = mysqli_query($db,"SELECT * FROM colors WHERE C_Id = '$id'");

while ($res = mysqli_fetch_array($result)) {
  $arr1[] = $res;
}

echo json_encode($arr1);

?>