
(function ($, Drupal, window, document, undefined) {
	$(document).ready( function(){
		//$('#block-nice-menus-1').hide();
		$('.bt-menu').on('click', function() {
			$('#block-nice-menus-1').show();
			$('.nice-menu-down').toggle();
		});
	});//Fin ready
})(jQuery, Drupal, this, this.document);

