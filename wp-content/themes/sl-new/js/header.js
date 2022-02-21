const headerTag = document.querySelector("div.main-title")
// const shrinkHeader = document.querySelector("header")
// const innerHeader = document.querySelector("div.inner-header")
// const section = document.querySelector("section.grid" )

const toggleHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 10) {
    headerTag.classList.remove("main-title-on")
  } else {
    headerTag.classList.add("main-title-on")
  }
}

toggleHeader() 
// loads on page load

document.addEventListener("scroll", function () {
  toggleHeader()
})
// loads on scroll

$(document).ready(function() {     
  $('.project-details, .arrow').hover(function(){     
    $('.project-title-home').addClass('title-on'); 
    $('.arrow').addClass('arrow-on');    
  },     
  function(){    
    $('.project-title-home').removeClass('title-on');
    $('.arrow').removeClass('arrow-on');     
  });
});  