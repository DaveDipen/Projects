<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM city_info WHERE City_id = '$id'");

header("Location:addCity.php");

?>