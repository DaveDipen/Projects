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
				<h2 class="heading">Design</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>User</th>
						<th>Material</th>
						<th>Color</th>
						<th>Pattern</th>
						<th>Collar</th>
						<th>Sleeve</th>
					</tr>
					<?php
					$uid = $_SESSION['uid'];
					$result = mysqli_query($con,"SELECT * FROM design_info JOIN measurment_info on measurment_info.M_id = design_info.M_id WHERE design_info.U_id = '$uid'");
					$no = 1;
					while ($res = mysqli_fetch_array($result)) {
						$did = $res['Design_id'];
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$res['User_Name']."</td>";						
                        echo "<td>".$res['Material_Name']."</td>";
                        echo "<td style= 'background-color:". $res['Material_Color']."';></td>";
                        echo "<td>".$res['Pattern_Type']."</td>";
                        echo "<td>".$res['Collar_Type']."</td>";
                        echo "<td>".$res['Sleeve_Type']."</td>";
                        echo "</tr>";
                        $no+=1;
					}

					?>
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	
