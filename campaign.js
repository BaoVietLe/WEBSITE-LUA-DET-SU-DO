document.addEventListener('DOMContentLoaded', function() {
    // Load required styles FIRST
    loadRequiredStyles();
    // Then load components
    setTimeout(() => {
      loadNavbar();
      loadFooter();
      initializeSlider();
    }, 100);
  });
  
  /**
   * Load required CSS files
   */
  function loadRequiredStyles() {
    // Load navbar and footer CSS files
    const navbarCSS = 'Thanh_Navigation_khoa/css/Navigation_Bar_khoa.css';
    const footerCSS = 'footer.css';
  
    // Load navbar CSS first with higher priority
    const navbarLink = loadStylesheet(navbarCSS, true);
    loadStylesheet(footerCSS);
    
    // Return a promise that resolves when navbar CSS is loaded
    return new Promise((resolve) => {
      navbarLink.onload = () => resolve();
      setTimeout(resolve, 500); // Fallback if onload doesn't trigger
    });
  }
  
  /**
   * Load the navigation bar
   */
  function loadNavbar() {
    const navbarContainer = document.getElementById('navbar-container');
    if (!navbarContainer) {
      console.error('Navbar container not found!');
      return;
    }
    
    fetch('Thanh_Navigation_khoa/Navigation_Bar_khoa.html')
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text();
      })
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const navbar = doc.querySelector('.navbar');
        
        if (navbar) {
          // Fix relative image paths
          const images = navbar.querySelectorAll('img');
          images.forEach(img => {
            const src = img.getAttribute('src');
            if (src && !src.startsWith('http')) {
              img.src = 'Thanh_Navigation_khoa/' + src;
            }
          });
          
          // Set active class for Campaign menu item
          const campaignLink = navbar.querySelector('a[href*="campaign"]');
          if (campaignLink) {
            const currentActive = navbar.querySelector('.active');
            if (currentActive) {
              currentActive.classList.remove('active');
            }
            campaignLink.parentElement.classList.add('active');
          }
          
          navbarContainer.innerHTML = '';
          navbarContainer.appendChild(navbar);
  
          // Load associated JavaScript
          loadScript('Thanh_Navigation_khoa/css/js/Navigation_Bar_khoa.js');
        } else {
          console.error('Could not find navbar element');
        }
      })
      .catch(error => {
        console.error('Error loading navbar:', error);
        navbarContainer.innerHTML = '<p>Error loading navbar. Please try again later.</p>';
      });
  }
  
  /**
   * Load the footer
   */
  function loadFooter() {
    const footerContainer = document.getElementById('footer-container');
    if (!footerContainer) {
      console.error('Footer container not found!');
      return;
    }
    
    fetch('footer.html')
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text();
      })
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const footer = doc.querySelector('.footer');
        
        if (footer) {
          footer.style.position = 'relative';
          footer.style.bottom = 'auto';
          
          footerContainer.innerHTML = '';
          footerContainer.appendChild(footer);
        } else {
          console.error('Could not find footer element');
        }
      })
      .catch(error => {
        console.error('Error loading footer:', error);
        footerContainer.innerHTML = '<p>Error loading footer. Please try again later.</p>';
      });
  }
  
  /**
   * Initialize the campaign slider functionality
   */
  function initializeSlider() {
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    const slides = document.getElementsByClassName('slide');
    let slideInterval; // Declare variable outside to maintain reference
    
    // Add click event to dots
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        showSlide(index);
      });
    });
  
    // Function to show a specific slide
    function showSlide(slideIndex) {
      // Hide all slides
      for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
        if (i < dots.length) { // Only update dots that exist
          dots[i].classList.remove('active');
        }
      }
      
      // Show the selected slide
      if (slides[slideIndex]) {
        slides[slideIndex].classList.add('active');
        dots[slideIndex].classList.add('active');
        currentSlide = slideIndex;
      }
    }
  
    // Auto-advance slides every 5 seconds
    function autoAdvance() {
      currentSlide = (currentSlide + 1) % Math.min(slides.length, dots.length);
      showSlide(currentSlide);
    }
    
    // Start auto-advancing
    slideInterval = setInterval(autoAdvance, 5000);
    
    // Stop auto-advancing when user interacts with slider
    const sliderContainer = document.querySelector('.slider-container');
    if (sliderContainer) {
      sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
      });
      
      sliderContainer.addEventListener('mouseleave', () => {
        clearInterval(slideInterval);
        slideInterval = setInterval(autoAdvance, 5000); // Store reference to new interval
      });
    }
  }
  
  /**
   * Load a stylesheet dynamically
   * @param {string} url - Path to the stylesheet
   * @param {boolean} priority - Whether this stylesheet should have high priority
   * @returns {HTMLLinkElement} The created link element
   */
  function loadStylesheet(url, priority = false) {
    if (!document.querySelector(`link[href="${url}"]`)) {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = url;
      
      if (priority) {
        // Add as first element in head for higher priority
        document.head.insertBefore(link, document.head.firstChild);
      } else {
        document.head.appendChild(link);
      }
      
      return link;
    }
    return document.querySelector(`link[href="${url}"]`);
  }
  
  /**
   * Load a JavaScript file dynamically
   * @param {string} url - Path to the JavaScript file
   */
  function loadScript(url) {
    if (!document.querySelector(`script[src="${url}"]`)) {
      const script = document.createElement('script');
      script.src = url;
      script.defer = true;
      document.body.appendChild(script);
    }
  }