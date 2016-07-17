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
