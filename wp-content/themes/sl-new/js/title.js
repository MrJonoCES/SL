const screenTag = document.querySelectorAll(".hero-slide")

const toggleHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 10) {
    screenTag.forEach(function(el) {
      el.classList.add("scrolled")
    })
  } else {
    screenTag.forEach(function(el) {
      el.classList.remove("scrolled")
    })
  }
}

toggleHeader() 

document.addEventListener("scroll", function () {
    toggleHeader()
})