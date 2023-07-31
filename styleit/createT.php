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

      input[type="submit"]{
			background-color: #1C4E80;
		}
	</style>
</head>
<div class="home-content">
<form method="post" action="<?php $_PHP_SELF ?>">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<h2 class="heading">Create</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
		        		    Material: 
		        		</td>
		        		<td class="td">
		        			<select name = "material" class="w3-input" required>
								<option disabled selected>--</option>
									<?php

                        		        $result = mysqli_query($con,"SELECT * from material_info");

                        		        while ($res = mysqli_fetch_array($result)) {
				        		              echo "<option value='".$res['Material_Name'] . "'>".$res['Material_Name']."</option>";
								            }
									?>
							</select>
                		</td>
					</tr>
					<tr>
						<td>
		        		    Color: 
		        		</td>
		        		<td class="td">
		        			<input type="color" name="cname" value="#102d5b" required>
                		</td>
					</tr>
					<tr>
						<td>
		        		    Pattern: 
		        		</td>
		        		<td class="td">
		        			<select name = "pattern" class="w3-input" required>
								<option disabled selected>--</option>
									<?php

                        		        $result = mysqli_query($con,"SELECT Pattern_Type from pattern_info");

                        		        while ($res = mysqli_fetch_array($result)) {
				        		              echo "<option value='".$res['Pattern_Type'] . "'>".$res['Pattern_Type']."</option>";
								            }
									?>
							</select>
                		</td>
					</tr>
					<tr>
						<td>
		        		    Collar: 
		        		</td>
		        		<td class="td">
		        			<select name = "collar" class="w3-input" required>
								<option disabled selected>--</option>
									<?php

                        		        $result = mysqli_query($con,"SELECT * from collar_info");

                        		        while ($res = mysqli_fetch_array($result)) {
				        		              echo "<option value='".$res['Collar_Type'] . "'>".$res['Collar_Type']."</option>";
								            }
									?>
							</select>
                		</td>
					</tr>
					<tr>
						<td>
		        		    Sleeve: 
		        		</td>
		        		<td class="td">
		        			<select name = "sleeve" class="w3-input" required>
								<option disabled selected>--</option>
									<?php

                        		        $result = mysqli_query($con,"SELECT * from sleeve_info");

                        		        while ($res = mysqli_fetch_array($result)) {
				        		              echo "<option value='".$res['Sleeve_Type'] . "'>".$res['Sleeve_Type']."</option>";
								            }
									?>
							</select>
                		</td>
					</tr>
					<tr>
						<td>
							Price:
						</td>
						<td>
							<input type="text" name="price" placeholder="Price" class="w3-input" required>
						</td>
					</tr>
					<tr align="center">
             		   <td colspan="2">
            		    	<div class="allbutton">
		    		        <input type="submit" name="create" value="Add To Collection">
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

$tid = $_SESSION['tid'];

if (isset($_POST['create'])) {

    $mname = $_POST['material'];
    $cname = $_POST['cname'];
    $pattern = $_POST['pattern'];
    $collar = $_POST['collar'];
    $sleeve = $_POST['sleeve'];
    $org = $_SESSION['org'];
    $price =$_POST['price'];

	$record = "INSERT INTO collection_info (Tailor_id,Tailor_Org,Material_Name,Material_Color,Pattern_Type,Collar_Type,Sleeve_Type,Design_Price) VALUES('$tid','$org','$mname','$cname','$pattern','$collar','$sleeve','$price')";

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
