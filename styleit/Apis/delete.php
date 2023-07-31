<?php

$db = mysqli_connect('localhost','root','','test');
if(!$db){
  echo json_encode("Connection Issue");
}

if (isset($_POST['id'])) {
  $id = $_POST['id'];
}
else return;


$query = "DELETE FROM product WHERE id = '$id'";

$exe = mysqli_query($db,$query);

$arr = [];
if($exe){
  $arr["success"]="true";
}
else{
  $arr["success"]="false";
}
print(json_encode($arr));

?>