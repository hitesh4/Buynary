<?php
require 'connect.php';
session_start();
if(isset($_POST['action']) == 'check_status') {
	if(isset($_SESSION['user_session'])){
		 echo 'True';	
	}
	else {
		echo 'False';
	}
}
?>