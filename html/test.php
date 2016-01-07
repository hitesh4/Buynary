<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript" src="../js/test.js"></script>


</head>
<body>


<fb:login-button autologoutlink="true" onlogin="OnRequestPermission();">
</fb:login-button>
<div class="buy" style="width:100px; height:100px; background:black;" onclick="fblogin();">
	
</div>
</body>
</html>