// declarations varaiables

const reponse = document.querySelector('p');

const questionContainer = document.querySelector(".click-event");

const boutton1 = document.getElementById('btn-1');
const boutton2 = document.getElementById('btn-2');
const boutton3 = document.getElementById('btn-3');
const body = document.querySelector('body');



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
  reponse.style.rotate = ("360deg");
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

// -----------------------------------------------------------------

// scroll event 

const nav = document.querySelector("nav")

window.addEventListener('scroll', () => {
if ( window.scrollY > 200){
  nav.style.top = "0px";
} else {
  nav.style.top = "-50px";
}
})

//------------------------------------------------------------

// evenement sur Formulaires

const inputName = document.querySelector('input[type="text"]');
const select = document.querySelector('select');
const form = document.querySelector('form');

let pseudo = "";
let language = "";

inputName.addEventListener ('input', (e) => {
//console.log(e.target.value);
if (e.target.value === "meria"){
  body.style.background = "pink";
} else {
  body.style.background = "";
};
pseudo = e.target.value
}) 

select.addEventListener ('input', (e) => {
language = e.target.value;
})

form.addEventListener ('submit', (e) => {
  e.preventDefault();
  if (cgv.checked){
document.querySelector('form > div').innerHTML = `<h2> Pseudo : ${pseudo}</h2>
<h3> Language : ${language} </h3>`;
  } else {
    alert("veuillez accepter les cgv")
  }
})

//----------------------------------------------------------------

// Les ForEache

// const boxes = document.getElementsByClassName('box');

const boxes = document.querySelectorAll(".box");

boxes.forEach((box) => {
  box.addEventListener('click', (e) => {
    console.log(e.target);
  })
})

//--------------------------------------------

// addEventListener Vs onclick

// StopPropagation



// BOM


// Ouvrir une fenetre popup
// window.open('https://google.com', )
// window.close('https://google.com', )