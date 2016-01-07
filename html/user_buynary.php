<!DOCTYPE html>
<html>
<head>
	<title>Buynary Details</title>
	<link rel="stylesheet" type="text/css" href="../css/user_buynary.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://connect.facebook.net/en_US/all.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="form">
			<div class="row">
				<form class="col s12" action="buynarydatabase.php" method="POST">
					<div class="row">
						<div class="input-field col s8">
							<input id="rollno" name="rollno" type="text" class="validate">
	         				<label for="rollno">What is your Roll no?</label>
	         			</div>	
					</div>
					<div class="row">
						<div class="input-field col s8">
							<input id="hall" name="hall" type="text" class="validate">
         					<label for="hall">Which Hall do you live in?</label>
         				</div>	
					</div>
					<div class="row">
						<div class="input-field col s8">
							<input id="mobileno" name="mobileno" type="text" class="validate">
         					<label for="mobileno">What is your Mobile number?</label>
         				</div>	
					</div>
					<div class="row">
						<label style="font-size:16px;color:#FFC400;">Products that you would be interested in selling through Buynary:</label>
						<p>
					      <input type="checkbox" name="sell[]" id="books" />
					      <label for="books">Books</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="mobiles" />
					      <label for="mobiles">Mobiles & Tablets</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="headphone" />
					      <label for="headphones">Headphones</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="laptop" />
					      <label for="laptop">Laptops</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="calculator" />
					      <label for="calculator">Calculators</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="power" />
					      <label for="power">Power Banks</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="charger" />
					      <label for="charger">Chargers</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="cycle" />
					      <label for="cycle">Cycles</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="camera" />
					      <label for="camera">Camera</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="stationary" />
					      <label for="stationary">Stationary</label>
					    </p>
					    <p>
					      <input type="checkbox" name="sell[]" id="furniture" />
					      <label for="furniture">Furniture</label>
					    </p>
				    </div>
				    <div class="row">
						<label style="font-size:16px;color:#FFC400;">Products that you would be interested in buying through Buynary:</label>
						<p>
					      <input type="checkbox" name="buy[]" id="books" />
					      <label for="books">Books</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="mobiles" />
					      <label for="mobiles">Mobiles & Tablets</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="headphone" />
					      <label for="headphones">Headphones</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="laptop" />
					      <label for="laptop">Laptops</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="calculator" />
					      <label for="calculator">Calculators</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="power" />
					      <label for="power">Power Banks</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="charger" />
					      <label for="charger">Chargers</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="cycle" />
					      <label for="cycle">Cycles</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="camera" />
					      <label for="camera">Camera</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="stationary" />
					      <label for="stationary">Stationary</label>
					    </p>
					    <p>
					      <input type="checkbox" name="buy[]" id="furniture" />
					      <label for="furniture">Furniture</label>
					    </p>
				    </div>
				    <div class="row">
						<label style="font-size:16px;color:#FFC400;">How did you get to know about us?</label>
						<p>
					      <input type="checkbox" name="know[]" id="fb" />
					      <label for="fb">Facebook</label>
					    </p>
					    <p>
					      <input type="checkbox" name="know[]" id="mouth" />
					      <label for="mouth">Word of Mouth</label>
					    </p>
					</div> 
					<div class="row">
        				<label style="font-size:16px;color:#FFC400;">Have you ever used KGP Centrale?</label>
        				<p>
					      <input name="group1" name="compare" type="radio" id="yes" />
					      <label for="yes">Yes</label>
					    </p>
					    <p>
					      <input name="group1" name="compare" type="radio" id="no" />
					      <label for="no">No</label>
					    </p>
        			</div>
        			<div class="row">
				        <div class="input-field col s8">
				          <i class="material-icons prefix">mode_edit</i>
				          <textarea id="icon_prefix2" name="experience" class="materialize-textarea"></textarea>
				          <label for="icon_prefix2">Can you define your experience in a few words and your indicate your satisfaction level on a scale of 1 to 10.</label>
				        </div>
				    </div>
				    <div class="row">
        					<button class="btn waves-effect waves-light" type="submit" name="action">Go Buynary
								<i class="material-icons right">send</i>
							</button>
        			</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
</html>