<?php

session_start();
include_once ("Config.php");

$id = $_GET['id'];

$record = mysqli_query($con, "DELETE FROM sleeve_info WHERE Sleeve_id = '$id'");

header("Location:addSleeve.php");

?>