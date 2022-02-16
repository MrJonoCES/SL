const irisLeft = document.querySelector("div.iris-left")
const irisRight = document.querySelector("div.iris-right")

let interval = null // saves the interval to a let

// move the eyes every 3 seconds by taking a random number between 0 and 1 and multiplying it by the page width or height
const startInterval = function () {
  clearInterval(interval) //stops any previous intervals running from previous mouse movements, preventing multiple intervals running at once
  interval = setInterval(() => { // starts a fresh interval
    const x = Math.random() * window.innerWidth * 10
    const y = Math.random() * window.innerHeight * 10
    
    moveEye(irisLeft, x, y)
    moveEye(irisRight, x, y)
  }, 1000)
}


const moveEye = function (tag, mouseX, mouseY) {
  // center of the eye, the anchor point
  const eyeMidX = tag.getBoundingClientRect().left
  const eyeMidY = tag.getBoundingClientRect().top
  
  // find the difference between the eye and the mouse, minus the scrolling behaviour (- window.pageYOffset)
  const diffX = mouseX - eyeMidX
  const diffY = mouseY - eyeMidY - window.pageYOffset
  
  // pythagorus theorem
  const diff = Math.sqrt(diffX * diffX + diffY * diffY)
  
  // what is the capped radius
  const radius = Math.min(10, diff)
  
  // tan in math, works out the angle between the anchor point and the mouse
	const angle = Math.atan2(diffY, diffX)
  
  // lets get the capped version of this, based on the angle. Caps it to within the eye.
  const cappedX = radius * Math.cos(angle)
  const cappedY = radius * Math.sin(angle)
  
  // picks up the tag and moves it around accordingly
  const eyeTag = tag.querySelector("div")
  
  eyeTag.style.left = cappedX + "px"
  eyeTag.style.top = cappedY + "px"
}

// this starts the random eye movement
startInterval()

document.addEventListener("mousemove", function (event) {
  startInterval() 
  moveEye(irisLeft, event.pageX, event.pageY)
  moveEye(irisRight, event.pageX, event.pageY)
})