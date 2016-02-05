<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://connect.facebook.net/en_US/all.js"></script>
      <script type="text/javascript" src="../js/index.js"></script> 

<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 
</head>
<body>
<script type="text/javascript">
$('input[type="radio"]').change(function(){
					if($('#price_no').is(':checked')){
						$('.no1').show();
					}else{
						$('.no1').hide();
					}
					if($('#specifications_no').is(':checked')){
						$('.no2').show();
					}else{
						$('.no2').hide();
					}
					if($('#questions_no').is(':checked')){
						$('.no3').show();
					}else{
						$('.no3').hide();
					}
				});
	
					// $('.form').html('<div class="row"><label class="col" style="font-size:16px;">Are you ready to pay the price as demanded by the seller?</label><p class="col"><input name="price" value="Yes" type="radio" id="price_yes" /><label for="price_yes">Yes</label></p><p class="col"><input name="price" value="No" type="radio" id="price_no" /><label for="price_no">No</label></p></div><div class="row no1" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><input id="icon_price" type="text" class="validate" name="no_price"><label for="icon_price">Please express the price range you expect.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="specifications" value="Yes" type="radio" id="specifications_yes" /><label for="specifications_yes">Yes</label></p><p class="col"><input name="specifications" value="No" type="radio" id="specifications_no" /><label for="specifications_no">No</label></p></div><div class="row no2" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_specifications" class="materialize-textarea"></textarea><label for="specifications">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="questions" value="Yes" type="radio" id="questions_yes" /><label for="questions_yes">Yes</label></p><p class="col"><input name="questions" value="No" type="radio" id="questions_no" /><label for="questions_no">No</label></p></div><div class="row no3" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_questions" class="materialize-textarea"></textarea><label for="questions">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button></div>');

</script>
<form class="form" method="GET" action="buyhome/savetodatabase.php">
	<div class="row"><label class="col" style="font-size:16px;">Are you ready to pay the price as demanded by the seller?</label><p class="col"><input name="price" value="Yes" type="radio" id="price_yes" /><label for="price_yes">Yes</label></p><p class="col"><input name="price" value="No" type="radio" id="price_no" /><label for="price_no">No</label></p></div><div class="row no1" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><input id="icon_price" type="text" class="validate" name="no_price"><label for="icon_price">Please express the price range you expect.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="specifications" value="Yes" type="radio" id="specifications_yes" /><label for="specifications_yes">Yes</label></p><p class="col"><input name="specifications" value="No" type="radio" id="specifications_no" /><label for="specifications_no">No</label></p></div><div class="row no2" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_specifications" class="materialize-textarea"></textarea><label for="specifications">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="questions" value="Yes" type="radio" id="questions_yes" /><label for="questions_yes">Yes</label></p><p class="col"><input name="questions" value="No" type="radio" id="questions_no" /><label for="questions_no">No</label></p></div><div class="row no3" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_questions" class="materialize-textarea"></textarea><label for="questions">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button></div>
</form>
</body>
</html>