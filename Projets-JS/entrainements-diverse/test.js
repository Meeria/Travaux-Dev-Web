// declarations varaiables

const reponse = document.querySelector('p');

const questionContainer = document.querySelector(".click-event");

const boutton1 = document.getElementById('btn-1');
const boutton2 = document.getElementById('btn-2');
const boutton3 = document.getElementById('btn-3');


// Faire apparaitre la réponse

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