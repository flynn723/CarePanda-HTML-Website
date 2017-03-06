jQuery('.smooth-scroll').on('click', function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = jQuery(this.hash);
		target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			jQuery('html, body').animate({
			  scrollTop: target.offset().top-150
			}, 1000);
			return false;
		}
	}
});
jQuery('.header-dropdown-menu-panel-group .panel-title a').on('click', function(){
  jQuery('.navbar-toggle').click() //bootstrap 3.x by Richard
});
//Slick Carousel
/*----------------------------------------------------------------------*/
//Screens carousel
jQuery(document).ready(function(){
  var $screensSlider = $('#screens-slider');
  if ($screensSlider.length) {
      $screensSlider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: false,
          dots: true
      });
  }
  var $screens2Slider = $('#screens2-slider');
  if ($screens2Slider.length) {
      $screens2Slider.slick({
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: true,
          autoplaySpeed: 5000,
          dots: true,
          responsive: [
              {
                  breakpoint: 769,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                  }
              },
              {
                  breakpoint: 481,
                  settings: {
                      arrows: false,
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
              }
          ]
      });
  }
  //Client carousel
  var $clientsSlider = $('#clients-slider');
  if ($clientsSlider.length) {
      $clientsSlider.slick({
          slidesToShow: 5,
          slidesToScroll: 5,
          autoplay: true,
          autoplaySpeed: 5000,
          dots: true,
          responsive: [
              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 4,
                      slidesToScroll: 4
                  }
              },
              {
                  breakpoint: 769,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                  }
              },
              {
                  breakpoint: 481,
                  settings: {
                      arrows: false,
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
              }
          ]
      });
  }
  //Reviews carousel
  var $reviewsSlider = $('#reviews-slider');
  if ($reviewsSlider.length) {
      $reviewsSlider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 6000,
          dots: true
      });
  }
});/* end of jQuery(document).ready(function(){ */

/* Download From App Store Popup
============================== */
function contactPopup(){
    jQuery('#contact-modal').modal({show:true});/* Requires a $ sign */
}
jQuery(document).ready(function(){
    /* Fires after 60 seconds */
    setTimeout( function() {
        contactPopup();
    }, 60000);
});
jQuery('.show-contact-modal-popup').click(function(){
        contactPopup();
});

/* Download From App Store Popup
============================== */
function appPopup(){
    jQuery('#app-modal').modal({show:true});/* Requires a $ sign */
}
/* Fires after 30 seconds */
/* jQuery(document).ready(function(){
    setTimeout( function() {
        appPopup();
    }, 30000);
}); */
jQuery('.show-app-modal-popup').click(function(){
        appPopup();
});