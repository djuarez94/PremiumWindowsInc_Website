$(document).ready(function(){
	/*-------------------------------------
	| Remove Padding on Modal Click
	-------------------------------------*/
	 $('#lightbox2').on('shown.bs.modal', function() {
	        $("body.modal-open").removeAttr("style");
			// $('div.modal .fade .and .carousel .slide .in').css('padding-right' : '0px');
	  });

	$('#lightbox2').on('shown', function() {
	        $("body.modal-open").removeAttr("style");
			// $('div.modal .fade .and .carousel .slide .in').css('padding-right' : '0px');
	});
  });