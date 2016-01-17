<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/buy.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style type="text/css">
    .items{
		margin-left: 20px;
		margin-right: 20px;    }
    </style>
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
					<img src="../../img/buy/books.jpg">
				</li>
			</ul>
		</div>
		<div class="row one">
			<div class="col s3 m3">
				<div class="buy_head">
					<h4>Choose your product</h4>
				</div>
				<div class="buy_descp">	
					Select your product by clicking on any of the icons listed.
				</div>	
			</div>
			<div class="col s9 ">
				<div class="items col s3 center-align">
					<img src="../../img/buy/Icons/Books/Fiction.png" class="circle responsive-img hoverable" onclick="itemdisplay('books','fiction');">	
				</div>
				<div class="items col s3 center-align">
					<img src="../../img/buy/Icons/Books/Non Fiction.png" class="circle responsive-img hoverable" onclick="itemdisplay('books','non-fiction');">
				</div>
				<div class="items col s4 center-align">
					<img src="../../img/buy/Icons/Books/Technical.png" class="circle responsive-img hoverable" onclick="itemdisplay('books','technical');">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="items">
				
			</div>
		</div>
	</div>
</body>
<!-- <script src="http://connect.facebook.net/en_US/all.js"></script> -->
<script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/buy.js"></script> 
</html>