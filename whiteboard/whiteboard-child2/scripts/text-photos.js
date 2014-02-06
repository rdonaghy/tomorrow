jQuery(window).load(function() {
    jQuery('#button1').click(function() {
		jQuery('#category1-image').fadeIn().addClass('show');
		jQuery('#category2-image').fadeOut().removeClass('show');
		jQuery('#category3-image').fadeOut().removeClass('show');
		jQuery('#button1').addClass('current');
		jQuery('#button2').removeClass('current');
		jQuery('#button3').removeClass('current');
		jQuery('#text .research-area').fadeOut().removeClass('show');
		jQuery('#text .category1').fadeIn().addClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
	});
	jQuery('#text .category1 h3').click(function() {
    	jQuery('#text .category1 p, #text .category1 img').toggle();
	    jQuery('#text .category1 p, #text .category1 img').toggleClass('show-text');
		return false;
	});		
	jQuery('#button2').click(function() {
		jQuery('#category1-image').fadeOut().removeClass('show');
		jQuery('#category2-image').fadeIn().addClass('show');
		jQuery('#category3-image').fadeOut().removeClass('show');
		jQuery('#button1').removeClass('current');
		jQuery('#button2').addClass('current');
		jQuery('#button3').removeClass('current');
		jQuery('#text .research-area').fadeOut().removeClass('show');
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeIn().addClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
	});
	jQuery('#text .category2 h3').click(function() {
    	jQuery('#text .category2 p, #text .category2 img').toggle();
	    jQuery('#text .category2 p, #text .category2 img').toggleClass('show-text');		
	    return false;
	});		
	jQuery('#button3').click(function() {
		jQuery('#category1-image').fadeOut().removeClass('show');
		jQuery('#category2-image').fadeOut().removeClass('show');
		jQuery('#category3-image').fadeIn().addClass('show');
		jQuery('#button1').removeClass('current');
		jQuery('#button2').removeClass('current');
		jQuery('#button3').addClass('current');
		jQuery('#text .research-area').fadeOut().removeClass('show');
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeIn().addClass('show');
	});
	jQuery('#text .category3 h3').click(function() {
    	jQuery('#text .category3 p, #text .category3 img').toggle();
	    jQuery('#text .category3 p, #text .category3 img').toggleClass('show-text');
	    return false;
	});		
});