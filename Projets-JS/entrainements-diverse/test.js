// document.querySelector('h4').style.background = "yellow";

const reponse = document.querySelector('p');

// reponse.style.visibility = "visible";

const questionContainer = document.querySelector(".click-event");

// questionContainer.addEventListener('click', () => {
//   questionContainer.style.background = 'red';
// } )


// Faire apparaitre la réponse

const boutton1 = document.getElementById('btn-1');
const boutton2 = document.getElementById('btn-2');
const boutton3 = document.getElementById('btn-3');

boutton1.addEventListener('click', () => {
  reponse.style.visibility = "visible";
  questionContainer.style.background = 'red';
})
boutton2.addEventListener('click', () => {
  reponse.style.visibility = "visible";
  questionContainer.style.background = 'red';
})
boutton3.addEventListener('click', () => {
  reponse.style.visibility = "visible";
  questionContainer.style.background ="green";
})