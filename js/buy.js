$(document).ready(function(){
	 $('.slider').slider({
	    full_width: false,
	    indicators:false
	  });
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
			console.log(data.length)
			var length = data.length;
			$('.slider').hide();
			$('.one').hide();
			for(var i=0; i<length; i++) {
				$('.items').append('<div class="row"><div class="col s9 center-align"><div class="col s4 logo"><img src="http://placehold.it/150x150" class="circle responsive-img hoverable"></div><div class="col s8"><div class="col s3">Product Name'+data[i][3]+'</div><div class="col s3">Price</div></div></div></div>');
				// // $('.dep_profiles').append(data[i].full_name);
				// var full_name = data[i].full_name;
				// full_name = full_name.replace(/\s+/g,' ').trim();
				// var tags = data[i].broadarea_ms_phd;
				// tags = tags.replace(/\s+/g,' ').trim();
				// var university = data[i].university;
				// university = university.replace(/\s+/g,' ').trim();
				// $('.dep_profiles').append('<div class="col-sm-4 col-md-4 placard"><div class="thumbnail"><img class="placard_image" src="check.png"><div class="caption"><h3>'+full_name+'</h3><p>'+university+'</p><hr><p>'+tags+'</p></div></div></div>');
			}
		}
	});
}