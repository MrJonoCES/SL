
// function makeMarquee () {

//   const title = 'A collaborative illustration and design studio based in the South West of the UK'

//   const marqueeText = new Array(50).fill(title).join(" — ")

//   const marquee = document.querySelector('span.strap')

//   marquee.innerHTML = marqueeText

//   function appendNCopies(n, original, appendTo) {
//     for(var i = 0; i < n; i++) {
//         var clone = original.cloneNode(true);
//         appendTo.appendChild(clone);
//     }
// }

// var myDiv = document.getElementById("myDivId");
// appendNCopies(4, myDiv, document.getElementsByClassName("intro-para")[0]);

// }


const title = 'A collaborative illustration and design studio based in the South West of the UK'
const marqueeText = new Array(50).fill(title).join(" — ")

var textWrapper = document.querySelector('.mm6 .letters');
textWrapper.innerHTML = marqueeText
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.mm6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 650,
    delay: anime.stagger(80)
  })
  // .add({
  //   targets: '.mm6',
  //   // opacity: 0,
  //   duration: 1000,
  //   easing: "easeOutExpo",
  //   delay: 10000
  // })
  ;

// here we run our function
// makeMarquee()








// const circles = document.querySelectorAll('.circle') // selects the circles

// // circles returns us an array so we need to loop through each one
// // inside the forEach we get access to each individual element as 'circle'
// // index is used to create a sequential delay to each individual circle
// circles.forEach((circle, index) => {

// circle.animate([
//     // keyframes
//     { transform: 'scale(1)' },
//     { transform: 'scale(1.2)' },
//     { transform: 'scale(1)' }
//   ], {
//     // timing options. delay is multiplied with the index to give a staggered animation start
//     delay: 300 * index,
//     duration: 3000,
//     iterations: Infinity
//   })
// })