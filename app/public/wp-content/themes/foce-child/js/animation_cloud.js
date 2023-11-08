console.log("animation cloud ok");

function moveCloud() {
  const scrollY = window.scrollY;
  const cloud = document.querySelector(".cloud");

  // Paramètres de réglage (vitesse de déplacement et position initiale du nuage)
  const cloudSpeed = 0.3;
  const initialPosition = 300;

  // Calcul de la nouvelle position du nuage en fonction du défilement
  const cloudX = -scrollY * cloudSpeed + initialPosition;
  cloud.style.transform = `translateX(${cloudX}px)`;
}

// Ajout d'un écouteur d'événement pour le défilement afin de déplacer le nuage
window.addEventListener("scroll", moveCloud);
