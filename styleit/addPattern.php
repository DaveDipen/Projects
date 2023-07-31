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


input[type="submit"]{
      background-color: #1C4E80; 
    }
	</style>
</head>

<div class="home-content">
<form method="post">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<h2 class="heading">Add Pattern</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>
		        		    Pattern Type: 
		        		</td>
		        		<td class="td">
		        			<input type="text" name="pname" class="w3-input" placeholder="Pattern Type" required>
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
						<th>Pattern Type</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						$result = mysqli_query($con,"SELECT * FROM pattern_info");

						$no = 1;

						while ($res = mysqli_fetch_array($result)) {
							$mid = $res['Pattern_id'];
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$res['Pattern_Type']."</td>";
					?>
							<td><a href="editPattern.php?id=<?php echo $mid?>">Edit</a></td>
							<td><a href="deletePattern.php?id=<?php echo $mid?>">Delete</a></td>
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

    $pname = $_POST['pname'];

    $record = "INSERT INTO pattern_info(Pattern_Type) VALUES ('$pname')";

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
