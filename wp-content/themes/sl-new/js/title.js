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


// h1 = document.getElementById("post_title")
  
// function updateText(e) {
//   multiplierWidth = e.offsetX / window.innerWidth;
//   randomWeight =  multiplierWidth * (900 - 100) + 100;
//   h1.style.fontVariationSettings = "\"wght\" " + randomWeight;
// }

// window.addEventListener("mousemove", updateText)