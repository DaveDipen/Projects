<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

        .bgheading{
        	background: #1C4E80;
        }
    </style>
</head>
<?php
include_once ("Config.php");
include 'userDashboard.php';
$tid = $_GET['id'];
?>
<div class="home-content">
	<form method="post">
    <table border="1" class="table1">
        <tr class="bgheading">
            <td style="width: 30%;" class="head">
                <span id="head1"><h2 class="heading">Tailor Collection</h2></span>    
                <span id="head2" class="links"><a href="tailorinfo1.php?id=<?php echo $tid ?>" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Design</th>
						<th>Cost</th>
						<th>Place Order</th>
					</tr>
					<?php
					$tid = $_GET['id'];
					$no = 1;
					
					$result = mysqli_query($con,"SELECT * FROM tailor_info JOIN collection_info ON collection_info.Tailor_id = tailor_info.Tailor_id WHERE tailor_info.Tailor_id = '$tid';");

					while($res = mysqli_fetch_array($result)){

						echo "<tr>";
						$cid = $res['Collection_id'];
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
							<?php echo $res['Design_Price'];?>
						</td>
						<td>
							<a href="placeOrder.php?id=<?php echo $cid ?>&tid=<?php echo $tid ?>">Place order</a>
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