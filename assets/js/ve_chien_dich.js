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
    
        // Load activities
        fetch('js/activities.json')
            .then(response => response.json())
            .then(data => {
                renderActivities('past-activities', data.pastActivities);
                renderActivities('upcoming-activities', data.upcomingActivities);
            });
    
        // 👉 GỌI HÀM SLIDER SAU CÙNG
        initCardSlider(); 
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

        // Dữ liệu cho slider
     const cardData = [
            {
        image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/LDSD.jpg",
        title: "Lửa Dệt Sử Đỏ",
        date: "20.04.2025",
        buttonText: "Chi tiết",
        link: "./Lửa-dệt-sử-đỏ.php"  // Thêm liên kết đến trang HTML tương ứng
    },
    {
        image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/Vùng đất thép.jpg",
        title: "Hành trình về vùng đất thép",
        date: "21.03.2025",
        buttonText: "Chi tiết",
        link: "./Hành-trình-về-vùng-đất-thép.php"  // Thêm liên kết đến trang HTML tương ứng
    },
    {
        image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg",
        title: "Vinh quang người chiến sĩ",
        date: "11.05.2024",
        buttonText: "Chi tiết",
        link: "./Vinh-quang-người-chiến-sĩ.php"  // Thêm liên kết đến trang HTML tương ứng
    },
    {
        image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg",
        title: "Dấu ấn anh hùng",
        date: "23.12.2023",
        buttonText: "Chi tiết",
        link: "./Dấu-ấn-anh-hùng.php"  // Thêm liên kết đến trang HTML tương ứng
    }
        ];

        function initCardSlider() {
    const sliderWrapper = document.getElementById('sliderWrapper');
    if (!sliderWrapper) {
        console.error('Slider wrapper not found');
        return;
    }

    // Xóa nội dung cũ nếu có
    sliderWrapper.innerHTML = '';

    // Tạo các card từ dữ liệu
    function createCardElement(cardInfo) {
        const card = document.createElement('div');
        card.className = 'activity-info';

        card.innerHTML = `
            <img class="activity-info-image" src="${cardInfo.image}" alt="${cardInfo.title}">
            <div class="activity-info-content">
                <div class="activity-info-title">${cardInfo.title}</div>
                <div class="activity-info-date-button">
                    <div class="activity-info-date">${cardInfo.date}</div>
                    <button class="activity-info-button" data-link="${cardInfo.link}">${cardInfo.buttonText}</button>
                </div>
            </div>
        `;

        // Thêm sự kiện click cho button
        const button = card.querySelector('.activity-info-button');
        button.addEventListener('click', function() {
            // Chuyển hướng đến trang HTML được chỉ định
            window.location.href = this.getAttribute('data-link');
        });

        return card;
    }

    // Thêm tất cả các card vào slider
    cardData.forEach(cardInfo => {
        const cardElement = createCardElement(cardInfo);
        sliderWrapper.appendChild(cardElement);
    });
    

    // Xác định các biến cấu hình slider
    let cardsPerPage = 3; // Số lượng card hiển thị mỗi trang
    let cardWidth = 400; // Chiều rộng mỗi card
    let cardMargin = 20; // Khoảng cách giữa các card
    let currentPage = 0; // Trang hiện tại
    let totalPages = Math.ceil(cardData.length / cardsPerPage); // Tổng số trang
    
// Tìm hoặc tạo container cho pagination dots
const sliderContainer = document.querySelector('.slider-container');
let paginationContainer;

// Tìm pagination đã có sẵn trong HTML
const existingPagination = document.querySelector('.pagination');

if (existingPagination) {
    // Sử dụng pagination hiện có
    paginationContainer = existingPagination;
    paginationContainer.innerHTML = ''; // Xóa dots cũ
} else {
    // Tạo pagination mới nếu không tìm thấy
    paginationContainer = document.createElement('div');
    paginationContainer.className = 'pagination';
    
    // Thêm pagination vào sau slider container
    if (sliderContainer) {
        sliderContainer.parentNode.insertBefore(paginationContainer, sliderContainer.nextSibling);
    }
}

// Tạo pagination dots
for (let i = 0; i < totalPages; i++) {
    const dot = document.createElement('span');
    dot.className = 'dot';
    if (i === 0) dot.classList.add('active');
    dot.dataset.page = i;
    paginationContainer.appendChild(dot);
}
    
    // Hàm điều chỉnh số lượng card hiển thị theo kích thước màn hình
    function updateCardsToShow() {
        const containerWidth = document.querySelector('.slider-wrapper').clientWidth;
        
        if (containerWidth < 768) {
            cardsPerPage = 1;
        } else if (containerWidth < 1000) {
            cardsPerPage = 2;
        } else {
            cardsPerPage = 3;
        }
        
        // Cập nhật cardWidth dựa trên kích thước thực tế của card
        if (sliderWrapper.children.length > 0) {
            cardWidth = sliderWrapper.children[0].offsetWidth;
        }
        
        // Tính lại tổng số trang
        totalPages = Math.ceil(cardData.length / cardsPerPage);
        
        // Cập nhật lại pagination dots
        updatePaginationDots();
        
        // Đảm bảo trang hiện tại không vượt quá tổng số trang
        if (currentPage >= totalPages) {
            currentPage = totalPages - 1;
        }
        
        // Di chuyển slider đến trang hiện tại
        moveToPage(currentPage);
    }
    
    // Hàm cập nhật pagination dots
    function updatePaginationDots() {
        paginationContainer.innerHTML = '';
        
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('div');
            dot.className = 'dot';
            if (i === currentPage) dot.classList.add('active');
            dot.dataset.page = i;
            paginationContainer.appendChild(dot);
        }
        
        // Thêm lại event listener cho các dots mới
        document.querySelectorAll('.dot').forEach(dot => {
            dot.addEventListener('click', function() {
                const page = parseInt(this.dataset.page);
                moveToPage(page);
            });
        });
    }
    
    // Hàm di chuyển slider đến trang cụ thể
    function moveToPage(page) {
        if (page < 0 || page >= totalPages) return;
        
        currentPage = page;
        
        // Di chuyển slider
        const translateX = currentPage * -(cardsPerPage * (cardWidth + cardMargin));
        sliderWrapper.style.transform = `translateX(${translateX}px)`;
        sliderWrapper.style.transition = 'transform 0.3s ease-in-out';
        
        // Cập nhật trạng thái active của dots
        document.querySelectorAll('.dot').forEach((dot, index) => {
            if (index === currentPage) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    // Thêm event listener cho các dots
    document.querySelectorAll('.dot').forEach(dot => {
        dot.addEventListener('click', function() {
            const page = parseInt(this.dataset.page);
            moveToPage(page);
        });
    });
    
    // Khởi tạo slider ban đầu
    updateCardsToShow();
    
    // Cập nhật slider khi thay đổi kích thước màn hình
    window.addEventListener('resize', updateCardsToShow);
 
    document.addEventListener('DOMContentLoaded', function() {
        // Variables
        const slides = document.querySelectorAll('.hero-text');
        const dots = document.querySelectorAll('.hero-pagination .dot');
        let currentSlide = 0;
        const slideInterval = 5000; // 5 seconds per slide
        let slideTimer;
        
        // Initialize
        showSlide(0);
        startSlideTimer();
        
        // Add click events to dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                resetSlideTimer();
            });
        });
        
        // Functions
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Remove active class from all dots
            dots.forEach(dot => {
                dot.classList.remove('active');
            });
            
            // Show the selected slide
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        
        function startSlideTimer() {
            slideTimer = setInterval(nextSlide, slideInterval);
        }
        
        function resetSlideTimer() {
            clearInterval(slideTimer);
            startSlideTimer();
        }
        
        // Count-up animation for numbers
        const countElements = document.querySelectorAll('.count-up');
        
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const target = parseInt(element.getAttribute('data-target'));
                    let count = 0;
                    const duration = 2000; // 2 seconds
                    const increment = target / (duration / 16);
                    
                    const counter = setInterval(() => {
                        count += increment;
                        
                        if (count >= target) {
                            clearInterval(counter);
                            if (target >= 1000) {
                                // For thousands, format as 12K+
                                element.innerText = Math.floor(target/1000) + 'K+';
                            } else {
                                element.innerText = target + '+';
                            }
                        } else {
                            if (target >= 1000) {
                                // For thousands, format as 12K+
                                element.innerText = Math.floor(count/1000) + 'K+';
                            } else {
                                element.innerText = Math.floor(count) + '+';
                            }
                        }
                    }, 16);
                    
                    observer.unobserve(element);
                }
            });
        }, observerOptions);
        
        countElements.forEach(element => {
            observer.observe(element);
        });
        
        // Enhanced title animation
        const heroTitle = document.querySelector('.hero-title');
        if (heroTitle) {
            // Add flame particles to title
            createFlameParticles(heroTitle);
            
            // Add hover effect to title
            heroTitle.addEventListener('mouseover', () => {
                heroTitle.classList.add('burning-intense');
            });
            
            heroTitle.addEventListener('mouseout', () => {
                heroTitle.classList.remove('burning-intense');
            });
        }
        
        // Function to create flame particles
        function createFlameParticles(element) {
            const particleCount = 15; // Number of particles
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('span');
                particle.className = 'flame-particle';
                
                // Random position along the text
                const posX = Math.random() * 100;
                
                // Set CSS variables for animation
                particle.style.setProperty('--pos-x', `${posX}%`);
                particle.style.setProperty('--delay', `${Math.random() * 3}s`);
                particle.style.setProperty('--duration', `${2 + Math.random() * 3}s`);
                particle.style.setProperty('--size', `${5 + Math.random() * 10}px`);
                
                element.appendChild(particle);
            }
        }
    });
}