$('.process-container').each(function () {

function divCalc(){
    var text = document.querySelector('.pp');
    var textHeight = text.offsetHeight;
	var gridSquare = 80;
	var textDiv = document.querySelector('.rptr');
	var oldHeight = textDiv.offsetHeight;
	if (oldHeight < textHeight) {
        textDiv.style.height = textDiv.offsetHeight + gridSquare + 'px';
	}

    console.log(oldHeight, textHeight)

}

window.onload = divCalc;
window.onresize = divCalc;

})
