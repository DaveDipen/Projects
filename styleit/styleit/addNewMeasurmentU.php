<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'userDashboard.php';
?>
<head>
	<style>
		tr, td, th{
        padding: 2% 20px;
        font-size: 20px;
        height: 85%;
      }
	</style>
</head>
<div class="home-content">
<form method="post">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<h2 class="heading">Measurments</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							Name
						</td>
						<td>
							<input type="text" name="uname" required placeholder="Name" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Chest</td>
						<td>
							<input type="text" name="chest" required placeholder="40" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Waist</td>
						<td>
							<input type="text" name="waist" required placeholder="38" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Sleeve Length</td>
						<td>
							<input type="text" name="sleeve" required placeholder="25" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Shoulder</td>
						<td>
							<input type="text" name="shoulder" required placeholder="17.5" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Neck</td>
						<td>
							<input type="text" name="neck" required placeholder="15.5" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr>
						<td>Length</td>
						<td>
							<input type="text" name="length" required placeholder="28" min="1" pattern="\d+(\.\d+)?" class='w3-input'>
						</td>
					</tr>
					<tr align="center">
             		   <td colspan="2">
            		    	<div class="allbutton">
		    		        <input type="submit" name="add" value="Add">
		    		        </div>
		    		    </td>
		    		</tr>
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	
<?php	


if (isset($_POST['add'])) {

	$name = $_POST['uname'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $sleeve = $_POST['sleeve'];
    $shoulder = $_POST['shoulder'];
    $neck = $_POST['neck'];
    $length = $_POST['length'];
    $uid = $_SESSION['uid'];

    $record = "INSERT INTO measurment_info (U_id,User_Name,M_Chest,M_Waist,M_Sleeve,M_Shoulder,M_Neck,M_Length) VALUES('$uid','$name','$chest','$waist','$sleeve','$shoulder','$neck','$length')";

    if (mysqli_query($con, $record)) {
		//echo "Data Inserted ";
	}

	if($record){
        $_SESSION['status']="Data Inserted";
        $_SESSION['status_code']="success";
    }
    else{
        $_SESSION['status']="data is not inserted";
        $_SESSION['status_code']="error";
    }

}

?>


<script src="alert.min.js"></script>
<?php
if(isset($_SESSION['status']))
{
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "ok done!",
        });
    </script>
    <?php
        unset($_SESSION['status']);
    }
?>
