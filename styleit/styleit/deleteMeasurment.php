<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM measurment_info WHERE M_id = '$id'");

header("Location:measurmentU.php");

?>