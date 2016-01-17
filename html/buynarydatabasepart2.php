<?php
	// require 'connect.php';
	// if(isset($_POST['rollno']) && isset($_POST['hall']) && isset($_POST['mobileno']) && isset($_POST['sell']) && isset($_POST['buy']) && isset($_POST['know']) && isset($_POST['compare']) && isset($_POST['experience'])){
	// 				if(!empty($_POST['rollno']) && !empty($_POST['hall']) && !empty($_POST['mobileno']) && !empty($_POST['sell']) && !empty($_POST['buy']) && !empty($_POST['know']) && !empty($_POST['compare']) && !empty($_POST['experience'])){
	// 					$rollno= $_POST['rollno'];
	// 					$hall= $_POST['hall'];
	// 					$mobileno= $_POST['mobileno'];
	// 					$sell= implode(',', $_POST['sell']);
	// 					$buy= implode(',', $_POST['buy']);
	// 					$know= implode(',', $_POST['know']);
	// 					$compare= $_POST['compare'];
	// 					$experience= $_POST['experience'];
	// 					$query_data= "INSERT INTO users_buynary VALUES ('','$fb_id','$rollno','$hall','$mobileno','$sell','$buy','$know','$compare','$experience')";
	// 					$query_data_run= mysqli_query($con,$query_data);
	// 				}else{
	// 					echo 'jbaskj';
	// 				}
	// 			}
	require 'connect.php';
	session_start();
	echo $_SESSION['fb_id'];

?>