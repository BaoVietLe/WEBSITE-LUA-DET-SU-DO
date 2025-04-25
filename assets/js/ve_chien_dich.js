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
    
    // Load activities data
    fetch('js/activities.json')
        .then(response => response.json())
        .then(data => {
            renderActivities('past-activities', data.pastActivities);
            renderActivities('upcoming-activities', data.upcomingActivities);
        });
     
            // Load Hanh Trinh Trai Nghiem HTML
    fetch('./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.html')
    .then(response => response.text())
    .then(html => {
        document.getElementById('about-section').innerHTML = html;

        // Load JS sau khi đã render HTML
        const script = document.createElement('script');
        script.src = './Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.js';
        script.onload = () => {
            console.log("JS slideshow loaded");

            // Fetch PHP để lấy dữ liệu
            fetch('./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.php')
                .then(response => response.json())
                .then(data => {
                    if (typeof initSlideshow === 'function') {
                        initSlideshow(data);
                    } else {
                        console.warn("initSlideshow chưa sẵn sàng");
                    }
                })
                .catch(err => console.error('Lỗi fetch PHP:', err));
        };
        document.body.appendChild(script);
    })
    .catch(err => console.error('Lỗi fetch HTML slideshow:', err));
          // Initialize Card Slider
          initCardSlider();
        });

        // Dữ liệu cho slider
        const cardData = [
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/LDSD.jpg",
                title: "Lửa Dệt Sử Đỏ",
                date: "20.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/Vùng đất thép.jpg",
                title: "Hành trình về vùng đất thép",
                date: "26.03.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg",
                title: "Vinh quang người chiến sĩ",
                date: "11.05.2024",
                buttonText: "Chi tiết"
            },
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg",
                title: "Dấu ấn anh hùng",
                date: "22.12.2023",
                buttonText: "Chi tiết"
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
                            <button class="activity-info-button">${cardInfo.buttonText}</button>
                        </div>
                    </div>
                `;
                
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
    

        // Initialize mobile menu
        function initMobileMenu() {
            const toggleButton = document.querySelector('.mobile-menu-toggle');
            if (!toggleButton) return;
            
            // Create mobile menu if it doesn't exist
            if (!document.querySelector('.mobile-menu')) {
                const mobileMenu = document.createElement('div');
                mobileMenu.className = 'mobile-menu';
                mobileMenu.innerHTML = `
                    <div class="mobile-menu-close">
                        <i class="fas fa-times"></i>
                    </div>
                    <ul>
                        <li><a href="index.html">TRANG CHỦ</a></li>
                        <li><a href="ve-chien-dich.html">VỀ CHIẾN DỊCH</a></li>
                        <li><a href="bang-vinh-danh.html">BẢNG VINH DANH</a></li>
                        <li><a href="quy-vinh-danh-anh-hung.html">QUỸ VINH DANH ANH HÙNG</a></li>
                    </ul>
                `;
                document.body.appendChild(mobileMenu);
                
                const overlay = document.createElement('div');
                overlay.className = 'mobile-menu-overlay';
                document.body.appendChild(overlay);
                
                // Close menu when clicking on close button or overlay
                document.querySelector('.mobile-menu-close').addEventListener('click', toggleMobileMenu);
                overlay.addEventListener('click', toggleMobileMenu);
            }
            
            // Toggle menu when clicking on menu button
            toggleButton.addEventListener('click', toggleMobileMenu);
        }

        // Toggle mobile menu
        function toggleMobileMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.mobile-menu-overlay');
            
            mobileMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        // Pagination functionality
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('dot')) {
                // Remove active class from all dots
                document.querySelectorAll('.dot').forEach(dot => {
                    dot.classList.remove('active');
                });
                
                // Add active class to clicked dot
                e.target.classList.add('active');
                
                // You can implement slide functionality here
            }
        });

        // Helper function for rendering activities (if used elsewhere)
        function renderActivities(containerId, activities) {
            const container = document.getElementById(containerId);
            if (!container) return;
            
            container.innerHTML = '';
            activities.forEach(activity => {
                // Render activity elements
            });
        }}

        document.addEventListener('DOMContentLoaded', function() {
            const dots = document.querySelectorAll('.hero-pagination .dot');
            const slides = document.querySelectorAll('.hero-text[id^="slide-"]');
            
            // Make sure all slides except the first one are hidden initially
            slides.forEach((slide, index) => {
                if (index !== 0) {
                    slide.style.display = 'none';
                }
            });
            
            // Add click event listeners to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    // Remove active class from all dots
                    dots.forEach(d => d.classList.remove('active'));
                    
                    // Add active class to clicked dot
                    dot.classList.add('active');
                    
                    // Hide all slides
                    slides.forEach(slide => {
                        slide.style.display = 'none';
                    });
                    
                    // Show the corresponding slide
                    slides[index].style.display = 'block';
                    
                    // Add fade-in animation
                    slides[index].classList.add('fade-in');
                    setTimeout(() => {
                        slides[index].classList.remove('fade-in');
                    }, 500);
                });
            });
            
            // Optional: Auto-rotate slides every 5 seconds
            let currentSlide = 0;
            setInterval(() => {
                currentSlide = (currentSlide + 1) % dots.length;
                dots[currentSlide].click();
            }, 5000);
        });