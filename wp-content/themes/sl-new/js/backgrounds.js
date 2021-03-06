inView('.proj1')
    .on('enter', section => {
      // classList.add is the same JQuery's add.Class() method
      // but the vanilla js version
      section.classList.add('proj1-in-viewport')
    })
    .on('exit', section => {
        section.classList.remove('proj1-in-viewport')
    })

inView('.proj2')
    .on('enter', section => {
      // classList.add is the same JQuery's add.Class() method
      // but the vanilla js version
      section.classList.add('proj2-in-viewport')
    })
    .on('exit', section => {
        section.classList.remove('proj2-in-viewport')
    })    

inView('.proj3')
    .on('enter', section => {
      // classList.add is the same JQuery's add.Class() method
      // but the vanilla js version
      section.classList.add('proj3-in-viewport')
    })
    .on('exit', section => {
        section.classList.remove('proj3-in-viewport')
    })

inView.threshold(0.2)