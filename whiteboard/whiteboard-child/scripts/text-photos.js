$(window).load(function() {
	
	$('#buttons a').click(function() {
		var current_width = jQuery(window).width();
    	if(current_width < 768) {
			var src = $(this).find('img').attr("src");
			$('#bgstretcher img').attr("src", src);
		}
	});
	
	jQuery('#button1').click(function() {
		jQuery('#text .category1').fadeIn().addClass('show');
		jQuery('#text .category2').fadeOut().removeClass('show');
		jQuery('#text .category3').fadeOut().removeClass('show');
		jQuery('#text .category4').fadeOut().removeClass('show');
		jQuery('#text .category5').fadeOut().removeClass('show');
		jQuery(this).find('div.overlay').addClass('current');
		jQuery('#button2 div.overlay').removeClass('current');
		jQuery('#button3 div.overlay').removeClass('current');
		jQuery('#button4 div.overlay').removeClass('current');
		jQuery('#button5 div.overlay').removeClass('current');
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
		jQuery('#button1 div.overlay').removeClass('current');
		jQuery(this).find('div.overlay').addClass('current');
		jQuery('#button3 div.overlay').removeClass('current');
		jQuery('#button4 div.overlay').removeClass('current');
		jQuery('#button5 div.overlay').removeClass('current');
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
		jQuery('#button1 div.overlay').removeClass('current');
		jQuery('#button2 div.overlay').removeClass('current');
		jQuery(this).find('div.overlay').addClass('current');
		jQuery('#button4 div.overlay').removeClass('current');
		jQuery('#button5 div.overlay').removeClass('current');
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
		jQuery('#button1 div.overlay').removeClass('current');
		jQuery('#button2 div.overlay').removeClass('current');
		jQuery('#button3 div.overlay').removeClass('current');
		jQuery(this).find('div.overlay').addClass('current');
		jQuery('#button5 div.overlay').removeClass('current');
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
		jQuery('#button1 div.overlay').removeClass('current');
		jQuery('#button2 div.overlay').removeClass('current');
		jQuery('#button3 div.overlay').removeClass('current');
		jQuery('#button4 div.overlay').removeClass('current');
		jQuery(this).find('div.overlay').addClass('current');
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
