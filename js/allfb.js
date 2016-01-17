$(document).ready(function(){
		//facebook integration
	window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '536170429887636',
	      xfbml      : true,
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

  	
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        var uid = response.authResponse.userID;
        var accessToken = response.authResponse.accessToken;
        FB.api('/me', 'get', { access_token: accessToken, fields: 'id' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;

		    $.ajax({
		    	type	:'POST',
		    	url		:'buynarydatabase.php',
		    	data	:'fb_id='+fb_id,
		    	success	:function(data){
		    		console.log(data);

		    	} 
		    });

		});
        
        
		// $(location).attr('href','sell.php/');
      } else if (response.status === 'not_authorized') {
		 FB.api('/me', 'get', { access_token: accessToken, fields: 'id' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;

		    $.ajax({
		    	type	:'POST',
		    	url		:'buynarydatabase.php',
		    	data	:'fb_id='+fb_id,
		    	success	:function(data){
		    		console.log(data);

		    	} 
		    });

		});
      } else {
      	 FB.api('/me', 'get', { access_token: accessToken, fields: 'id' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;

		    $.ajax({
		    	type	:'POST',
		    	url		:'buynarydatabase.php',
		    	data	:'fb_id='+fb_id,
		    	success	:function(data){
		    		console.log(data);

		    	} 
		    });

		});
      }
   });

});