const resize = () => {
    document.querySelectorAll(".prb").forEach((div) => {
      
		var textDiv = div.querySelector('.rptr');

		if (textDiv) {
			var text = div.querySelector('.pp');
			var textHeight = text.offsetHeight;
			var gridSquare = 80;
			var oldHeight = textDiv.offsetHeight;
			var spareHeight = textHeight + gridSquare;

			if (oldHeight > spareHeight) {
				textDiv.style.height = oldHeight - gridSquare + 'px';
			}

			while (oldHeight < textHeight) {
				var textDiv = div.querySelector('.rptr');
				textDiv.style.height = textDiv.offsetHeight + gridSquare + 'px';
				var oldHeight = textDiv.offsetHeight;
			}

			console.log(oldHeight, textHeight, spareHeight)

		} 

    })
}

window.onresize = resize
resize()

const duplicateHTML = (element, quantity) => {
	const newContent =  new Array(quantity).fill(element.innerHTML).join('')
	element.innerHTML = newContent
  }

const circles = document.querySelector('#triangle')
duplicateHTML(circles, 12)
anime({
	targets: '.circle',
	// we only want to move it left by half of its width
	translateX: '-200%',
	duration: 1500,
	loop: true,
	// remove the default easing effect to keep it consistently smooth
	easing: 'linear'
  })

const barDot = document.querySelector('#bar-dot')
duplicateHTML(barDot, 12)
anime({
	targets: '#dot',
	translateY: '200%',
	delay: (el, i, l) => i * 100,
	duration: 2000,
	loop: true,
	direction: 'alternate',
	easing: 'spring(1, 80, 10, 0)'
})

const wheelBox = document.querySelector('#wheelbox')
duplicateHTML(wheelBox, 20)
anime({
  targets: '#wheel path',
  rotate: '1turn',
  delay: (el, i, l) => i * 100,
  duration: 1200,
  loop: true,
  direction: 'alternate',
  easing: 'easeInOutSine'
})

const moonBox = document.querySelector('#moonbox')
duplicateHTML(moonBox, 20)
anime({
  targets: '#moon path',
//   fill: '#E65F45',
  translateX: '50%',
  delay: (el, i, l) => i * 100,
  duration: 1200,
  loop: true,
  direction: 'alternate',
  easing: 'easeInOutSine'
})

const archDot = document.querySelector('#arch-dot')
duplicateHTML(archDot, 20)
anime({
	targets: '#ball',
	translateY: '500%',
	delay: (el, i, l) => i * 100,
	duration: 2000,
	loop: true,
	direction: 'alternate',
	easing: 'easeInOutSine'
})