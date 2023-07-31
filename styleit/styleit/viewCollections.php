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
?>

<div class="home-content">
<form method="post" action="<?php $_PHP_SELF ?>">
	<table border="1" class="table1">
		<tr class="bgheading">
			<td style="width: 30%;">
				<h2 class="heading">Tailors Collections</h2>
			</td>
		</tr>
		<tr>
			<td>
				<table border = 1 class="table1">
					<tr>
						<th>No</th>
						<th>Tailor</th>
						<th>View Collections</th>
					</tr>
					<?php
					$uid = $_SESSION['uid'];
					$result = mysqli_query($con,"SELECT * FROM tailor_info");
					$no = 1;
					while ($res = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>".$no."</td>";
						$tid = $res['Tailor_id'];
						?>
						<td><?php echo $res['Tailor_Name'] ?></td>
						<td>
                            <a href="viewCollection.php?id=<?php echo $tid ?>">View Collection</a>
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