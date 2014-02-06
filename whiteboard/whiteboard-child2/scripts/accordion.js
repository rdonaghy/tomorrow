jQuery(function() {
	jQuery( "#accordion" ).accordion({
        heightStyle: "content",
		active: false,
		event: "click",
		collapsible: true
    });
	jQuery('.mobile-category1 h4').click(function() {
  		jQuery('#category1-image').fadeIn().addClass('show');
		jQuery('#category2-image').fadeOut().removeClass('show');
		jQuery('#category3-image').fadeOut().removeClass('show');
	});
	jQuery('mobile-category2 h4').click(function() {
  		jQuery('#category1-image').fadeOut().removeClass('show');
		jQuery('#category2-image').fadeIn().addClass('show');
		jQuery('#category3-image').fadeOut().removeClass('show');
	});
	jQuery('.mobile-category3 h4').click(function() {
  		jQuery('#category1-image').fadeOut().removeClass('show');
		jQuery('#category2-image').fadeOut().removeClass('show');
		jQuery('#category3-image').fadeIn().addClass('show');
	});
});