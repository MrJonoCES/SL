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

anime({
	targets: '.circle',
	// we only want to move it left by half of its width
	translateX: '-200%',
	duration: 2500,
	loop: true,
	// remove the default easing effect to keep it consistently smooth
	easing: 'linear'
  })

// anime({
// 	targets: '.svg',
// 	// we only want to move it left by half of its width
// 	translateY: '100%',
// 	duration: 1500,
// 	loop: true,
// 	// remove the default easing effect to keep it consistently smooth
// 	easing: 'linear'
//   })