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

	       
</head>
<body>
	<div class="wrapper">
	<div class="testdata"></div>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="main">
			<a  class="modal-trigger check" href="#modal1">

				<div class="buy" onclick="fblogin();"></div>

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
				<div class="sell" onclick="fblogin();"></div>
			</a>
			<div class="navbar_dec">
				<div class="navbar-fixed">
					<nav class="opacity">
						<div class="nav-wrapper">
								<a href="#" class="brand-logo logo">
									<img src="../img/logo-vector.gif" width="50px" height="50px">
								</a>
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						      <ul class="right hide-on-med-and-down list">
						        <li><a href="#">HOME</a></li>
						        <li><a href="#">ABOUT US</a></li>
						        <li><a href="#">HOW IT WORKS</a></li>
						        <li><a href="#">CONTACT US</a></li>
						      </ul>
						      <ul class="side-nav" id="mobile-demo">
						        <li><a href="#">HOME</a></li>
						        <li><a href="#">ABOUT US</a></li>
						        <li><a href="#">HOW IT WORKS</a></li>
						        <li><a href="#">CONTACT US</a></li>
						      </ul>	
						</div>
					</nav>
				</div>
			</div>
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
				<div class="connect_title">
					<div class="text">
						CONNECT WITH US
					</div>
					<div class="line">
						
					</div>
					<div class="small_line">
						
					</div>
				</div>
				<div class="connect_content">
					Lorem Ipsum is simply dummy text of the printing and 
					typesetting industry. Lorem Ipsum has been the industry's.
				</div>
				<div class="row">
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
</div>	
</body>
<script type="text/javascript" src="../js/index.js"></script> 

<script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script> 

	
</html>