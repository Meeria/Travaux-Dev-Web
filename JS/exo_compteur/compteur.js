let count = 0;
document.querySelector("button").addEventListener("click", function () {
  document.getElementById("result").innerHTML = ++count;
});
if ((count = 0)) {
  document.querySelector("button").style.backgroundColor = "green";
  document.getElementById("result").style.color = "red";
}
