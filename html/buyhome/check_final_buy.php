<?php
session_start();
//$fb_id=$_SESSION['fb_id'];
require '../connect.php';
if(isset($_POST['action']) == 'check_status'){
	if(isset($_SESSION['fb_id'])){
		if(!empty($_SESSION['fb_id'])){
			$fb_id=$_SESSION['fb_id'];
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
					//echo '<script>alert("To proceed to Buynary you need to LOG IN from our front Page");window.location.href="../index.php";</script>';
					echo 'false';
				}else{
					echo 'true';
					//echo 'done';
				}
			}
		}else{
			//echo '<script>alert("To proceed to Buynary you need to LOG IN from our front Page");window.location.href="../index.php";</script>';
		}
	}else{
		//echo '<script>alert("To proceed to Buynary you need to LOG IN from our front Page");window.location.href="../index.php";</script>';
	}
}
?>