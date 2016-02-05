$(document).ready({
	 window.fbAsyncInit = function() {
    FB.init({
      appId      : '536170429887636',
      xfbml      : true,
      version    : 'v2.5',
      cookie   : true
    });
  };

  FB.Event.subscribe('auth.login', function () {
         window.location="index.php";
      });

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    
  } else if (response.status === 'not_authorized') {
   	alert(FB.login());
  } else {
   	alert(FB.login()); 
  }
 });
});