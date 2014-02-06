$(window).load(function() {
	changePlayerSize();
	$(window).resize(changePlayerSize);
});

function changePlayerSize() {
var windowHeight = $(document).height();
var footerHeight = 141;
var headerHeight = 190;
/*var playerHeight = $("#player").height();*/
var largeImagesHeight = $("#large-images").height();
var largeImagesWidth = $("#large-images").width();
var buttonsHeight = $("#buttons").height();
var playerHeight = Math.floor(largeImagesWidth * .667); // aspect ratio of photos is 3/2
//var playerHeight = Math.floor(largeImagesWidth);
var buttonsOverflow = buttonsHeight - playerHeight;
if (buttonsOverflow > 0) {
	var availableSpace = windowHeight - footerHeight - headerHeight - buttonsOverflow;
} else {
	var availableSpace = windowHeight - footerHeight - headerHeight;
}
// used for debugging
$('.number').html(windowHeight);
$('.available').html(availableSpace);
$('.playerheight').html(playerHeight);
$('.largeimagesheight').html(largeImagesHeight);
$('.buttonsoverflow').html(buttonsOverflow);
$('#body').css('height', availableSpace);
var playerPadding = (availableSpace - playerHeight) / 2;
$('#player').css('height', availableSpace);
$('#large-images').css('height', largeImagesHeight);
$('#buttons .scroll-pane').css('height', playerHeight);
if (playerPadding > 1) {
	$('#player').css('padding-top', playerPadding);
	$('#player').css('padding-bottom', playerPadding);
} else {
	$('#player').css('padding-top', '0px');
	$('#player').css('padding-bottom', '0px');
}

};