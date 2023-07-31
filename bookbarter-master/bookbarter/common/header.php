<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<!-- Mirrored from html.crunchpress.com/book-store/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2015 05:50:49 GMT -->
<head>
<title>Book Store</title>
<!--[if lt IE 9]>
	<script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src='http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'></script>
<![endif]-->
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta charset='UTF-8'>
<meta name='viewport' content='initial-scale=1, maximum-scale=1'>
<meta name='viewport' content='width=device-width'>
 
<link href='css/style.css' rel='stylesheet' type='text/css'/> 
<link href='css/bs.css' rel='stylesheet' type='text/css'/> 
<link rel='stylesheet' type='text/css' href='css/main-slider.css'/> 
<!--[if lte IE 10]><link rel='stylesheet' type='text/css' href='css/customIE.css' /><![endif]-->
<link href='css/font-awesome.css' rel='stylesheet' type='text/css'/> 
<link href='css/font-awesome-ie7.css' rel='stylesheet' type='text/css'/> 
 
<link href='css/jquery.booklet.latest.css' type='text/css' rel='stylesheet' media='screen, projection, tv'/>
<noscript>
<link rel='stylesheet' type='text/css' href='css/noJS.html'/>
</noscript>
 
 

 
<link rel='stylesheet' name='skins' href='css/default.css' type='text/css' media='all'>
 
 
</head>
<body>
 
<div class='wrapper'>
 
 
<section class='top-nav-bar'>
<section class='container-fluid container'>
<section class='row-fluid'>


</section>
</section>
</section>
 
<header id='main-header'>
<section class='container-fluid container'>
<section class='row-fluid'>
<section class='span4'>
<h1 id='logo'> <a href='index.php'><img src='images/logo.png'/></a> </h1>
</section>
<section class='span8'>
<ul class='top-nav2'>
<li><a href='myaccount.php'>My Account</a></li>


<?php
ob_start();
error_reporting(0);
			session_start();
		  $_SESSION['email'];
		   if(!isset($_SESSION['email']))
		   {
			echo' <li><a href="login.php">Log In</a></li></ul> '; 
		   }
		   else
		   {
			  echo' <li><a href="logout.php">Log out</a></li></ul> '; 
		   }
?>




<ul class='navbar-nav ml-auto'>
         
</section>
</section>
</section>
 
<nav id='nav'>
<div class='navbar navbar-inverse'>
<div class='navbar-inner'>
<button type='button' class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'> <span class='icon-bar'></span> <span class='icon-bar'></span> <span class='icon-bar'></span> </button>
<div class='nav-collapse collapse'>
<ul class='nav'>
<li> <a href='index.php'>Home</a> </li>
<li> <a href='grid-view.php'>Books</a></li>
<li><a href='about-us.php'>About Us</a></li>

<li><a href='feedback.php'>Feedback</a></li>
<li><a href='contact.php'>Contact us</a></li>
<?php
ob_start();
error_reporting(0);
			session_start();
		  $_SESSION['email'];
		   if(!isset($_SESSION['email']))
		   {
		
		   }
		   else
		   {
			  echo' <li><a href="postbook.php">Post Book</a></li> '; 
		   }
?>


</ul>
</li>

</ul>
</div>
 
</div>
 
</div>
 
</nav>
 
</header>
 