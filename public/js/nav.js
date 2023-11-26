window.addEventListener('scroll', function() {
	const navbar = document.getElementById('myNav');
	const heroSection = document.getElementById('heroSection');
	const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
  
	if (window.pageYOffset > heroBottom - navbar.offsetHeight) {
	  navbar.classList.add('scrolled'); // Add a CSS class to change navbar styling
	} else {
	  navbar.classList.remove('scrolled'); // Remove the class if not scrolled past the hero section
	}
  });