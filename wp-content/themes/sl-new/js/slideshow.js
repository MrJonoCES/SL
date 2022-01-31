jQuery(window).on('load', function() {
	jQuery('.flexslider').flexslider({
	  animation: "slide",
	  controlsContainer: jQuery(".custom-controls-container"),
	  customDirectionNav: jQuery(".custom-navigation a")
	});
  });