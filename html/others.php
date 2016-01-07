<!DOCTYPE html>
<html>
<head>
	<title>Others</title>
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
				<form class="col s12">
        			<div class="row">
        				<label style="font-size:16px;color:#FFC400;">Why are you selling this?</label>
        				<p>
					      <input name="group1" type="radio" id="r1" />
					      <label for="r1">I do not use the product anymore</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="r2" />
					      <label for="r2">I have not even started using it. I already have a substitute product.</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="r3" />
					      <label for="r3">I bought it and later realized that I required something else.</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="r4" />
					      <label for="r4">The product has some defects but is still usable.</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="r5" />
					      <label for="r5">Other</label>
					    </p>
        			</div>
        			<div class="row">
        				<label style="font-size:16px;color:#FFC400;">Is there any preferred location where you would like to sell this product?</label>
        				<p>
					      <input name="group1" type="radio" id="loc1" />
					      <label for="loc1">Hall</label>
					    </p>
					    <p>
					      <input name="group1" type="radio" id="loc2" />
					      <label for="loc2">Other</label>
					    </p>
        			</div>
        			<div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">mode_edit</i>
				          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
				          <label for="icon_prefix2">Do you want to specify any negatives?</label>
				        </div>
				      </div>
        			<div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">mode_edit</i>
				          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
				          <label for="icon_prefix2">Do you want to Highlight a feature or add any relevant information?</label>
				        </div>
				      </div>
				      <div class="row">
        					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
        
        				</div>
				</form>
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 
<script type="text/javascript" src="../js/sell.js"></script>
</body>
</html>