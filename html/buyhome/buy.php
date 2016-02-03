<?php
include 'checker_buy.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/buy.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
</head>
<body>
	<div class="wrapper">
		<div class="navbar_dec">
			<div class="navbar-fixed">
				<nav class="opacity">
					<div class="nav-wrapper">
							<a href="#" class="brand-logo logo">
								<img src="../../img/logo-vector.gif" width="50px" height="50px">
							</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					      <ul class="right hide-on-med-and-down list">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#">ABOUT US</a></li>
					        <li><a href="#">HOW IT WORKS</a></li>
					        <li><a href="#">CONTACT US</a></li>
					      </ul>
					      <ul class="side-nav" id="mobile-demo">
					        <li><a href="#">HOME</a></li>
					        <li><a href="#">ABOUT US</a></li>
					        <li><a href="#">HOW IT WORKS</a></li>
					        <li><a href="#">CONTACT US</a></li>
					      </ul>	
					</div>
				</nav>
			</div>
		</div>
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="../../img/buy/sswoman-notebook-working-girl.jpg">
				</li>
				<li>
					<img src="../../img/buy/ssBicycle.jpg">
				</li>
				<li>
					<img src="../../img/buy/ssFurniture.jpeg">
				</li>
				<li>
					<img src="../../img/buy/ssbooks.jpg">
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col s3 m3">
				<div class="buy_head">
					<h4>Choose your product</h4>
				</div>
				<div class="buy_descp">	
					Select your product by clicking on any of the icons listed.
				</div>	
			</div>
			<div class="col s9 ">
				<div class="items col s3 ">
					<a href="buy_book.php">
						<img src="../../img/logo-vector.gif" class="circle responsive-img hoverable">
					</a>	
				</div>
				<div class="items col s3 ">
					<a href="mobile.php">
						<img src="../../img/logo-vector.gif" class="circle responsive-img hoverable">
					</a>	
				</div>
				<div class="items col s3 ">
					<a href="electric.php">
						<img src="../../img/logo-vector.gif" class="circle responsive-img hoverable">
					</a>	
				</div>
				<div class="items col s3 ">
					<a href="other_items.php">
						<img src="../../img/logo-vector.gif" class="circle responsive-img hoverable">
					</a>	
				</div>
			</div>
		</div>
	</div>
</body>
<!-- <script src="http://connect.facebook.net/en_US/all.js"></script> -->
<script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/buy.js"></script> 
</html>