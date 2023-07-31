<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
				<h2 class="heading">Offers</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Design</th>
						<th>Tailor</th>
						<th>Cost</th>
						<th>Offer</th>
					</tr>
					<?php
					$uid = $_SESSION['uid'];
					$result = mysqli_query($con,"SELECT * FROM offer_info JOIN user_info ON offer_info.U_id = user_info.U_id JOIN design_info ON design_info.Design_id = offer_info.Design_id JOIN measurment_info on measurment_info.M_id = offer_info.M_id JOIN tailor_info ON tailor_info.Tailor_id = offer_info.Tailor_id WHERE offer_info.U_id = '$uid' AND offer_info.Offer_Answer = 'Pending'");
					$no = 1;
					while ($res = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>".$no."</td>";
						$oid = $res['Offer_id'];
						$tid = $res['Tailor_id'];
						$did = $res['Design_id'];
						$cost = $res['Offer_Price'];
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
						<td><a href="tailorInfo1.php?id=<?php echo $tid?>"><?php echo $res['Tailor_Name'];?></a></td>
						<td><?php echo $res['Offer_Price'];?></td>
						<td>
                            <button type="submit" name="accept" formaction="offer.php?id=<?php echo $oid?>&tid=<?php echo $tid; ?>&cost=<?php echo $cost; ?>&did=<?php echo $did?>&mid=<?php echo $mid?>" class="button"><i class="bi-check-square size"></i></button>
                            <button type="submit" name="reject" formaction="offer.php?id=<?php echo $oid?>" class="button"><i class="bi-x-square size"></i>
                            </button>
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
<?php	


if (isset($_POST['accept'])) {

    $id = $_GET['id'];
    $tid = $_GET['tid'];
    $cost = $_GET['cost'];
    $did = $_GET['did'];
    $mid = $_GET['mid'];
    $uid = $_SESSION['uid'];
    $record1 = "UPDATE offer_info SET Offer_Answer='Accepted' WHERE Offer_id = '$id'";
    $record = "INSERT INTO order_info(Design_id,Tailor_id,U_id,M_id,Order_Cost,Order_Status) VALUES ('$did','$tid','$uid','$mid','$cost')";

    if (mysqli_query($con, $record)) {
		
	}
	if (mysqli_query($con, $record1)) {
		
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



if (isset($_POST['reject'])) {

    $id = $_GET['id'];

    $record = "UPDATE offer_info SET Offer_Answer='Rejected' WHERE Offer_id = '$id'";

    if (mysqli_query($con, $record)) {
		
	}
	
	if($record){
        $_SESSION['status']="Offer Rejected";
        $_SESSION['status_code']="error";
    }
    else{
        $_SESSION['status']="data is not inserted";
        $_SESSION['status_code']="success";
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
