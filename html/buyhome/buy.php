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
    <style type="text/css">
    .row{
    	margin: 0px !important;
    }
    .items{
    	margin-bottom: 10px !important; 
    }
    </style>
</head>
<body>
	<div class="wrapper">
		<?php include 'navbar.php'; ?>
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="../../img/buy/books2.jpg">
				</li>
				<li>
					<img src="../../img/buy/Bicycle2.jpg">
				</li>
				<li>
					<img src="../../img/buy/calculators2.jpeg">
				</li>
				<li>
					<img src="../../img/buy/Cameras-and-lenses2.jpg">
				</li>
				<li>
					<img src="../../img/buy/Furniture2.jpg">
				</li>
				<li>
					<img src="../../img/buy/Mobile_Tablets_lAPTOPS.jpg">
				</li>
				<li>
					<img src="../../img/buy/Musical-Instruments2.jpg">
				</li>
				<li>
					<img src="../../img/buy/sports-equipments2.jpg">
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col s3 m3 side_content" style="box-shadow:3px 0px 5px #A0A2A2">
				<div class="buy_head">
					<h4>Choose your product</h4>
				</div>
				<div class="buy_descp">	
					Select your product by clicking on any of the icons listed.
				</div>	
			</div>
			<div class="col s9 buy_list">
				<a href="buy_book.php">
					<div class="items card hoverable row">
						<img src="../../img/buy/Icons/Books/Books.png" class="card-image circle responsive-img col s3" style="width:15vw;height:15vw;">
						<div class="buy_list_title col s9">
							Books
						</div>
					</div>
				</a>	
				<a href="electronic_accessories.php">
					<div class="items card grey lighten-4 hoverable row">
						<img src="../../img/buy/Icons/Elec. Accesories/Elec.png" class="card-image circle responsive-img col s3" style="width:15vw;height:15vw;">	
						<div class="buy_list_title col s9">
							Electronic Accessories
						</div>
					</div>
				</a>	
				<a href="electronics.php">	
					<div class="items card hoverable row">
						<img src="../../img/logo-vector.gif" class="card-image circle responsive-img col s3" style="width:15vw;height:15vw;">
						<div class="buy_list_title col s9">
							Electronics 
						</div>
					</div>
				</a>
				<a href="other_items.php">	
					<div class="items card grey lighten-4 hoverable row">
						<img src="../../img/buy/Icons/Other Products/Other products.jpg" class="card-image circle responsive-img col s3" style="width:15vw;height:15vw;">
						<div class="buy_list_title col s9">
							Others
						</div>
					</div>
				</a>	
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
<!-- <script src="http://connect.facebook.net/en_US/all.js"></script> -->
<script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/buy.js"></script> 
</html>