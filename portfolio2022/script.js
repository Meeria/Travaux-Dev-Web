
function changeClass(i){
  for(var j=0; j<6; j++){
    if(j==i){
      document.getElementById("section"+j).className = "active";
    }
    else {
      document.getElementById("section"+j).className = "none";
    }
  }
}


