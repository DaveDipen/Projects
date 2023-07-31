<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'userDashboard.php';
$tid = $_GET['tid'];
?>
<head>
	<style>
		tr, td, th{
        padding: 2% 20px;
        font-size: 20px;
        height: 85%;
      }
      .link{
            font-size: 14px;
            text-decoration: none;
            background-color: #0A2558; 
            border: solid #0A2558;              
            padding-bottom: 0px;
            padding-top: 26px;
            padding-right: 0px;
            padding-left: 0px;
            color: white; 
            cursor: pointer;
        }
        .links{
            padding-left: 95%;
        }
        .head span{
             width:13px;
             display: inline-block;
        }
        .link .size{
            font-size: 50px;
            align-content: center;
        }
	</style>
</head>
<div class="home-content">
<form method="post">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<span id="head1"><h2 class="heading">Place Order</h2></span>    
                <span id="head2" class="links"><a href="viewCollection.php?id=<?php echo $tid ?>" class="link"><i class="bi-x-square size"></i></a></span>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<?php

					$cid = $_GET['id'];
					$result = mysqli_query($con,"SELECT * FROM collection_info WHERE Collection_id = '$cid'");

					while($res = mysqli_fetch_array($result)){
						$collection = $res['Collection_id'];
					?>
					<tr>
						<td>
		        		    Material: 
		        		</td>
		        		<td class="td">
		        			<input type="text" disabled value="<?php echo $res['Material_Name'];?>" class='w3-input'>
		        			<input type="hidden" name="collectionId" value="<?php echo $res['Collection_id'];?>">
                		</td>
					</tr>
					<tr>
						<td>
		        		    Color: 
		        		</td>
		        		<td class="td" style="background-color: <?php echo $res['Material_Color'];?>;"></td>
					</tr>
					<tr>
						<td>
		        		    Pattern: 
		        		</td>
		        		<td class="td">
		        			<input type="text" disabled value="<?php echo $res['Pattern_Type'];?>" class='w3-input'>	
		        			
                		</td>
					</tr>
					<tr>
						<td>
		        		    Collar: 
		        		</td>
		        		<td class="td">
		        			<input type="text" disabled value="<?php echo $res['Collar_Type'];?>" class='w3-input'>	
		        			
                		</td>
					</tr>
					<tr>
						<td>
		        		    Sleeve: 
		        		</td>
		        		<td class="td">
		        			<input type="text" disabled value="<?php echo $res['Sleeve_Type'];?>" class='w3-input'>
		        			
                		</td>
					</tr>
					<tr>
						<td>
							Price
						</td>
						<td>
							<input type="text" name="price" value="<?php echo $res['Design_Price'];?>" class='w3-input'>
						</td>
					</tr>
				<?php
			}
				?>
					<tr>
						<td>
							Measurment:
						</td>
						<td class="td">
							<select name = "user" class="w3-input" required>
								<option disabled selected>--</option>
									<?php

										$uid = $_SESSION['uid'];

                        		        $result = mysqli_query($con,"SELECT * from measurment_info WHERE U_id = $uid");

                        		        $n = 1;
                        		        while ($res = mysqli_fetch_array($result)) {
				        		            echo "<option value='".$res['M_id'] . "'>".$n." : ".$res['User_Name']."</option>";
				        		            $n += 1;
								        }
									?>
							</select>
						</td>
					</tr>
					<tr align="center">
             		   <td colspan="2">
            		    	<div class="allbutton">
		    		        <input type="submit" name="place" value="Place Order">
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


if (isset($_POST['place'])) {

    
    $mid = $_POST['user'];
    $collection = $_POST['collectionId'];
    $tid = $_GET['tid'];
    $uid = $_SESSION['uid'];
    $price = $_POST['price'];

    $record = "INSERT INTO order_info (U_id,M_id,Tailor_id,Collection_id,Order_Cost) VALUES('$uid','$mid','$tid','$collection','$price')";

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
