 $(document).ready(function() {
    var sell_form = $('.sell_form').height();
    $('.sell_logo').css('height',sell_form);
    $('select').material_select(); 
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'mm/yyyy',
	today: '',
  	clear: '',
  	close: 'Submit',
  	onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
  });
    var date = $( ".picker__select--month" ).val()+'/'+$( ".picker__select--year option:selected" ).text();
    $('.picker__holder').onClose(function(){
    	$(da)
    });
    $('.picker__weekday-display').text(date);

  });
