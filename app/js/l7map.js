jQuery(document).ready(function($) {
	$('.page-l7__map_link').on("click", function(event) {
		 event.preventDefault();
		 $('.page-l7__map_popup').fadeOut();
		var current = ($(this).data('targetcity'));
		$("."+current).fadeIn();
	});
});
