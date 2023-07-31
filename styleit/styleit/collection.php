<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'tailorDashboard.php';
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
				<h2 class="heading">Collection</h2>
			</td>
		</tr>
		<tr>
			<td>
				<a href="createT.php">Add New Design</a>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Design</th>
						<th>Cost</th>
					</tr>
					<?php
					$tid = $_SESSION['tid'];
					$no = 1;
					
					$result = mysqli_query($con,"SELECT * FROM design_info JOIN tailor_info on tailor_info.Tailor_id = design_info.Tailor_id WHERE design_info.Tailor_id = '$tid';");

					while($res = mysqli_fetch_array($result)){

						echo "<tr>";
						echo "<td>".$no."</td>";
                    	?>
                    	<td>
							<table>
								<tr>
									<td>Material</td>
									<td><?php echo $res['Material_Name'];?></td>
                                	<td>Color</td>
                                	<td style="background-color: <?php echo $res['Material_Color'];?>;"></td>
                            	</tr>
                            	<tr>
                            	    <td>Pattern</td>
                            	    <td><?php echo $res['Pattern_Type'];?></td>
                            	    <td>Collar</td>
                            	    <td><?php echo $res['Collar_Type'];?></td>
                            	</tr>
                            	<tr>
                            	    <td>Sleeve</td>
                            	    <td><?php echo $res['Sleeve_Type'];?></td>
                            	</tr>
							</table>
						</td>
						<td>
							<?php echo $res['Design_Price'] ?>
						</td>
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
