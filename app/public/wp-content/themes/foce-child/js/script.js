var s = skrollr.init({
  forceHeight: false, // Effacer la bande blanche en bas du front page
});

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
