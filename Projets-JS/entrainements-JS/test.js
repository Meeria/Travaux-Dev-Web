// declarations varaiables

const reponse = document.querySelector('p');

const questionContainer = document.querySelector(".click-event");

const boutton1 = document.getElementById('btn-1');
const boutton2 = document.getElementById('btn-2');
const boutton3 = document.getElementById('btn-3');




// Faire apparaitre la réponse
// évenement avec le click

boutton1.addEventListener('click', () => {
  // reponse.style.visibility = "visible";
  // questionContainer.style.background = 'red';
  reponse.classList.toggle('showBad-reponse');
})
boutton2.addEventListener('click', () => {
  // reponse.style.visibility = "visible";
  // questionContainer.style.background = 'red';
  reponse.classList.toggle('showBad-reponse');
})
boutton3.addEventListener('click', () => {
  // reponse.style.visibility = "visible";
  // questionContainer.style.background ="green";
  reponse.classList.toggle('showGood-reponse');
})

//-------------------------------------------------------------


// événements sur la souris 

const mouseMove = document.querySelector(".mousemove");

window.addEventListener("mousemove", (e) => {
  mouseMove.style.left = e.pageX + "px";
  mouseMove.style.top = e.pageY + "px";
});

// window.addEventListener("mousedown", () => {
//   mouseMove.style.background = ("red");
// })

// window.addEventListener("mouseup", () => {
//   mouseMove.style.background = ("none");
// })

questionContainer.addEventListener("mouseenter", () => {
  questionContainer.style.background = ("red");
})

questionContainer.addEventListener("mouseout", () => {
  questionContainer.style.background = ("green");
})

reponse.addEventListener("mouseover", () => {
  reponse.style.rotate = ("180deg");
})

//----------------------------------------------------------------

// évenement avec le clavier ==> KeyPress

const keypressContainer = document.querySelector('.keypress');
const key = document.getElementById('key');

document.addEventListener('keypress', (event) => {
key.textContent = event.key;
if (event.key === "m" || event.key === "d" ){
key.style.color = "red";
keypressContainer.style.background = "green";
} else {
  key.style.color = "yellow";
  keypressContainer.style.background = "black";
}
});

// scroll event 

const nav = document.querySelector("nav")

window.addEventListener('scroll', () => {
if ( window.scrollY > 200){
  nav.style.top = "0px";
} else {
  nav.style.top = "-50px";
}
})


