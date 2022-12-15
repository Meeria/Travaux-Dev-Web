let random = Math.floor(Math.random() * 10);
console.log(random);

document.getElementById("valider").addEventListener("click", function () {
  let number = document.getElementById("number").value;

  if (number == random) {
    alert("Bien joué !");
  } else {
    alert("Raté");
  }
});
