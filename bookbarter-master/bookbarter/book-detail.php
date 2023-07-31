<?php
require 'common/header.php';

$url="upload/";
require 'dbconnect.php';
session_start();
$id=$_GET["id"];

$sql="SELECT * FROM `postbook_table` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$bname=$row["name"];
?>
 

<section id="content-holder" class="container-fluid container">
<section class="row-fluid">

 
<section class="span12 first">
 

 
<section class="b-detail-holder">
<article class="title-holder">
<div class="span6">
<h4><strong><?php echo $row['name'];?></strong> by Author Name</h4>
</div>

</article>
<div class="book-i-caption">
 
<section class="book-box">
<div class="book-outer">
<div id="mybook">
<div title="first page">
<div class="left-page">
<div class="frame"><img src="<?php echo $url.$row['img1'];?>" height="100%" width="10px" alt="img"></div>
<div class="bottom">
<div class="cart-price"> <span class="cart">&nbsp;</span>  </div>
</div>
</div>
</div>
<div title="second page">
<div class="right-page">
<div class="text">
<h1><?php echo $row['name'];?></h1>
<strong class="name">by Aurthor name</strong>

 </div>

<div class="bottom">
<div class="text">
<div class="inner">
<p><?php echo $row['book_dec'];?></p>
<a href="#" class="readmore"></a> </div>
<div class="batch-icon"><img src="images/batch-img.png" alt="img"></div>
</div>
</div>
</div>
</div>
<div title="third page">
<div class="left-page">
<div class="frame"><img src="<?php echo $url.$row['img3']; ?>" alt="img"></div>
<div class="bottom">
<div class="cart-price"> <span class="cart">&nbsp;</span>  </div>
</div>
</div>
</div>
<div title="fourth page">
<div class="right-page">
<div class="text">
<h1><?php echo $row['name'];?></h1>
<strong class="name">by aurthor name</strong>

<div class="bottom">
<div class="text">
<div class="inner">
<p><?php echo $row['book_dec'];?></p>
<a href="#" class="readmore"></a> </div>
<div class="batch-icon"><img src="images/batch-img.png" alt="img"></div>
</div>
</div>
</div>
</div>
</div>

</section>

 
 
<div class="span6">
<?php if($_SESSION['email'])
{
echo"<a href='exchange.php?id=$id' type='submit' class='btn btn-primary' >Exchange this book now</a>";
}
else
{
echo"<a href='login.php' type='submit' class='btn btn-primary' >Exchange this book now</a>";	
}
?>


</div>
 
</div>
 
 
 
 
 
 
</section>
 
</section>
 
 
 
</section>
</section>
 
 <?php
 require 'common/footer.php'
 ?>
<script type="text/javascript" src="js/lib.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/bs.js"></script> 
<script type="text/javascript" src="js/bxslider.js"></script> 
<script type="text/javascript" src="js/input-clear.js"></script> 
<script src="js/range-slider.js"></script> 
<script src="js/jquery.zoom.js"></script> 
<script type="text/javascript" src="js/bookblock.js"></script> 
<script type="text/javascript" src="js/social.js"></script> 
<script src="js/jquery.booklet.latest.js" type="text/javascript"></script> 
<script type="text/javascript">
	    $(function () {		
	        $("#mybook").booklet({
				width:'100%',
				height:430,
				auto: true,
				//speed: 250,
			});
	    });
    </script>
 
<noscript>
<style>#socialicons>a span{top:0px;left:-100%;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}#socialicons>ahover div{left:0px;}</style>
</noscript>
<script type="text/javascript">
  /* <![CDATA[ */
  $(document).ready(function() {
  $('.social_active').hoverdir( {} );
})
/* ]]> */
</script>
  <div class="switcher"></div>  
 
<script type="text/javascript" src="js/cookie.js"></script>

 
<script type="text/javascript" src="js/custom.js"></script>
 
 
 
