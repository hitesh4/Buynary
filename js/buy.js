$(document).ready(function(){
	 $('.slider').slider({
	    full_width: false,
	    indicators:false
	  });
	
	  //$('#modal-trigger').leanModal();
	   
	   
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
			var data = $.parseJSON(data);
			//console.log(data);
			global_data= data;
			var length = data[1].length;
			//console.log(length);
			//$('.slider').hide();
			$('.one').hide();
			for(var i=0; i<length; i++) {
				switch(cat){
					case 'book':
						//console.log(data[1][i][3]);
						//$('.check_item').html(data[1][i][3]);
						//$('.check_item').append('<a class="waves-effect waves-light btn modal-trigger" onClick=click_enabler('+i+') href="#modal1">'+data[1][i][3]+'</a>');
						//click_enabler();
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><a class="waves-effect waves-light btn modal-trigger" onClick=click_enabler('+i+') href="#modal1"></a></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br>Edition:'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						//$('.items').append('<div id="modal1" class="modal"><div class="modal-content"><h4>Modal Header</h4><p>A bunch of text</p></div><div class="modal-footer"> <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a></div></div>');
						
						break;
					case 'mobile_tablet_laptop':
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'head_charg_power_cam_cal':
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'cycle':
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][4]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'furniture_music':
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][3]+'<br>'+data[1][i][5]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;
					case 'sports_equipment':
						$('.check_item').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">'+data[1][i][6]+'<br>'+data[1][i][3]+'<br><br>Price Negotiable'+data[0][i][0][10]+'</div><div class="col s3">Price-'+data[0][i][0][5]+'<br><br><a href="'+data[0][i][0][9]+'"></a></div></div></div></div>');
						break;	
				}
			}
		}
	});
}
// $('#check').click(function () {
// 		alert('dbsh');
// 	});	
function click_enabler(i) {
	//$('#check').click(function () {
		//$('.ty_ty').html(global_data[1][i][3]);
		$('.prod_name').html(global_data[0][i][0][2]);
		$('.prod_offered_price').html('Offered Price- '+global_data[0][i][0][5]);
		$('.prod_market_price').html('Market Price- '+global_data[0][i][0][6]);
		$('.link').html('<a href="'+global_data[0][i][0][9]+'">E-commerce Link</a>');
		$('.specific_name').html('Name- '+global_data[1][i][3]);
		$('.subcat').html('Type- '+global_data[1][i][6]);
		$('.author').html('Author- '+global_data[1][i][4]);
		$('.edition').html('Edition- '+global_data[1][i][5]);
		$('.sell_reason').html('Reason to Sell- '+global_data[1][i][8]);
		$('.location').html('Prefered Location- '+global_data[1][i][10]);
		$('.description').html('Product Description- '+global_data[1][i][12]);
		$('.button').html('<button class="btn waves-effect waves-light buy" onclick="check('+i+');" name="action">Buy<i class="material-icons right">send</i></button>');
		var link= global_data[0][i][0][4].split(',');
		//var l = global_data[0][i][0][4].toString();
		console.log(link[0]);
		$('.item_image').append('<img src=../img/'+link[0]+'  style="width:300px !important; height:300px !important" class="circle responsive-img hoverable circular_image">');
		$('#modal1').openModal();
		//$(body + ':not(#modal1)').click(function{ $('#modal1').closeModal();});
		// $(document).mouseup(function (e)
		// {
		//     var container = $("#modal1");

		//     if (!container.is(e.target) // if the target of the click isn't the container...
		//         && container.has(e.target).length === 0) // ... nor a descendant of the container
		//     {
		//         $('#modal1').closeModal();
		//     }
		// });
	//});	
}

function check(i){
	// $('.submit').click(function () {
		console.log('ddd');
		var query_string = 'action=check_status';
		console.log(query_string);
		$.ajax({
		url: 'check_final_buy.php',
		data: query_string,
		type: 'POST',
		success: function (data) {
			//alert(data);
			console.log(data);
			if(data=='true'){
				$('.item_details').remove();
				$('.form').html('<div class="row"><label class="col" style="font-size:16px;">Are you ready to pay the price as demanded by the seller?</label><p class="col"><input name="price" value="Yes" type="radio" id="price_yes" /><label for="price_yes">Yes</label></p><p class="col"><input name="price" value="No" type="radio" id="price_no" /><label for="price_no">No</label></p></div><div class="row no1" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><input id="icon_price" type="text" class="validate" name="no_price"><label for="icon_price">Please express the price range you expect.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="specifications" value="Yes" type="radio" id="specifications_yes" /><label for="specifications_yes">Yes</label></p><p class="col"><input name="specifications" value="No" type="radio" id="specifications_no" /><label for="specifications_no">No</label></p></div><div class="row no2" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_specifications" class="materialize-textarea"></textarea><label for="specifications">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="questions" value="Yes" type="radio" id="questions_yes" /><label for="questions_yes">Yes</label></p><p class="col"><input name="questions" value="No" type="radio" id="questions_no" /><label for="questions_no">No</label></p></div><div class="row no3" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="no_questions" class="materialize-textarea"></textarea><label for="questions">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div><div class="row"><button class="btn waves-effect waves-light" type="submit" name="action" onclick="savetodatabase('+i+');">Submit<i class="material-icons right">send</i></button></div>');
				//$(.'no1_main').html('<div class="row no1" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><input id="icon_price" type="text" class="validate" name="no_price" required><label for="icon_price">Please express the price range you expect.</label></div></div>');
				//$('.form').append('<div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="specifications" value="Yes" type="radio" id="specifications_yes" /><label for="specifications_yes">Yes</label></p><p class="col"><input name="specifications" value="No" type="radio" id="specifications_no" /><label for="specifications_no">No</label></p></div>');
				//$(.'form').append('<div class="row no2" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="specifications" class="textarea_specifications"></textarea><label for="specifications">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div>');
				//$('.form').append('<div class="row"><label class="col" style="font-size:16px;">Did you think that the product specifications mentioned were detailed enough to give you a clear idea about the product?</label><p class="col"><input name="questions" value="Yes" type="radio" id="questions_yes" /><label for="questions_yes">Yes</label></p><p class="col"><input name="questions" value="No" type="radio" id="questions_no" /><label for="questions_no">No</label></p></div>');
				//$(.'form').append('<div class="row no3" style="display:none;"><div class="input-field col s12"><i class="material-icons prefix">account_circle</i><textarea id="questions" class="textarea_questions"></textarea><label for="questions">Please express the price range you expectPlease list the details that you think should have been mentioned.</label></div></div>');
				$('input[type="radio"]').change(function(){
					if($('#price_no').is(':checked')){
						$('.no1').show();
					}else{
						$('.no1').hide();
					}
					if($('#specifications_no').is(':checked')){
						$('.no2').show();
					}else{
						$('.no2').hide();
					}
					if($('#questions_no').is(':checked')){
						$('.no3').show();
					}else{
						$('.no3').hide();
					}
				});	
			}
		}
	});
}

function savetodatabase(i){

		var query_string = 'prod_id='+global_data[1][i][1]+'&fb_id_seller='+global_data[1][i][2];
		console.log(query_string);
		$.ajax({
		url: '../buyhome/savetodatabase.php',
		dataType: "json",
		data: query_string,
		type: 'POST',
		success: function (data) {
			//alert(data);
			var data = $.parseJSON(data);
			console.log(data);
			console.log('ds');
			}
	});	
}