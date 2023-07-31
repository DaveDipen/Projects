<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'adminDashboard.php';
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
				<h2 class="heading">Add City</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
		        		    States 
		        		</td>
		        		<td class="td">
		        			<select name="state" class="w3-input">
                                <option selected disabled>--</option>
                                <?php
                                	$result = mysqli_query($con,"SELECT * FROM state_info");
                                	while ($res = mysqli_fetch_array($result)) {
                                		echo "<option value='".$res['State_id'] . "'>".$res['State_Name']."</option>";
                                	}
                                ?>
                            </select>
                		</td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="cname" required class="w3-input" placeholder="City"></td>
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
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	
<?php	


if (isset($_POST['add'])) {

    	$cname = $_POST['cname'];
    	$sid = $_POST['state'];

    	$record = "INSERT INTO city_info(State_id,City_Name) VALUES ('$sid','$cname')";

    	if (mysqli_query($con, $record)) {
		
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
