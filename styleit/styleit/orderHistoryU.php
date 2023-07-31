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
<form method="post" action="<?php $_PHP_SELF ?>">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<h2 class="heading">Order History</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Design</th>
						<th>Cost</th>
						<th>Tailor</th>
					</tr>
					<?php
					$uid = $_SESSION['uid'];
					$result = mysqli_query($con,"SELECT * FROM order_info JOIN design_info ON order_info.Design_id = design_info.Design_id JOIN user_info ON order_info.U_id = user_info.U_id JOIN tailor_info ON order_info.Tailor_id = tailor_info.Tailor_id JOIN measurment_info ON measurment_info.M_id = order_info.M_id WHERE Order_Status = 'Finish' AND order_info.U_id = '$uid'");

					$no = 1;
					while ($res = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>".$no."</td>";
						$tid = $res['Tailor_id'];
						$did = $res['Design_id'];
						$mid = $res['M_id'];
						
						?>
						<td>
							<table>
								<tr>
									<td>Measurment of</td>
									<td><?php echo $res['User_Name'];?></td>
									<td>Material</td>
									<td><?php echo $res['Material_Name'];?></td>
                            	</tr>
                            	<tr>
                            	    <td>Pattern</td>
                            	    <td><?php echo $res['Pattern_Type'];?></td>
                            	    <td>Color</td>
                                	<td style="background-color: <?php echo $res['Material_Color'];?>;"></td>
                            	    
                            	</tr>
                            	<tr>
                            	    <td>Sleeve</td>
                            	    <td><?php echo $res['Sleeve_Type'];?></td>
                            	    <td>Collar</td>
                            	    <td><?php echo $res['Collar_Type'];?></td>
                            	</tr>
							</table>
						</td>
						<td><?php echo $res['Order_Cost'];?></td>
						<td><a href="tailorInfo1.php?id=<?php echo $tid?>"><?php echo $res['Tailor_Name'];?></a></td>		
                	<?php
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
