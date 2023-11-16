console.log("parallax ok");

const titre = document.querySelector("#parallax");

// écouteur d'événements pour le défilement
window.addEventListener("scroll", () => {
  // Récupére la position de défilement verticale
  const scrollY = window.scrollY;

  // Régle la vitesse de parallaxe pour le titre
  const titreParallaxSpeed = 0.5;

  // Limite la position maximale sur l'axe des Y à 250 pixels
  const maxTranslationY = 250;
  const translationY = Math.min(scrollY * titreParallaxSpeed, maxTranslationY);

  // Applique l'effet de parallaxe en ajustant la position Y du titre
  titre.style.transform = `translateY(${translationY}px)`;
});
