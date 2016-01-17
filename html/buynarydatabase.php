<?php
require 'connect.php';
session_start();
$fb_id= $_SESSION['fb_id'];
if(isset($fb_id)){
	$fb_id= mysqli_real_escape_string($con, $fb_id);
	
	if(!empty($fb_id)){
		
		$query = "SELECT * FROM users WHERE fb_id='$fb_id'";
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)==0){
			
			echo 'false';
		}else{
			$query_check= "SELECT * FROM users_buynary WHERE fb_id='$fb_id'";
			$query_check_run = mysqli_query($con,$query_check);
			if(mysqli_num_rows($query_check_run)==0){
				
				if(isset($_POST['rollno']) && isset($_POST['hall']) && isset($_POST['mobileno']) && isset($_POST['sell']) && isset($_POST['buy']) && isset($_POST['know']) && isset($_POST['compare']) && isset($_POST['experience'])){
					
					if(!empty($_POST['rollno']) && !empty($_POST['hall']) && !empty($_POST['mobileno']) && !empty($_POST['sell']) && !empty($_POST['buy']) && !empty($_POST['know']) && !empty($_POST['compare']) && !empty($_POST['experience'])){
						
						$rollno= $_POST['rollno'];
						$hall= $_POST['hall'];
						$mobileno= $_POST['mobileno'];
						$sell= implode(',', $_POST['sell']);
						$buy= implode(',', $_POST['buy']);
						$know= implode(',', $_POST['know']);
						$compare= $_POST['compare'];
						$experience= $_POST['experience'];
						$query_data= "INSERT INTO users_buynary VALUES ('','$fb_id','$rollno','$hall','$mobileno','$sell','$buy','$know','$compare','$experience')";
						$query_data_run= mysqli_query($con,$query_data);
						header('Location: sell.php');
					}else{
						echo 'jbaskj';
					}
				}
			}	
		}
	}
}
	 
?>