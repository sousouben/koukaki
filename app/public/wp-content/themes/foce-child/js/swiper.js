console.log("swiper ok");

const swiper = new Swiper(".swiper-container", {
  // Effet "coverflow"
  effect: "coverflow",

  // Curseur de saisie activé
  grabCursor: true,

  // Centrer les diapositives
  centeredSlides: true,

  // Nombre de diapositives visibles par rapport à la largeur du conteneur
  slidesPerView: "auto",
  spaceBetween: 10,

  // Direction du carrousel (horizontal par défaut)
  direction: "horizontal",

  // Options de l'effet "coverflow"
  coverflowEffect: {
    rotate: 40, // Angle de rotation
    stretch: 0, // Étirement
    depth: 10, // Profondeur
    modifier: 1, // Modificateur
    slideShadows: false, // Ombres des diapositives
  },

  // Options de la boucle
  loop: true, // Activer la boucle infinie
  loopedSlides: 0, // Nombre de diapositives à boucler
  loopAdditionalSlides: 0, // Nombre de diapositives supplémentaires à boucler

  // Options de lecture automatique
  autoplay: {
    delay: 1500, // Délai entre les diapositives (en millisecondes)
    disableOnInteraction: false, // Désactiver la lecture automatique lors de l'interaction de l'utilisateur
  },

  // Vitesse de transition des diapositives
  speed: 1000,

  // Fonction appelée lors de l'initialisation de Swiper
  on: {
    init: function () {
      // Sélectionne toutes les images à l'intérieur des diapositives Swiper
      const swiperImages = document.querySelectorAll(".swiper-slide img");

      // style CSS à chaque image
      swiperImages.forEach((img) => {
        img.style.display = "block";
        img.style.maxWidth = "250px";
      });
    },
  },
});
