document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('./Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
        // Execute navbar initialization code
        initNavbar();
        });
    
    // Load footer
    fetch('./Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });
    function initNavbar() {
        const navLinks = document.querySelectorAll(".nav-links a");
        const nav = document.querySelector(".nav-links");
        const indicator = document.getElementById("indicator");
        const hamburger = document.getElementById("hamburger");
        const overlay = document.getElementById("overlay");
        
        // Toggle mobile menu
        if (hamburger) {
            hamburger.addEventListener("click", function() {
                nav.classList.toggle("active");
                hamburger.classList.toggle("active");
                overlay.classList.toggle("active");
                
                // Ngăn cuộn trang khi menu mở
                if (nav.classList.contains("active")) {
                    document.body.style.overflow = "hidden";
                } else {
                    document.body.style.overflow = "auto";
                }
            });
        }
        
        // Đóng menu khi click vào overlay
        if (overlay) {
            overlay.addEventListener("click", function() {
                nav.classList.remove("active");
                hamburger.classList.remove("active");
                overlay.classList.remove("active");
                document.body.style.overflow = "auto";
            });
        }
        
        // Đóng menu khi click vào link
        if (navLinks) {
            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    if (window.innerWidth <= 768) {
                        nav.classList.remove("active");
                        hamburger.classList.remove("active");
                        overlay.classList.remove("active");
                        document.body.style.overflow = "auto";
                    }
                });
            });
        }
        
        // Xử lý phần notification popup
        const bellIcon = document.querySelector(".notification-icon");
        const notificationPopup = document.querySelector(".notification-popup");
      
        // Kiểm tra xem các phần tử có tồn tại không
        if (bellIcon && notificationPopup) {
            // Lắng nghe sự kiện click trên chuông thông báo
            bellIcon.addEventListener("click", function (event) {
                event.stopPropagation();
                
                // Hiển thị/ẩn popup bằng cách trực tiếp thay đổi style
                if (notificationPopup.style.display === "block") {
                    notificationPopup.style.display = "none";
                } else {
                    notificationPopup.style.display = "block";
                }
            });
      
            // Đóng popup khi click bên ngoài
            document.addEventListener("click", function (event) {
                if (!notificationPopup.contains(event.target) && !bellIcon.contains(event.target)) {
                    notificationPopup.style.display = "none";
                }
            });
        }
    }
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
    // JavaScript for Responsive Design Enhancements

document.addEventListener('DOMContentLoaded', function() {
    // Add responsive meta tag if not present
    if (!document.querySelector('meta[name="viewport"]')) {
        const meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, initial-scale=1.0';
        document.head.appendChild(meta);
    }
    
    // Initialize the slider functionality
    initSlider();
    
    // Handle responsive height adjustments
    handleResponsiveHeight();
    
    // Adjust hero section on small screens
    adjustHeroSection();
    
    // Adjust total amount display for smaller numbers
    formatTotalAmount();
});

// Initialize the slider with proper responsive behavior
function initSlider() {
    const slides = document.querySelectorAll('.Quy_info_section_content');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentSlide = 0;
    
    // Function to update current slide
    function updateSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
        
        // Dynamically adjust slider height
        const slidesContainer = document.querySelector('.Quy_info_slides');
        const activeSlide = document.querySelector('.Quy_info_section_content.active');
        if (slidesContainer && activeSlide) {
            slidesContainer.style.height = `${activeSlide.offsetHeight}px`;
        }
    }
    
    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => updateSlide(index));
    });
    
    // Event listeners for navigation buttons
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            const newIndex = (currentSlide - 1 + slides.length) % slides.length;
            updateSlide(newIndex);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            const newIndex = (currentSlide + 1) % slides.length;
            updateSlide(newIndex);
        });
    }
    
    // Initialize slider height
    window.addEventListener('load', () => {
        updateSlide(currentSlide);
    });
    
    // Adjust slider height on window resize
    window.addEventListener('resize', () => {
        updateSlide(currentSlide);
    });
}

// Handle responsive height for hero section
function handleResponsiveHeight() {
    function adjustHeight() {
        const heroSection = document.querySelector('.Quy_hero_section');
        if (heroSection) {
            // For mobile devices or short screens
            if (window.innerHeight < 600 || window.innerWidth < 480) {
                heroSection.style.height = 'auto';
                heroSection.style.minHeight = '100vh';
            } else {
                heroSection.style.height = '100vh';
            }
        }
    }
    
    // Initial adjustment
    adjustHeight();
    
    // Adjust on resize
    window.addEventListener('resize', adjustHeight);
}

// Adjust hero section contents for smaller screens
function adjustHeroSection() {
    const heroTitle = document.querySelector('.Quy_hero_section h1');
    const totalAmount = document.querySelector('.Quy_hero_section_total_amount');
    
    function adjustElements() {
        if (window.innerWidth <= 480) {
            // On very small screens, make sure elements don't overlap
            if (heroTitle && totalAmount) {
                const titleRect = heroTitle.getBoundingClientRect();
                const titleBottom = titleRect.top + titleRect.height;
                
                // If title is too large, adjust position of total amount
                if (titleBottom > window.innerHeight * 0.4) {
                    totalAmount.style.top = `${Math.max(titleBottom + 20, window.innerHeight * 0.45)}px`;
                }
            }
        } else {
            // Reset inline styles for larger screens
            if (totalAmount) {
                totalAmount.style.top = '';
            }
        }
    }
    
    // Initial adjustment
    adjustElements();
    
    // Adjust on resize
    window.addEventListener('resize', adjustElements);
}

// Format the total amount for better display
function formatTotalAmount() {
    const amountElement = document.querySelector('.Quy_hero_section_total_amount h2');
    if (amountElement) {
        const amount = amountElement.textContent.trim();
        
        // Add commas for thousands separator for better readability
        const formattedAmount = parseInt(amount.replace(/,/g, '')).toLocaleString('vi-VN');
        amountElement.textContent = formattedAmount;
        
        // Reduce font size if the number is very large
        if (formattedAmount.length > 10) {
            amountElement.style.fontSize = '5rem';
        } else if (formattedAmount.length > 8) {
            amountElement.style.fontSize = '5.5rem';
        }
    }
}