$(document).ready(function(){
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '536170429887636',
      xfbml      : true,
      status     : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


  
});

function fblogin() {
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        var uid = response.authResponse.userID;
        var accessToken = response.authResponse.accessToken;
        alert(uid);
      } else if (response.status === 'not_authorized') {
        FB.login();
      } else {
        FB.login();
      }
   });
  }