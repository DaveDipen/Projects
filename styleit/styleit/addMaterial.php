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
				<h2 class="heading">Add Material</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
		        		    Material Name: 
		        		</td>
		        		<td class="td">
		        			<input type="text" name="mname" class="w3-input" placeholder="Material Name" pattern="[A-Za-z]{1,50}" required >
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
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Material</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						$result = mysqli_query($con,"SELECT * FROM material_info");

						$no = 1;

						while ($res = mysqli_fetch_array($result)) {
							$mid = $res['Material_id'];
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$res['Material_Name']."</td>";
					?>
							<td><a href="editMaterial.php?id=<?php echo $mid?>">Edit</a></td>
							<td><a href="deleteMaterial.php?id=<?php echo $mid?>">Delete</a></td>
					<?php
							$no++;
						}

					?>
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	
<?php	

if (isset($_POST['add'])) {

    $mname = $_POST['mname'];

    $record = "INSERT INTO material_info(Material_Name) VALUES ('$mname')";

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
