<?php
session_start();
$prod_id= $_SESSION['prod_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://connect.facebook.net/en_US/all.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/sell_thankspage.css">
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<div class="col s4 details">
				<div class="content">
					<h4>Your product is now ready to sell.</h4>
					<h5>Reference Number :- <h5 style="color: #26A69A;"><?php echo $prod_id; ?></h5></h5>
					<p>You will receive a mail if anyone is interested in your product. So, keep checking your email.<br>

					Please take a note of the expiry date of your product and do not forget to extend it case buyers do not express interest in the stipulated window of time.
					<br>	
					In case, you want to change the price or add any relevant details to your product at any point of time, you can use the Modify Sale option at the Home Page. You will need to use the reference number for that.
					</p>
				</div>
				<div class="logo">
					<a href="index.php">
						<img src="../img/logo-vector.gif" class="logo_img">
						<h5 style="text-align:center;color:#FFC400;margin-top:0px !important;">Return To Home</h5>
					</a>

				</div>
			</div>
			<div class="s8">
				
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 
<script type="text/javascript" src="../js/sell_thankspage.js"></script>
</html>