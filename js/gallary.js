if (document.querySelector(".pop-up")) {
  document.querySelectorAll(".card-img-img img").forEach((img) => {
    img.onclick = () => {
      document.querySelector(".pop-up").style.display = "block";
      document.querySelector(".pop-up img").src = img.getAttribute("src");
    };
  });

  document.querySelector(".pop-up span").onclick = () => {
    document.querySelector(".pop-up").style.display = "none";
  };
  
}

document.addEventListener('DOMContentLoaded', function() {
  const fullscreenImage = document.querySelector('.fullscreen-image');

  fullscreenImage.addEventListener('click', function() {
    fullscreenImage.classList.toggle('active');
  });
});