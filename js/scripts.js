(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
                
                // GALERIA LIGHTBOX
                jQuery('.gallery a').each(function(){
                        var captionText = $(this).closest('.gallery-item').find('.wp-caption-text').html();
                        jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
                });
                

		
	});
	
})(jQuery, this);
