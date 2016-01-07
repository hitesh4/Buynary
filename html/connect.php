<?php
$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'buynary';
$con = mysqli_connect($hostname, $user, $password,$database);
@mysqli_select_db($database);
?>