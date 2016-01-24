$(document).ready(function(){
	 $('.slider').slider({
	    full_width: false,
	    indicators:false
	  });
	
	  //$('#modal-trigger').leanModal();
	   $('#modal1').openModal();
	   $('#modal1').closeModal();
	   
  $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      ready: function() {  }, // Callback for Modal open
      complete: function() {  } // Callback for Modal close
    }
  );
});	  

function itemdisplay(cat, subcat){
	var cat= cat;
	var subcat =subcat;
	var query_string= 'cat='+cat+'&subcat='+subcat;

	$.ajax({
		url: 'itemdisplay.php',
		data: query_string,
		type: 'POST',
		success: function (data) {
			$('#modaltrigger').leanModal({ 
            top: 110,
            overlay: 0.8,
            closeButton: ".hidemodal"
        });
			var data = $.parseJSON(data);
			console.log(data);
			var length = data[1].length;
			//$('.slider').hide();
			$('.one').hide();
			for(var i=0; i<length; i++) {
				switch(cat){
					case 'book':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><a class="waves-effect waves-light btn modal-trigger" href="#modal1"></a></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br>Edition:'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						$('.items').append('<div id="modal1" class="modal"><div class="modal-content"><h4>Modal Header</h4><p>A bunch of text</p></div><div class="modal-footer"> <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a></div></div>');
						break;
					case 'mobile_tablet_laptop':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'head_charg_power_cam_cal':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'cycle':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'furniture_music':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'sports_equipment':
						$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][6]+'<br>'+data[1][i][3]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;	
				}

				// if(cat=='book'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br>Edition:'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				// }else if(cat='mobile_tablet_laptop'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				// }else if(cat= 'head_charg_power_cam_cal'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				// }else if(cat= 'cycle'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				//  }else if(cat= 'furniture_music'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				// }else if(cat= 'sports_equipment'){
				// 	$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
				// }
			}
		}
	});
}

	
