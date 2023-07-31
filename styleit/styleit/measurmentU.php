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

      .bgheading{
      	background: #1C4E80;
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
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Chest</th>
						<th>Waist</th>
						<th>Sleeve Length</th>
						<th>Shoulder</th>
						<th>Neck</th>
						<th>Length</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
					$uid = $_SESSION['uid'];
					$no = 1;
					$result = mysqli_query($con,"SELECT * FROM measurment_info JOIN user_info on measurment_info.U_id = user_info.U_id WHERE user_info.U_id = $uid");

					while ($res = mysqli_fetch_array($result)) {
					$mid = $res['M_id'];
					?>
					<tr align="center">
						<td><?php echo $no; ?></td>
						<td><?php echo $res['User_Name']; ?></td>
						<td><?php echo $res['M_Chest']; ?></td>
						<td><?php echo $res['M_Waist']; ?></td>
						<td><?php echo $res['M_Sleeve']; ?></td>
						<td><?php echo $res['M_Shoulder']; ?></td>
						<td><?php echo $res['M_Neck']; ?></td>
						<td><?php echo $res['M_Length']; ?></td>
						<td><a href="editMeasurment.php?id=<?php echo $mid?>">Edit</a></td>
						<td><a href="deleteMeasurment.php?id=<?php echo $mid?>">Delete</a></td>
					</tr>
					<?php	
					   $no += 1;
					}

					?>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td colspan="2">
							<label><h3>Add New Measurment</h3></label>
						</td>
						<td>
							<a href="addNewMeasurmentU.php">Add</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	
