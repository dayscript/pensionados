
(function ($, Drupal, window, document, undefined) {
	$(document).ready( function(){
		$('.bt-menu').on('click', function(e) {
			$('#block-nice-menus-1').find('ul li').toggle();
		});
		var text = 'Hola mundo';
		var jbSplash = $('.jb-splash-info p').text();
		console.log(jbSplash);

	});//Fin ready
})(jQuery, Drupal, this, this.document);

