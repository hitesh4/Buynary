<style type="text/css">
	.name{
		font-size: 1.7vw;
		background-color: #FDBC03;
	}
	
</style>

<div class="navbar_dec">
				<div class="navbar-fixed">
					<nav class="opacity">
						<div class="nav-wrapper">
								<a href="../index.php" class="brand-logo logo">
									<img src="../../img/logo-vector.gif" class="reqforbuy" width="50px" height="50px">
								</a>
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						      <ul class="right hide-on-med-and-down list">
						        <li><a href="../index.php">HOME</a></li>
						        <li><a href="#">HOW IT WORKS</a></li>
						        <li><a href="#">BLOG</a></li>
						        <li class="loginstatus"><a href="#">
						        	<?php
										require '../connect.php';
										if(isset($_SESSION['fb_id']) && !empty($_SESSION['fb_id'])){
											$fb_id= $_SESSION['fb_id'];
											$query = "SELECT first_name FROM users WHERE fb_id='$fb_id' LIMIT 1";
											$query_run = mysqli_query($con,$query);
											if($query_run){
												$first_name = mysqli_fetch_array($query_run);
												echo '<div class="name">'.$first_name[0].'</div>';
											}
										}else{
											//echo "<script>$('.loginstatus').click(fblogin('df'));</script>";
											echo "LOGIN/";
										}
									?>
						        </a></li>
						      </ul>
						      <ul class="side-nav" id="mobile-demo">
						        <li><a href="#">HOME</a></li>
						        <li><a href="#">HOW IT WORKS</a></li>
						        <li><a href="#">BLOG</a></li>
						        <li class="loginstatus"><a href="#"></a></li>
						      </ul>	
						</div>
					</nav>
				</div>
			</div>





