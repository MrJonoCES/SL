const heroTag = document.querySelector(".hero")

const toggleHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 50) {
    heroTag.classList.add("scrolled")
  } else {
    heroTag.classList.remove("scrolled")
  }
}

toggleHeader() 

document.addEventListener("scroll", function () {
    toggleHeader()
})