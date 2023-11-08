console.log("menu ok");

/*Ouverture menu*/

const boutonMenu = document.querySelector(".boutonMenu");
const burger = document.querySelector(".menuFull");

boutonMenu.addEventListener("click", () => {
  burger.classList.toggle("nav_open");
  boutonMenu.classList.toggle("active");
});

/*Fermeture menu sur click lien*/

const menuLinks = document.querySelectorAll(".menuFull ul li a");

menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("nav_open");
    boutonMenu.classList.remove("active");
  });
});
