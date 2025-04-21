document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('../Component/Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initMobileMenu();
        });
    
    // Load footer
    fetch('../Component/footer.html')
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
    fetch('../Component/Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.html')
    .then(response => response.text())
    .then(html => {
        document.getElementById('about-section').innerHTML = html;

        // Load JS sau khi đã render HTML
        const script = document.createElement('script');
        script.src = '../Component/Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.js';
        script.onload = () => {
            console.log("JS slideshow loaded");

            // Fetch PHP để lấy dữ liệu
            fetch('../Component/Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.php')
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
                image: "/api/placeholder/294/284",
                title: "Lửa Dệt Sử Đỏ",
                date: "20.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "/api/placeholder/294/284",
                title: "Hành trình về vùng đất thép",
                date: "19.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "/api/placeholder/294/284",
                title: "Vinh quang người chiến sĩ",
                date: "17.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "/api/placeholder/294/284",
                title: "Dấu chân anh hùng",
                date: "17.04.2025",
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

            // Xử lý logic slider
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            if (!prevBtn || !nextBtn) {
                console.error('Slider buttons not found');
                return;
            }

            let currentPosition = 0;
            let cardWidth = 400; // Chiều rộng card
            let cardMargin = 20; // Khoảng cách giữa các card
            let cardsToShow = 3; // Số lượng card hiển thị mỗi lần

            // Điều chỉnh số lượng card hiển thị theo kích thước màn hình
            function updateCardsToShow() {
                const containerWidth = document.querySelector('.slider-container').clientWidth;
                
                if (containerWidth < 768) {
                    cardsToShow = 1;
                } else if (containerWidth < 1000) {
                    cardsToShow = 2;
                } else {
                    cardsToShow = 3;
                }
                
                // Cập nhật cardWidth dựa trên kích thước thực tế của card
                if (sliderWrapper.children.length > 0) {
                    cardWidth = sliderWrapper.children[0].offsetWidth;
                }
                
                // Reset vị trí slider
                moveSlider(0);
            }

            function moveSlider(position) {
                currentPosition = position;
                
                // Giới hạn vị trí
                const maxPosition = cardData.length - cardsToShow;
                currentPosition = Math.max(0, Math.min(currentPosition, maxPosition));
                
                const translateX = currentPosition * -(cardWidth + cardMargin);
                sliderWrapper.style.transform = `translateX(${translateX}px)`;
                
                // Cập nhật trạng thái nút
                prevBtn.disabled = currentPosition === 0;
                nextBtn.disabled = currentPosition >= maxPosition;
            }

            // Xử lý sự kiện nút điều hướng
            prevBtn.addEventListener('click', () => {
                moveSlider(currentPosition - 1);
            });

            nextBtn.addEventListener('click', () => {
                moveSlider(currentPosition + 1);
            });

            // Khởi tạo slider ban đầu
            updateCardsToShow();
            
            // Cập nhật số lượng card hiển thị khi thay đổi kích thước màn hình
            window.addEventListener('resize', updateCardsToShow);
        }

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
        }