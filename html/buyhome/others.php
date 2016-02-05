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
					<img src="../../img/buy/Mobile-Tablets.jpg">
				</li>
			</ul>
		</div>
		<div class="row one">
			<div class="col s3 m3 side_content" style="box-shadow:3px 0px 5px #A0A2A2">
				<div class="buy_head">
					<h4>Choose your product</h4>
				</div>
				<div class="buy_descp">	
					Select your product by clicking on any of the icons listed.
				</div>	
			</div>
			<div class="col s9 buy_list">
				<div class="items card hoverable row" onclick="itemdisplay('cycle','cycle');">
					<img src="../../img/buy/Icons/Electronics/Laptops.png" class="card-image circle responsive-img col s3">	
					<div class="buy_list_title col s9">
							Cycles
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('head_charg_power_cam_cal','camera');">
					<img src="../../img/buy/Icons/Electronics/Mobile.png" class="card-image circle responsive-img col s3">
					<div class="buy_list_title col s9">
							Camera
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('furniture_music','furniture');">
					<img src="../../img/buy/Icons/Electronics/Mobile.png" class="card-image circle responsive-img col s3">
					<div class="buy_list_title col s9">
							Furniture
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('sports_equipment','sports equipment');">
					<img src="../../img/buy/Icons/Electronics/Tablet.png" class="card-image circle responsive-img col s3"> 
					<div class="buy_list_title col s9">
							Sports Equipments
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('furniture_music','musical instrument');">
					<img src="../../img/buy/Icons/Electronics/Tablet.png" class="card-image circle responsive-img col s3"> 
					<div class="buy_list_title col s9">
							Musical Instuments
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="row">
				<div class="col s2 item_side_content" style="box-shadow:3px 0px 5px #A0A2A2"></div>
				<div class="col s10 check_item"></div>
			</div>	
		</div>
		<?php include 'check_modal.php';?>
		<?php include 'footer.php'; ?>
	</div>
</body>
<!-- <script src="http://connect.facebook.net/en_US/all.js"></script> -->
<script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/buy.js"></script> 
</html>