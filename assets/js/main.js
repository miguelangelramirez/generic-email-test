// Javascript
jQuery(document).ready( function($) {
	$.ajax({
		url: "http://generic-email.com",
		success: function( data ) {
			alert( 'Your email has been submitted.');
		}
	})

})

var data = $.ajax({
    type: 'POST',
    url: ajaxurl,
    async: false,
    dataType: 'json',
    data: { action: 'generic_email_ajax_email_submit' },
    done: function(response) {
        return response;
    }
}).responseJSON;

//hidding element to show message
$("#submit-subscription").click(function(){
    $(".message").show();
    $(".generic-email-widget").hide();
});