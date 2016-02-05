
<?php
//include 'buyhome/checker_buy.php';
session_start();
require 'connect.php';
if(isset($_SESSION['fb_id'])){
	if(!empty($_SESSION['fb_id'])){
		$fb_id= $_SESSION['fb_id'];
		$query_fb= "SELECT fb_id FROM users_buynary WHERE fb_id='$fb_id'";
		$query_buynary= "SELECT fb_id FROM users WHERE fb_id='$fb_id'";
		$query_fb_run= mysqli_query($con,$query_fb);
		$query_buynary_run= mysqli_query($con,$query_buynary);
		if($query_fb_run && $query_buynary_run){
			// echo mysqli_num_rows($query_buynary_run);
			// echo mysqli_num_rows($query_fb_run);
			if(mysqli_num_rows($query_fb_run)==0 || mysqli_num_rows($query_buynary_run)==0){
				// echo mysqli_num_rows($query_fb_run);
				// echo mysqli_num_rows($query_buynary_run)==0;
				header("Location:../index.php");
			}else{
				//echo 'done';
			}
		}
	}else{
		echo '<script>alert("To proceed to Buynary you need to LOG IN from our front Page");window.location.href="../index.php";</script>';
	}
}else{
	echo '<script>alert("To proceed to Buynary you need to LOG IN from our front Page");window.location.href="../index.php";</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sell/Modify</title>
	<link rel="stylesheet" type="text/css" href="../css/sell.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php  include 'form_nav.php'; ?>
		<div class="row main_sell">
			<div class="col s3 sell_logo card">
				
			</div>

			<div class="col s9 sell_form z-depth-4">
				<div class="row">
				    <form class="col s12" action="sell_item.php" method="POST" enctype='multipart/form-data'>
				      <div class="row">
				         <div class="input-field col s12">
						    <select id="item_list" name="item">
						      <option value="" disabled selected>Choose your option</option>
						      <option value="Book">Book</option>
						      <option value="Mobile">Mobile</option>
						      <option value="Tablet">Tablet</option>
						      <option value="Laptop">Laptop</option>
						      <option value="Headphones">Headphones</option>
						      <option value="Charger">Charger</option>
						      <option value="Powerbank">Powerbank</option>
						      <option value="Cycle">Cycle</option>
						      <option value="Camera">Camera</option>
						      <option value="Calculator">Calculator</option>
						      <option value="Furniture">Furniture</option>
						      <option value="Sports Equipment">Sports Equipment</option>
						      <option value="Musical Instrument">Musical Instrument</option>
						     <!-- here -->
						      <option value="Other">Other</option>
						    </select>
						    <label>Materialize Select</label>
						  </div>
				       </div>
				       <div class="row other" style="display:none;">
			       			<div class="input-field col s12">
				       			<i class="material-icons prefix">account_circle</i>
				       			<input id="icon_price" type="text" class="validate" name="other_item">
				       			<label for="icon_price">Other</label>
			       			</div>
				       </div>
				       <div class="file-field input-field">
					      <div class="btn">
					        <span>Please Upload the Picture of the Product</span>
					        <input type="file" accept="image/*" name="uploaded_image[]" multiple>
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_price" type="text" class="validate" name="offered_price">
					          <label for="icon_price">What is the price that you are offering?</label>
					        </div>
        				</div>
        				<div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_m_price" type="text" class="validate" name="market_price">
					          <label for="icon_m_price">What is the market price of the product?</label>
					        </div>
        				</div>
        				<div class="row">
        					<div class="input-field col s4">
							    <select name="month">
							      <option value="" disabled selected>Month</option>
							      <option value="Jan">Jan</option>
							      <option value="Feb">Feb</option>
							      <option value="March">March</option>
							      <option value="April">April</option>
							      <option value="May">May</option>
							      <option value="June">June</option>
							      <option value="July">July</option>
							      <option value="August">August</option>
							      <option value="September">September</option>
							      <option value="October">October</option>
							      <option value="November">November</option>
							      <option value="December">December</option>
							    </select>
							    <label>How old is the product?</label>
							</div>
							<div class="input-field col s4">
							    <select name="year">
							      <option value="" disabled selected>Year</option>
							      <option value="1990">1990</option>
							      <option value="1991">1991</option>
							      <option value="1992">1992</option>
							      <option value="1993">1993</option>
							      <option value="1994">1994</option>
							      <option value="1995">1995</option>
							      <option value="1996">1996</option>
							      <option value="1997">1997</option>
							      <option value="1998">1998</option>
							      <option value="1999">1999</option>
							      <option value="2000">2000</option>
							      <option value="2001">2001</option>
							      <option value="2002">2002</option>
							      <option value="2003">2003</option>
							      <option value="2004">2004</option>
							      <option value="2005">2005</option>
							      <option value="2006">2006</option>
							      <option value="2007">2007</option>
							      <option value="2008">2008</option>
							      <option value="2009">2009</option>
							      <option value="2010">2010</option>
							      <option value="2011">2011</option>
							      <option value="2012">2012</option>
							      <option value="2013">2013</option>
							      <option value="2014">2014</option>
							      <option value="2015">2015</option>
							      <option value="2016">2016</option>

							    </select>
							    <label></label>
							</div>
        				</div>
        				<div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_link" type="text" class="validate" name="link">
					          <label for="icon_link">Can you provide the link to the product on a ecommerce website.</label>
					        </div>
        				</div>
        				<div class="row">
        					<label class="col" style="font-size:16px;">Is the price negotiable?</label>
        					<p class="col">
						      <input name="negotiable" value="Yes" type="radio" id="test1" />
						      <label for="test1">Yes</label>
						    </p>
						    <p class="col">
						      <input name="negotiable" value="No" type="radio" id="test2" />
						      <label for="test2">No</label>
						    </p>
        				</div>
        				<div class="row">
        					<button class="btn waves-effect waves-light" type="submit" name="action">Submit and Move to Part Two
								<i class="material-icons right">send</i>
							</button>
        
        				</div>
				    </form>
			  </div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 
<script type="text/javascript" src="../js/sell.js"></script>
<script type="text/javascript">
	$('#item_list').change(function(){
		var optional= $(this).val();
		if(optional=='Other'){
			$('.other').show();
		}else{
			$('.other').hide();
		}
	});	
</script>
</body>
</html>