// Fonction pour vérifier si un élément est dans la vue
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Fonction pour activer l'animation lorsque l'élément est dans la vue
function triggerAnimation() {
  const storySection = document.querySelector(".story");

  if (isInViewport(storySection)) {
    storySection.classList.add("animate");
    window.removeEventListener("scroll", triggerAnimation); // Arrêter d'écouter le scroll une fois que l'animation est déclenchée
  }
}

// Écouteur d'événement de défilement
window.addEventListener("scroll", triggerAnimation);
