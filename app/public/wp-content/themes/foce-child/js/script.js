var s = skrollr.init({
  forceHeight: false, // Effacer la bande blanche en bas du front page
});

document.addEventListener("DOMContentLoaded", function () {
  script();
});

function script() {
  (function ($) {
    console.log("Test script pour menu navigation");
    $(".burger-open").click(function () {
      if ($(".burger-menu").hasClass("active")) {
        $(".burger-menu").animate(
          { height: "toggle", opacity: "toggle" },
          1000
        );
        $(".burger-menu").removeClass("active");
        $(".burger-close-modal").removeClass("close active");
        $(".line").removeClass("open");
        $(".closeCross").removeClass("open");

        // Rétablir le scroll en retirant la classe qui le désactive
        $("body").removeClass("no-scroll");
      } else {
        $(".line").addClass("open");
        $(".closeCross").addClass("open");
        $(".burger-menu").animate(
          { height: "toggle", opacity: "toggle" },
          1000
        );
        $(".burger-menu").toggleClass("active");
        $(".burger-close-modal").toggleClass("close active");

        // Désactiver le scroll en ajoutant la classe
        $("body").addClass("no-scroll");
      }
    });
  })(jQuery);
}

// Animation des titres lors du scroll
window.addEventListener("scroll", () => {
  const sections = document.querySelectorAll(".titre"); // Sélectionne toutes les sections à animer

  sections.forEach((section) => {
    const sectionPosition = section.getBoundingClientRect().top; // Position de la section par rapport au viewport
    const screenPosition = window.innerHeight / 1.3; // Ajuste la distance de déclenchement si nécessaire

    if (sectionPosition < screenPosition) {
      section.classList.add("section-visible"); // Ajoute la classe pour déclencher l'animation
    }
  });
});
