window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.titre'); // Sélectionne toutes les sections à animer
  
    sections.forEach(section => {
      const sectionPosition = section.getBoundingClientRect().top; // Position de la section par rapport au viewport
      const screenPosition = window.innerHeight / 1.3; // Ajuste la distance de déclenchement si nécessaire
  
      if (sectionPosition < screenPosition) {
        section.classList.add('section-visible'); // Ajoute la classe pour déclencher l'animation
      }
    });
  });  

  document.addEventListener('DOMContentLoaded', function() {
    var s = skrollr.init();
});  