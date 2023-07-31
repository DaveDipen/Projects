<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'tailorDashboard.php';
// SELECT DISTINCT design_info.Design_id, design_info.Material_Name, design_info.Material_Color, design_info.Pattern_Type, design_info.Collar_Type,design_info.Sleeve_Type, tailor_info.Tailor_Name FROM offer_info JOIN design_info ON design_info.Design_id = offer_info.Design_id JOIN tailor_info ON tailor_info.Tailor_id = offer_info.Tailor_id WHERE NOT offer_info.Tailor_id = 3
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
				<h2 class="heading">Offers</h2>
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
						<th colspan="2">Offer</th>
					</tr>
					<?php
					$state = $_SESSION['state'];
					$city = $_SESSION['city'];
					$tid = $_SESSION['tid'];
					$no = 1;
					$did1 = array();
					
					$result1 = mysqli_query($con,"SELECT * FROM offer_info WHERE Tailor_id = '$tid';");

					while($res = mysqli_fetch_array($result1)){
						$_SESSION['dids'] = $res['Design_id'];
						array_push($did1, $res['Design_id']);
					}
					
					$cont = count($did1);
					$result = mysqli_query($con,"SELECT * FROM design_info INNER JOIN user_info ON user_info.U_id = design_info.U_id;");

						while($res = mysqli_fetch_array($result)){		
							$did = $res['Design_id'];
							
								echo "<tr>";
								echo "<td>".$no."</td>";
								$uid = $res['U_id'];
								$_GLOBALS['did'] = $did;
								$_GLOBALS['uid'] = $uid;
								echo "<td>".$res['U_Name']."</td>";
                    		    echo "<td>".$res['Material_Name']."</td>";
                    		    echo "<td style= 'background-color:". $res['Material_Color']."';></td>";
                    		    echo "<td>".$res['Pattern_Type']."</td>";
                    		    echo "<td>".$res['Collar_Type']."</td>";
                    		    echo "<td>".$res['Sleeve_Type']."</td>";
                    		    echo "<td><a href='giveOffer.php?id=$did'>Offer</a></td>";
                    		    echo "</tr>";
                    		    $no+=1; 
                    		    
								continue;							
							
							continue;
						}
					
					?>
				</table>
			</td>
		</tr>
    </table>    
</form>	
</div>	

