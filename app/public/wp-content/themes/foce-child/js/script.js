/* window.addEventListener('scroll', function() {
    const imageLogo = document.querySelector('.banner img');
    const banner = document.querySelector('.banner');
  
    const bannerHeight = banner.offsetHeight;
    const scrollPosition = window.scrollY;
    
    const stopPosition = bannerHeight - imageLogo.offsetHeight;
  
    if (scrollPosition < stopPosition) {
      imageLogo.style.transform = `translateY(${scrollPosition}px)`;
    } 
    else {
      imageLogo.style.transform = `translateY(${stopPosition}px)`;
    }
  }); */

  
  window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.story #characters'); // Sélectionne toutes les sections à animer
  
    sections.forEach(section => {
      const sectionPosition = section.getBoundingClientRect().top; // Position de la section par rapport au viewport
      const screenPosition = window.innerHeight / 1.3; // Ajuste la distance de déclenchement si nécessaire
  
      if (sectionPosition < screenPosition) {
        section.classList.add('section-visible'); // Ajoute la classe pour déclencher l'animation
      }
    });
  });  
  