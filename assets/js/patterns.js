const position1 = { x: 0, y: 0 }
const position2 = { x: 0, y: 0 }
const position3 = { x: 0, y: 0 }
const position4 = { x: 0, y: 0 }

// function vwToPx(vw) {
//   return window.innerHeight / 100 * vw;
// }
//
// function vhToPx(vh) {
//   return window.innerWidth / 100 * vh;
//
// }

interact('#tri-1').draggable({
  listeners: {
    start (event) {
      console.log(event.type, event.target)
    },
    move (event) {
      position1.x += event.dx
      position1.y += event.dy

      event.target.style.transform =
        `translate(${position1.x}px, ${position1.y}px) rotate(-50deg)`
    },
  }
})

interact('#tri-2').draggable({
  listeners: {
    start (event) {
      console.log(event.type, event.target)
    },
    move (event) {
      position2.x += event.dx
      position2.y += event.dy

      event.target.style.transform =
        `translate(${position2.x}px, ${position2.y}px) rotate(50deg) `
    },
  }
})

interact('#tri-3').draggable({
  listeners: {
    start (event) {
      console.log(event.type, event.target)
    },
    move (event) {
      position3.x += event.dx
      position3.y += event.dy

      event.target.style.transform =
        `translate(${position3.x}px, ${position3.y}px) rotate(-130deg)`
    },
  }
})

interact('#tri-4').draggable({
  listeners: {
    start (event) {
      console.log(event.type, event.target)
    },
    move (event) {
      position4.x += event.dx
      position4.y += event.dy

      event.target.style.transform =
        `translate(${position4.x}px, ${position4.y}px) rotate(130deg)`
    },
  }
})
