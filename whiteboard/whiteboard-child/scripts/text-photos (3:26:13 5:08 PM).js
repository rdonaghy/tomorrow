$(window).load(function() {
	
	/*var imageHeight = $('#large-images').height();
	var headlinePositionTop = imageHeight + 191 - 62; // 190 is the header height; 62 is the height of the headline box
	var headlinePositionBottom = imageHeight + 191;*/
	// alert('the headline position is ' + headlinePositionTop);
//	$('.story-text').css('top', headlinePositionTop);
	// $('.story-text').css('bottom', headlinePositionBottom);
	
	// var headlinePositionClicked = headlinePositionTop - 237 // height of text overlay
	
	$('#buttons a').click(function() {
		var src = $(this).find('img').attr("src");
		$('#bgstretcher img').attr("src", src);
	});
	
	jQuery('#button1').click(function() {
		
		jQuery('#text .category1').fadeIn().addClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
		jQuery('#text .category4').fadeOut().removeClass('show');
		jQuery('#text .category5').fadeOut().removeClass('show');
	});
	
	jQuery('#text .category1 h3').toggle(function() {
		jQuery('.category1').animate({'height':'440px'}, 500);
		jQuery('.category1 .scroll-pane').fadeIn().jScrollPane();
	},function() {
		jQuery('.category1').animate({'height':'50px'}, 500);
		jQuery('.category1 .scroll-pane').hide().jScrollPane();
	})

	jQuery('#button2').click(function() {
		
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeIn().addClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
		jQuery('#text .category4').fadeOut().removeClass('show');
		jQuery('#text .category5').fadeOut().removeClass('show');
	});
	
	jQuery('#text .category2 h3').toggle(function() {
		jQuery('.category2').animate({'height':'440px'}, 500);
		jQuery('.category2 .scroll-pane').fadeIn().jScrollPane();
	},function() {
		jQuery('.category2').animate({'height':'50px'}, 500);
		jQuery('.category2 .scroll-pane').hide().jScrollPane();
	})
	
	jQuery('#button3').click(function() {
		
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeIn().addClass('show');
		jQuery('#text .category4').fadeOut().removeClass('show');
		jQuery('#text .category5').fadeOut().removeClass('show');
	});
	
	jQuery('#text .category3 h3').toggle(function() {
		jQuery('.category3').animate({'height':'440px'}, 500);
		jQuery('.category3 .scroll-pane').fadeIn().jScrollPane();
	},function() {
		jQuery('.category3').animate({'height':'50px'}, 500);
		jQuery('.category3 .scroll-pane').hide().jScrollPane();
	})
	
	jQuery('#button4').click(function() {
		
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
		jQuery('#text .category4').fadeIn().addClass('show');
		jQuery('#text .category5').fadeOut().removeClass('show');
	});
	
	jQuery('#text .category4 h3').toggle(function() {
		jQuery('.category4').animate({'height':'440px'}, 500);
		jQuery('.category4 .scroll-pane').fadeIn().jScrollPane();
	},function() {
		jQuery('.category4').animate({'height':'50px'}, 500);
		jQuery('.category4 .scroll-pane').hide().jScrollPane();
	})
	
	jQuery('#button5').click(function() {
		jQuery('#text .category1').fadeOut().removeClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
		jQuery('#text .category4').fadeOut().removeClass('show');
		jQuery('#text .category5').fadeIn().addClass('show');
	});
	
	jQuery('#text .category5 h3').toggle(function() {
		jQuery('.category5').animate({'height':'440px'}, 500);
		jQuery('.category5 .scroll-pane').fadeIn().jScrollPane();
	},function() {
		jQuery('.category5').animate({'height':'50px'}, 500);
		jQuery('.category5 .scroll-pane').hide().jScrollPane();
	});

});
	/*function resetHeadlineBar() {
		jQuery('#text').css('top', headlineBar);
	};*/
