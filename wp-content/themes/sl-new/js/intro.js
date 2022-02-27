
// here we declare our function
function makeMarquee () {

  const title = 'A collaborative illustration and design studio based in the South West of the UK'
  // puts our marquee text into a string

  // an array is a list of things 
  // here we make a new array with 50 spaces in it using the 'constructor'
  // and then fill each space with the title text
  // then it's joined together as a single text string
  const marqueeText = new Array(50).fill(title).join(" — ")

  // what we need to do:
  // 1: select the marquee span
  const marquee = document.querySelector('.marquee span')
  // 2. set our repeating text as the content
  marquee.innerHTML = marqueeText

  function appendNCopies(n, original, appendTo) {
    for(var i = 0; i < n; i++) {
        var clone = original.cloneNode(true);
        appendTo.appendChild(clone);
    }
}

var myDiv = document.getElementById("myDivId");
appendNCopies(4, myDiv, document.getElementsByClassName("intro-para")[0]);

}

// here we run our function
makeMarquee()