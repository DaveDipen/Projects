<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM pattern_info WHERE Pattern_id = '$id'");

header("Location:addPattern.php");

?>