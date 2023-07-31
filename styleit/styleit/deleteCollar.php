<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM collar_info WHERE Collar_id = '$id'");

header("Location:addCollar.php");

?>