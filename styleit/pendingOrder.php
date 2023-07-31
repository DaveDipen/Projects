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
				<h2 class="heading">Pending Order</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>User</th>
						<th>Design</th>
						<th>Status</th>
					</tr>
					<?php

					$tid = $_SESSION['tid'];
					
					$result = mysqli_query($con,"SELECT * FROM order_info JOIN design_info ON order_info.Design_id = design_info.Design_id JOIN user_info ON order_info.U_id = user_info.U_id JOIN tailor_info ON order_info.Tailor_id = tailor_info.Tailor_id WHERE tailor_info.Tailor_id = '$tid' AND order_info.Order_Status = 'Pending'");
					$no = 1;				

					while ($res = mysqli_fetch_array($result)) {
						$oid = $res['Order_id'];
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$res['U_Name']."</td>";
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
                            	    <td colspan="2" align="center">
                            	    	<a href="orderDetail.php?id=<?php echo $oid?>">View More</a>
                            	    </td>
                            	</tr>
							</table>
						</td>
						<?php
							echo "<td><button type='submit' name='finish' formaction='pendingOrder?id=$oid' class='button'>Finish</button></td>";						
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

<?php

if (isset($_POST['finish'])) {

    $id = $_GET['id'];

    $record = "UPDATE order_info SET Order_Status='Finish' WHERE Order_id = '$id'";

    if (mysqli_query($con, $record)) {
		
	}
	
	if($record){
        $_SESSION['status']="Status Updated";
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

