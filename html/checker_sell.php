<?php
if(isset($_SERVER['HTTP_REFERER'])) {
	if($_SERVER['HTTP_REFERER'] !='http://localhost/Project10/html/sell.php') {
		echo '<script>alert("To proceed to Buynary you need to LOG IN");window.location.href="index.php";</script>';
		//header("Location: index.php");
	}
} else {
	echo '<script>alert("To proceed to Buynary you need to LOG IN");window.location.href="index.php";</script>';
	//header("Location: index.php");
}
?>
