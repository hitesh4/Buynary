<?php
   require 'connect.php';
   
session_start();
$_SESSION['user_session'] = 1;// should be unique id of the user;

// session_start();
// 		if(isset($_POST['username']) && isset($_POST['password'])){
// 		$username = $_POST['username'];
// 		$password = $_POST['password'];
// 		if(!empty($username) && !empty($password)){
// 			$password_hash = 'hitesh';
// 			$username = 'hitesh';
// 			$query = "SELECT * FROM users WHERE username='$username' && password='$password_hash'";
// 			$query_run = mysqli_query($link,$query);
// 			if(mysqli_num_rows($query_run)==0){
// 				echo '<div id="box2"> User doesn\'t exist.</div>';
// 				alert('ddfdf');
// 			}else{
// 				alert('ds');
// 					//$user_id = mysqli_result($query_run, 0, 'username');
// 					// $user_id = mysqli_fetch_array($query_run);
// 					// $_SESSION['user_id']=$user_id;
// 					// header('LOCATION:logintest.php');
// 					$_SESSION['user_session'] = 1;// should be unique id of the user;
// 			}
// 		}
// 	}
?>