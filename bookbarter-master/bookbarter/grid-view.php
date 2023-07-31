<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?>
 
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Grid View</h2>
<span class="h-line"></span>
</div>
 
<section class="span12 first">
 

 
 
<div class="product_sort">


</div>
<section class="row-fluid features-books" >
<?php 
$url="upload/";

$qry="SELECT * FROM `postbook_table`";
$res=mysqli_query($conn,$qry);
$i=0;
while($row=mysqli_fetch_assoc($res))
{
	$img=$row['img1'];
	$image=$url.$img;
if($i==0 || $i==3)
	{
		echo"<figure class='span4 slide first'>
<a href='book-detail.php?id=".$row["id"]."'><img src='".$image."' alt='' class='pro-img'/></a>
<span class='title'><a href='book-detail.php?id=".$row["id"]."'>".$row["name"]."</a></span>
<span class='rating-bar'>".$row["book_dec"]."</span>
<div class='cart-price'>

<span class='price'></span>
</div>
</figure>";
		
	}
	else
	{
		echo"<figure class='span4 slide'>
<a href='book-detail.php?id=".$row["id"]."'><img src='".$image."' alt='' class='pro-img'/></a>
<span class='title'><a href='book-detail.php?id=".$row["id"]."'>".$row["name"]."</a></span>
<span class='rating-bar'>".$row["book_dec"]."</span>
<div class='cart-price'>

<span class='price'></span>
</div>
</figure>";
		
	}
	
	

	
$i++;	
}


?>



<hr/>


</section>

 
</section>
 
 

 
</section>
</section>
<?php
require 'common/footer.php'
?> 
 
 
 

