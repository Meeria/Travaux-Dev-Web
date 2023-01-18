var photos = document.querySelector(".photos");

const ring = () => {
    const audio = new Audio();
    audio.src = "sf_chien_03.mp3";
    audio.play();
};

photos.addEventListener('click', () => {
   ring();
  });