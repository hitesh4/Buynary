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
<!--     // <script type="text/javascript" src="../../js/buy.js"></script>  -->
    <style type="text/css">
  /*  .items{
		margin-left: 20px;
		margin-right: 20px;    }*/
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
					<img src="../../img/buy/books.jpg">
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
				<div class="items card hoverable row" onclick="itemdisplay('book','fiction');">
					<img src="../../img/buy/Icons/Books/Fiction.png" class="card-image circle responsive-img col s3">	
					<div class="buy_list_title col s9">
							Fiction
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('book','Non-Fiction');">
					<img src="../../img/buy/Icons/Books/Non Fiction.png" class="card-image circle responsive-img col s3">
					<div class="buy_list_title col s9">
							Non-Fiction
					</div>
				</div>
				<div class="items card hoverable row" onclick="itemdisplay('book','technical');">
					<img src="../../img/buy/Icons/Books/Technical.png" class="card-image circle responsive-img col s3">
					<div class="buy_list_title col s9">
							Technical
					</div>
				</div>
			</div>
		</div>
		<!-- <span id="check">hvhvhjvhjv</span> -->
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
<script type="text/javascript">
	
</script>
<!-- <script type="text/javascript" src="../../js/index.js"></script>  -->
</html>