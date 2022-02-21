const screenTag = document.querySelectorAll(".hero-slide")

const slideHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 10) {
    screenTag.forEach(function(el) {
      el.classList.add("title-scrolled")
    })
  } else {
    screenTag.forEach(function(el) {
      el.classList.remove("title-scrolled")
    })
  }
}

slideHeader() 

document.addEventListener("scroll", function () {
  slideHeader()
})