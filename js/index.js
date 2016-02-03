$(document).ready(function(){
	 // $('#modal1').openModal();
	 // $('#modal1').closeModal();
	  $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      ready: function() {  }, // Callback for Modal open
      complete: function() {  } // Callback for Modal close
    }
  );
	      $(".button-collapse").sideNav();

// 	  $(document).ajaxSuccess(function() {
//   alert("An individual AJAX call has completed successfully");
// });
// //or...
// $(document).ajaxComplete(function() {
//   alert("ALL current AJAX calls have completed");
// });
	//   $('.buy').click(function(){
	//   	var query_string = 'action=check_status'
	// 	console.log(query_string);
	// 	$.ajax({
	// 	url: 'check.php',
	// 	data: query_string,
	// 	type: 'POST',
	// 	success: function (data) {
	// 		alert(data);
	// 			if(data=='True'){
	// 				$('.check').removeClass('modal-trigger');
	// 				$('.modal').hide();
	// 				$(location).attr('href','sell.php/');
	// 			}else{
	// 				$('.check').addClass('modal-trigger');
	// 				$('.modal').show();
					
	// 			}
	// 		}
	// });
	//   });
//facebook integration
	window.fbAsyncInit = function() {
    FB.init({
      appId      : '536170429887636',
      xfbml      : true,
      version    : 'v2.5',
      cookie	 : true
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



});


function fblogin(div) {
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        $('.check').removeClass('modal-trigger');
		$('.modal').remove();
        var uid = response.authResponse.userID;
        var accessToken = response.authResponse.accessToken;
        FB.api('/me', 'get', { access_token: accessToken, fields: 'id,first_name,last_name,link,gender' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;
		    var first_name= response.first_name;
		    var last_name= response.last_name;
		    var link= response.link;
		    var gender= response.gender;

		    $.ajax({
		    	type	:'POST',
		    	url		:'fbdetailsdatabase.php',
		    	data	:'fb_id='+fb_id+'&first_name='+first_name+'&last_name='+last_name+'&link='+link+'&gender='+gender,
		    	success	:function(data){
		    		console.log(data);
		    		if(data=='true'){
		    			//$(location).attr('href','user_buynary.php');
		    			window.location='user_buynary.php';

		    		}else{
		    			// $(location).attr('href','sell.php');
		    			if(div == 'buy'){
		    				$(location).attr('href','buyhome/buy.php');
		    			}else{
		    				$(location).attr('href','sell.php');
		    			}
		    			
		    			//$('.sell').click({
		    				//window.location='sell.php';
		    			//});
		    		}

		    	} 
		    });

		});
        
        
		// $(location).attr('href','sell.php/');
      } else if (response.status === 'not_authorized') {
      	$('.check').addClass('modal-trigger');
		$('.modal').show();
		FB.api('/me', 'get', { access_token: accessToken, fields: 'id,first_name,last_name,link,gender' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;
		    var first_name= response.first_name;
		    var last_name= response.last_name;
		    var link= response.link;
		    var gender= response.gender;

		    $.ajax({
		    	type	:'POST',
		    	url		:'fbdetailsdatabase.php',
		    	data	:'fb_id='+fb_id+'&first_name='+first_name+'&last_name='+last_name+'&link='+link+'&gender='+gender,
		    	success	:function(data){
		    		console.log(data);
        //  			if(data=='false'){
		    		// 	$(location).attr('href','user_buynary.php');
		    		// 	//window.location='user_buynary.php';
		    		// }else{
		    		// 	$(location).attr('href','sell.php');
		    		// 	//window.location='sell.php';
		    		// }	
		    	} 
		    });

		});
      } else {
      	$('.check').addClass('modal-trigger');
		$('.modal').show();
		FB.api('/me', 'get', { access_token: accessToken, fields: 'id,first_name,last_name,link,gender' }, function(response) {
		    console.log(response);
		    var fb_id= response.id;
		    var first_name= response.first_name;
		    var last_name= response.last_name;
		    var link= response.link;
		    var gender= response.gender;

		    $.ajax({
		    	type	:'POST',
		    	url		:'fbdetailsdatabase.php',
		    	data	:'fb_id='+fb_id+'&first_name='+first_name+'&last_name='+last_name+'&link='+link+'&gender='+gender,
		    	success	:function(data){
		    		console.log(data);
		    		// if(data=='true'){
		    		// 	$(location).attr('href','user_buynary.php');
		    		// 	//window.location='user_buynary.php';
		    		// }else{
		    		// 	$(location).attr('href','sell.php');
		    		// 	//window.location='sell.php';
		    		// }
		    	} 
		    });

		});
      }
   },true);
}