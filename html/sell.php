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
		<div class="row main_sell">
			<div class="col s4 m4 sell_logo">
				
			</div>
			<div class="col s8 m8 sell_form">
				<div class="row">
				    <form class="col s12">
				      <div class="row">
				         <div class="input-field col s12">
						    <select id="myselect">
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Book</option>
						      <option value="2">Mobile</option>
						      <option value="3">Tablet</option>
						      <option value="4">Laptop</option>
						      <option value="5">Headphones</option>
						      <option value="6">Charger</option>
						      <option value="7">Powerbank</option>
						      <option value="8">Cycle</option>
						      <option value="9">Camera</option>
						      <option value="10">Calculator</option>
						      <option value="11">Furniture</option>
						      <option value="12">Sports Equipment</option>
						      <option value="13">Musical Instrument</option>
						      <option value="4" class="other">Other</option>
						    </select>
						    <label>Materialize Select</label>
						  </div>
				       </div>
				       <div class="file-field input-field">
					      <div class="btn">
					        <span>Please Upload the Picture of the Product</span>
					        <input type="file" accept="image/*">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_price" type="text" class="validate">
					          <label for="icon_price">What is the price that you are offering?</label>
					        </div>
        				</div>
        				<div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_m_price" type="text" class="validate">
					          <label for="icon_m_price">What is the market price of the product?</label>
					        </div>
        				</div>
        				<div class="row">
        					<div class="input-field col s4">
							    <select>
							      <option value="" disabled selected>Month</option>
							      <option value="1">Jan</option>
							      <option value="2">Feb</option>
							      <option value="3">March</option>
							      <option value="4">April</option>
							      <option value="5">May</option>
							      <option value="6">June</option>
							      <option value="7">July</option>
							      <option value="8">August</option>
							      <option value="9">September</option>
							      <option value="10">October</option>
							      <option value="11">November</option>
							      <option value="12">December</option>
							    </select>
							    <label>How old is the product?</label>
							</div>
							<div class="input-field col s4">
							    <select>
							      <option value="" disabled selected>Year</option>
							      <option value="1">1990</option>
							      <option value="2">1991</option>
							      <option value="3">1992</option>
							      <option value="3">1993</option>
							      <option value="3">1994</option>
							      <option value="3">1995</option>
							      <option value="3">1996</option>
							      <option value="3">1997</option>
							      <option value="3">1998</option>
							      <option value="3">1999</option>
							      <option value="3">2000</option>
							      <option value="3">2001</option>
							      <option value="3">2002</option>
							      <option value="3">2003</option>
							      <option value="3">2004</option>
							      <option value="3">2005</option>
							      <option value="3">2006</option>
							      <option value="3">2007</option>
							      <option value="3">2008</option>
							      <option value="3">2009</option>
							      <option value="3">2010</option>
							      <option value="3">2011</option>
							      <option value="3">2012</option>
							      <option value="3">2013</option>
							      <option value="3">2014</option>
							      <option value="3">2015</option>
							      <option value="3">2016</option>

							    </select>
							    <label></label>
							</div>
        				</div>
        				<div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="icon_link" type="text" class="validate">
					          <label for="icon_link">Can you provide the link to the product on a ecommerce website.</label>
					        </div>
        				</div>
        				<div class="row">
        					<label class="col" style="font-size:16px;">Is the price negotiable?</label>
        					<p class="col">
						      <input name="group1" type="radio" id="test1" />
						      <label for="test1">Yes</label>
						    </p>
						    <p class="col">
						      <input name="group1" type="radio" id="test2" />
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
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 
<script type="text/javascript" src="../js/sell.js"></script>
</body>
</html>