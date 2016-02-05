<?php
session_start();
$fb_id= $_SESSION['fb_id'];
//echo "string";
if (isset($_POST['fb_id_seller']) && isset($_POST['prod_id']) && isset($_POST['price']) && isset($_POST['no_price']) && isset($_POST['specifications']) && isset($_POST['no_specifications']) && isset($_POST['questions']) && isset($_POST['no_questions'])) {
	if($_POST['price']=='No'){
			if(!empty($_POST['no_price'])){
				$no_price= $_POST['no_price'];
			}
		}else{
			$no_price= '';
		}
		if($_POST['specifications']=='No'){
			if(!empty($_POST['no_specifications'])){
				$no_specifications= $_POST['no_specifications'];
			}
		}else{
			$no_specifications= '';
		}
		if($_POST['questions']=='No'){
			if(!empty($_POST['no_questions'])){
				$no_questions= $_POST['no_questions'];
			}
		}else{
			$no_questions= '';
		}	
	if (!empty($_POST['prod_id']) && !empty($_POST['fb_id_seller']) && !empty($_POST['price']) && !empty($_POST['specifications']) && !empty($_POST['questions'])) {
		
		$prod_id= $_POST['prod_id'];
		$fb_id_seller= $_POST['fb_id_seller'];
		$price= $_POST['specifications'];
		$questions= $_POST['questions'];

		$query= "INSERT INTO final_details VALUES ('','$prod_id','$fb_id','$fb_id_seller','$price','$no_price','$questions','$no_questions','$specifications','$no_specifications')";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			$query_select_users="SELECT * FROM users WHERE fb_id='$fb_id_seller'";
			$query_select_users_buynary="SELECT * FROM users_buynary WHERE fb_id='$fb_id_seller'";
			$query_select_users_run= mysqli_query($con,$query_select_users);
			$query_select_users_buynary_run= mysqli_query($con,$query_select_users_buynary);
			if($query_select_users_run && $query_select_users_buynary_run){
				$query_select_users_num= mysqli_num_rows($query_select_users_run);
				$query_select_users_buynary_num= mysqli_num_rows($query_select_users_buynary_run);
				if($query_select_users_num==0 || $query_select_users_buynary_num==0){
					echo "true";
				}else{
					$details_users= mysqli_fetch_array($query_select_users_run,MYSQLI_ASSOC);
					$details_users_buynary= mysqli_fetch_array($query_select_users_buynary_run,MYSQLI_ASSOC);
					echo json_encode(array($details_users,$details_users_buynary));
				}
			}
		}
	}
}
?>