


// SHRINK NAVBAR
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

// HAMBURGER TOGGLE NAVBAR
$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});


// DROPDOWN TOGGLE NAVBAR

jQuery(function($){
$('.dropdown2').click(function(){
$('.dropdown-content2', this).toggleClass('activedropdown');
});
});

$(document).ready(function() {
        $(".footertoggler").click(function(){
            $(this).siblings('.dropdownc-footer').toggleClass('dropdownc-footerblock');
        });
   });



$(document).ready(function() {
        $(".navtoggler").click(function(){
            $(this).siblings('.dropdown-content').toggleClass('activedropdown');
        });
   });
// TOGGLE NAVBAR
jQuery(function($){
$('.navbar-toggle').click(function(e){
$('.navbar-collapse').toggleClass('rightnav');
$('.navbar-toggle').toggleClass('indexcity');
});
$(document).click(function(e){
if(!$(e.target).closest('.navbar-toggle, .rightnav, .navbar-collapse').length){
$('.navbar-collapse').removeClass('rightnav');
$('.navbar-toggle').removeClass('indexcity');
$('.hamburger').removeClass('is-active');

}
})
});



// BACK 2 TOP BUTTON

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link


	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//SMOOTH SCROLL TOP
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
