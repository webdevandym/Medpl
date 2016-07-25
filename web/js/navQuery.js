"use strick"
//NAV Scroll!
$(document).ready(function() {
	$('#nav').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750
	});
});

//NAV min Scroll
$(document).ready(function() {
	$('#nav-min').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 750
	});
});

//Button Scroll;
$(document).ready(function() {
	$('a[href="#other"]').click(function(){
		var el = $(this).attr('href');
		$('body').animate({
			scrollTop: $(el).offset().top}, 750);
		return false;
	});
});

//footter scrol

$(document).ready(function() {
	$('.footerLink li a').click(function(){
		var el = $(this).attr('href');
		$('body').animate({
			scrollTop: $(el).offset().top}, 750);
		return false;
	});
});

//Go Up!!

$(document).ready(function(){
	$.goup({
		location: 'right',
		locationOffset: 25,
		bottomOffset: 20,
		zIndex: 9999,
		containerRadius: 4,
		containerColor: '#008ee6',
		containerClass: 'button_up',
		title: "Go UP!",
		titleAsText: false,

	});
});

//Close Nav bar after click!

$(document).ready(function () {
	$('.navbar-nav li a[href != "#"]').click(function(event) {
		if ($(this).attr('href')) { $(".navbar-collapse").collapse('hide');}
	});

});

// auto hidde navbar 
function hideDetect(){

	$("div.top_menu").autoHidingNavbar();

	if ($(window).width() > 768) {

		$("div.top_menu").autoHidingNavbar('setDisableAutohide', true);
		$("div.top_menu").autoHidingNavbar('show');

	} else {

		$("div.top_menu").autoHidingNavbar('setDisableAutohide', false);

	}
}

hideDetect();
// Re-launch dection in window resized
window.onresize = hideDetect;

$(document).ready(function() {

  // e.preventDefault();
  $(".langSelect a span").removeClass('active');
  var element = window.location.href.split('/')[3];
  $(".langSelect a[href='"+element+"'] span").addClass('active');

});

// alert(window.location.href.split('/')[3]);
