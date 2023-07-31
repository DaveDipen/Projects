<?php
include_once ("Config.php");
session_start();
	if (isset($_GET['s'])) {
	
		$state = $_GET['s'];

		$sql = mysqli_query($con,"SELECT * FROM city_info WHERE State_id = '$state'");
		echo "<option disabled selected>--</option>";
		while ($res = mysqli_fetch_array($sql)) {

			echo "<option value='".$res['City_Name'] . "'>".$res['City_Name']."</option>";

		}
	}
?>