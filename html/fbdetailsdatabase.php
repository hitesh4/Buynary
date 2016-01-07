<?php
	require 'connect.php';
	if(isset($_POST['fb_id']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['link']) && isset($_POST['gender'])){
		
			$fb_id = mysqli_real_escape_string($con, $_POST['fb_id']);
			$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
			$link = mysqli_real_escape_string($con, $_POST['link']);
			$gender = mysqli_real_escape_string($con, $_POST['gender']);
			
			if(!empty($fb_id) && !empty($first_name) && !empty($last_name) && !empty($link) && !empty($gender)){
				$query = "SELECT * FROM users WHERE fb_id='$fb_id'";
				$query_run = mysqli_query($con,$query);

				if(mysqli_num_rows($query_run)==0){
					
					$queryinsert= "INSERT INTO users VALUES('','$fb_id','$first_name','$last_name','$link','$gender')";
					if(mysqli_query($con, $queryinsert)){
						$query_buynary= "SELECT * FROM users_buynary WHERE fb_id= '$fb_id'";
						$query_buynary_run= mysqli_query($con, $query_buynary);
						if(mysqli_num_rows($query_buynary_run)==0){
							echo 'true';
						}else{
							echo 'false';
						} 
					}  else{
						
					}
				}else{
					$query_buynary= "SELECT * FROM users_buynary WHERE fb_id= '$fb_id'";
					$query_buynary_run= mysqli_query($con, $query_buynary);
					if(mysqli_num_rows($query_buynary_run)==0){
						echo "true";
					}else{
						echo "false";
					}	
				}
			}
		}
  ?>