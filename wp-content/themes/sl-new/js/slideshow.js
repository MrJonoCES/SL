$(".slideshow-holder").each(function () {

  var slide  = 0;
  var max    = $(this).find("div.slide").length;
  var holder = $(this).find(".holder");
  var prev   = $(this).find("a.prev");
  var next   = $(this).find("a.next");
  var pagination = $(this).find(".slider-controls span");
  
  var moveNext = function () {
    if (slide < max - 1) {
      slide = slide + 1;
    } else {
      slide = 0;
    }
    
    holder.css("left", (slide * -720) + "px");
    pagination.html((slide + 1) + "/" + max);
  };
  
  var movePrev = function () {
    if (slide > 0) {
      slide = slide - 1;
    } else {
      slide = max - 1;
    }
    
    holder.css("left", (slide * -720) + "px");
    pagination.html((slide + 1) + "/" + max);
  }
  
  var autoMove = setInterval(function () {
    moveNext();
  }, 5000);

  prev.on("click", function (ev) {
    movePrev();
    clearInterval(autoMove);    
    ev.preventDefault();
  })

  next.on("click", function (ev) {
    moveNext();
    clearInterval(autoMove);
    ev.preventDefault();
  });  
});