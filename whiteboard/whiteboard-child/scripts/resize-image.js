$(document).ready(function() {
	var footerHeight = 141;
	var headerHeight = 190;
	var documentHeight = $(document).height();
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	//alert('The windowWidth variable is ' + windowWidth);
	// var availableSpace = windowHeight - footerHeight - headerHeight;
	// var largeImagesHeight = $("#large-images").height();
	var largeImagesDivHeight = documentHeight - footerHeight - headerHeight;
	var bgstretcherHeight = $('#bgstretcher').height();
	// alert('The largeImagesDivHeight variable is ' + largeImagesDivHeight);
	// alert('The bgstretcherHeight variable is ' + bgstretcherHeight);
	if (bgstretcherHeight > largeImagesDivHeight) {
		$('#large-images').css('height', bgstretcherHeight);
		$('#buttons .scroll-pane').css('max-height', bgstretcherHeight);
	} else {
		$('#large-images').css('height',largeImagesDivHeight);
		$('#buttons .scroll-pane').css('max-height', largeImagesDivHeight);
	}
});