const headerTag = document.querySelector("div.main-title")

const toggleHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 10) {
    headerTag.classList.remove("main-title-on")
  } else {
    headerTag.classList.add("main-title-on")
  }
}

toggleHeader() 
document.addEventListener("scroll", function () {
  toggleHeader()
})