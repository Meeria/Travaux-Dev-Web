
function changeClass(obj){

 var nodeList = document.querySelectorAll(".menu a");
  for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].className = "none";
  }
  obj.className = "active";

}


