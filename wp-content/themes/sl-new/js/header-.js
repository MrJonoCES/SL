const headerTag = document.querySelector("div.main-title")
const shrinkHeader = document.querySelector("header")
const innerHeader = document.querySelector("div.inner-header")
const section = document.querySelector("section.grid" )

const toggleHeader = function() {
  const pixels = window.pageYOffset

  if (pixels > 60) {
    headerTag.classList.add("scrolled")
    shrinkHeader.classList.add("header-small")
    innerHeader.classList.add("header-scrolled")
  } else {
    headerTag.classList.remove("scrolled")
    shrinkHeader.classList.remove("header-small")
    innerHeader.classList.remove("header-scrolled")
  }
}

toggleHeader() 
// loads on page load

document.addEventListener("scroll", function () {
  toggleHeader()
})
// loads on scroll
