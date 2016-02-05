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
      <script type="text/javascript">
  //     	FB.getLoginStatus(function(response) {
		// 	if(response.status === 'connected'){
		// 		$('.loginstatus').html('jbj');
		// 	}
		// },true);
									
      </script>
	       
</head>
<body>
	<div class="wrapper">
	<div class="testdata"></div>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="main">
			<a  class="modal-trigger check" href="#modal1">

				<div class="buy" onclick="fblogin('buy');"></div>

			</a>	
				<div id="modal1" class="modal">
					<div class="modal-header">Log In To Buynary</div>
				    <div class="modal-content">
				  		<div class="modal_logo"></div>
				  		<div class="con">You need to register to start Selling<br>Log in with Facebook</div>
				  		<div class="fblogin modal_logo" onclick="FB.login();"></div>
				    </div>
				</div>
				
			
			<a  class="modal-trigger check" href="#modal1">
				<div class="sell" onclick="fblogin('sell');"></div>
			</a>
			<?php include 'navbar.php'; ?>
		</div>
		<div class="wwh">
			<div class="one">
				
			</div>
			<div class="two valign-wrapper">
				<div class="row boxes center-align">
					<div class="box hoverable">
						<div class="card_head ">
							WHAT?
						</div>
						<div class="card_content  ">
							subhdhhc
						</div>
					</div>
					<div class="box hoverable">
						<div class="card_head  ">
							WHY?
						</div>
						<div class="card_content  ">
							subhdhhc
						</div>
					</div>
					<div class="box hoverable">
						<div class="card_head  ">
							HOW?
						</div>
						<div class="card_content  ">
							subhdhhc
						</div>
					</div>					
				</div>
			</div>
		</div>
		<div class="connect">
			<div class="two_connect">
				<div class="row" style="padding-top:25vh;">
			    <form class="col s6">
			    <div class="row">
			      <div class="input-field col s12">
			         <i class="material-icons prefix icon_color">account_circle</i>
			         <input id="icon_prefix" type="text" class="validate" required>
			         <label for="icon_prefix">Name*</label>
			       </div>
			      </div> 
			      <div class="row">
			        <div class="input-field col s12">
			          <i class="material-icons prefix icon_color">email</i>
			          <input id="email" type="email" data-error="wrong" data-success="right" class="validate" required>
			          <label for="email">Email*</label>
			        </div>
			      </div>
			      <div class="row">
			      	<div class="input-field col s12">
			          <i class="material-icons prefix icon_color">phone</i>
			          <input id="icon_telephone" type="tel" class="validate">
			          <label for="icon_telephone">Telephone</label>
			        </div>
			      </div>
			      <div class="row">
			      	<div class="input-field col s12">
			          <i class="material-icons prefix icon_color">mode_edit</i>
			          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			          <label for="icon_prefix2">Textarea</label>
			        </div>
			      </div>
			      <div class="row">
			      	<div class="input-field col s12">
						<button class="col s12 btn-large waves-effect waves-light amber accent-3" type="submit" name="action">GET STARTED NOW
						    <i class="material-icons right">send</i>
					    </button>
			      	</div>
			      </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</div>	
</body>
<script type="text/javascript" src="../js/index.js"></script> 

<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 

	
</html>