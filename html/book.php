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
				<form class="col s12" action="book_data.php" method="POST">
					<div class="row">
					    <div class="input-field col s12">
					      <i class="material-icons prefix">account_circle</i>
					      <input id="icon_name" type="text" name="name" class="validate">
					      <label for="icon_name">What is the name of the book?</label>
					   </div>
        			</div>
        			<div class="row">
					    <div class="input-field col s12">
					      <i class="material-icons prefix">account_circle</i>
					      <input id="icon_author" type="text" name="author" class="validate">
					      <label for="icon_author">Who is the author?</label>
					   </div>
        			</div>
        			<div class="row">
					    <div class="input-field col s12">
					      <i class="material-icons prefix">account_circle</i>
					      <input id="icon_edition" type="text" name="edition" class="validate">
					      <label for="icon_edition">Which edition of the book are you selling?</label>
					   </div>
        			</div>
        			<div class="row" id="item_list">
        				<label style="font-size:16px;color:#FFC400;">Please specify the category of the book:</label>
        				<p>
					      <input name="book_type" type="radio" value="Fiction" id="fiction" />
					      <label for="fiction">Fiction</label>
					    </p>
					    <p>
					      <input name="book_type" type="radio" value="Non-Fiction" id="non-fiction" />
					      <label for="non-fiction">Non-Fiction</label>
					    </p>
					    <p>
					      <input name="book_type" type="radio" value="Technical" id="technical" />
					      <label for="technical">Techincal</label>
					    </p>
					    <p>
					      <input name="book_type" type="radio" value="Other1" id="other1" />
					      <label for="other1">Other</label>
					    </p>
        			</div>
        			<div class="row other1" style="display:none;">
		       			<div class="input-field col s12">
			       			<i class="material-icons prefix">account_circle</i>
			       			<input id="icon_price" type="text" name="other_item1" class="validate" name="other_item">
			       			<label for="icon_price">Other</label>
		       			</div>
				    </div>
        			<div class="row">
        				<label style="font-size:16px;color:#FFC400;">Why are you selling this?</label>
        				<p>
					      <input type="radio" name="sell_reason" value="I do not use the product anymore" id="no-use" />
					      <label for="no-use">I do not use the product anymore</label>
					    </p>
					    <p>
					      <input type="radio" name="sell_reason" value="I have not even started using it. I already have a substitute product." id="substitute" />
					      <label for="substitute">I have not even started using it. I already have a substitute product.</label>
					    </p>
					    <p>
					      <input type="radio" name="sell_reason" value="I bought it and later realized that I required something else." id="else" />
					      <label for="else">I bought it and later realized that I required something else.</label>
					    </p>
					    <p>
					      <input type="radio" name="sell_reason" value="The product has some defects but is still usable." id="usable" />
					      <label for="usable">The product has some defects but is still usable.</label>
					    </p>
					    <p>
					      <input type="radio" name="sell_reason" value="Other2" id="other2" />
					      <label for="other2">Other</label>
					    </p>
        			</div>
        			<div class="row other2" style="display:none;">
		       			<div class="input-field col s12">
			       			<i class="material-icons prefix">account_circle</i>
			       			<input id="icon_price" type="text" name="other_item2" class="validate">
			       			<label for="icon_price">Other</label>
		       			</div>
				    </div>
        			<div class="row">
        				<label style="font-size:16px;color:#FFC400;">Is there any preferred location where you would like to sell this product?</label>
        				<p>
					      <input type="radio" name="location" value="Hall" id="hall" />
					      <label for="hall">Hall</label>
					    </p>
					    <p>
					      <input type="radio" name="location" value="Other3" id="other3" />
					      <label for="other3">Other</label>
					    </p>
        			</div>
        			<div class="row other3" style="display:none;">
		       			<div class="input-field col s12">
			       			<i class="material-icons prefix">account_circle</i>
			       			<input id="icon_price" type="text" name="other_item3" class="validate" name="other_item">
			       			<label for="icon_price">Other</label>
		       			</div>
				    </div>
        			<div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">mode_edit</i>
				          <textarea id="icon_prefix2" name="info" class="materialize-textarea"></textarea>
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
<script type="text/javascript">
	$('input[type="radio"]').change(function(){
		if($('#other1').is(':checked')){
			$('.other1').show();
		}else{
			$('.other1').hide();
		}
		if($('#other2').is(':checked')){
			$('.other2').show();
		}else{
			$('.other2').hide();
		}
		if($('#other3').is(':checked')){
			$('.other3').show();
		}else{
			$('.other3').hide();
		}
	});	
</script>
</body>
</html>