<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM material_info WHERE Material_id = '$id'");

header("Location:addMaterial.php");

?>