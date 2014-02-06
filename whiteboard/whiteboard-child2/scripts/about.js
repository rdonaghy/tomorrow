jQuery(document).ready(function() {
		jQuery("#about-tab").one("click", function() {
			jQuery("#about-overlay, #about-tab").animate({'left':'+=420px'}, 300, 'swing');
			jQuery("#about-tab").addClass("overlay-open");
		});
		jQuery("#close-about-overlay").click(function() {
			jQuery("#about-overlay, #about-tab").animate({'left':'-=420px'}, 300, 'swing');
		});
	});