document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('./Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initMobileMenu();
        });
    
    // Load footer
    fetch('./Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        // Slider functionality
        const slides = document.querySelectorAll('.Quy_info_section_content');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let currentSlide = 0;
        const slideCount = slides.length;
        
        // Function to show the current slide
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Remove active class from all dots
            dots.forEach(dot => {
                dot.classList.remove('active');
            });
            
            // Show current slide and activate current dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            
            // Update current slide index
            currentSlide = index;
        }
        
        // Navigate to next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            showSlide(currentSlide);
        }
        
        // Navigate to previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            showSlide(currentSlide);
        }
        
        // Event listeners for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
        
        // Event listeners for navigation buttons
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        // Auto slide (optional) - uncomment if you want auto-sliding
        
        const slideInterval = setInterval(() => {
            nextSlide();
        }, 5000); // Change slide every 5 seconds
        
        // Pause auto-sliding when hovering over the slider
        const sliderContainer = document.querySelector('.Quy_info_slider');
        sliderContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        sliderContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(() => {
                nextSlide();
            }, 5000);
        });
        
        // Initialize first slide
        showSlide(0);
    });