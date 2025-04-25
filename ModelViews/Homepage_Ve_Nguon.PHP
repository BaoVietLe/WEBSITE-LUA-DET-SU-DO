<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lửa Dệt Sử Đỏ Campaign</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" 
      rel="stylesheet"
    >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Homepage_Ve_Nguon.css">
</head>

<body>
    <!-- Header will be loaded dynamically -->
    <div id="header-container"></div>
    <!-- Content from test.html -->
    <div class="banner-container">
        <div class="banner-texture"></div>
        <div class="banner-watercolor"></div>

        <div class="content-wrapper">
            <div class="left-content">
                <div class="left-content-top">
                    <div class="title" style="font-size: 90px;">Cổng thông tin</div>
                    <div class="subtitle" style="font-size: 70px;">Lửa Dệt Sử Đỏ</div>
                    <div class="description" style="font-size: 30px;">Mô tả về website tại đây</div>
                </div>

                <div class="left-content-bottom">
                    <div class="button-group">
                        <a href="./ve_chien_dich.html" class="button">
                            <div class="button-text">
                                <span>TÌM HIỂU THÊM VỀ</span>
                                <span>VIỆT HÙNG LỤC</span>
                            </div>
                        </a>
                        <a href="./ve_chien_dich.html" class="button button-white">
                            <div class="button-text">
                                <span>ĐĂNG KÝ THAM GIA</span>
                                <span>VIỆT HÙNG LỤC</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="right-content">
                <div class="image-info-no-action">
                    <img src="./Footer/Ảnh/HD_1.png" alt="Hình ảnh hoạt động" class="image-info-no-action-image">
                    <div class="image-info-no-action-content">
                        <div class="image-info-no-action-title">
                            CHƯƠNG TRÌNH KỶ NIỆM<br>50 NĂM GIẢI PHÓNG MIỀN NAM - THỐNG NHẤT ĐẤT NƯỚC
                        </div>
                        <div class="image-info-no-action-date">
                            06/04/2025 - 30/04/2025
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Activities Section from test.html -->
    <div class="activities-container">
        <div class="homepage-title">
            Chuỗi hoạt động về nguồn<br>cùng khoa Công nghệ thông tin kinh doanh
        </div>

        <div class="sub-header-wrapper">
            <div class="sub-header">NHỮNG HOẠT ĐỘNG ĐÃ VÀ ĐANG THỰC HIỆN
            </div>
        </div>

    </div>
    <!-- Card Slider Container -->
    <div class="activities-container"> <!-- dùng lại class -->
        <div class="slider-container">
            <div class="slider-wrapper" id="sliderWrapper">
                <!-- Cards will be added here dynamically -->
            </div>
            <!-- Pagination dots sẽ được thêm vào đây bởi JS -->
        </div>
    </div>
    <div class="activities-container"> <!-- dùng lại class -->
        <div id="about-section"></div>
    </div>

    <!-- Content from test1.html -->
    <div class="hero-section">
        <div class="container">
            <div class="header">
                <div class="homepage-title">
                    Khơi nguồn cảm hứng<br>nhân văn cùng<br>Quỹ vinh danh Anh hùng
                </div>
                <button class="btn-more" onclick="location.href='./Quy_Vinh_danh_anh_hung.html'">TÌM HIỂU THÊM</button>

            </div>

            <div class="fund-news-container">
                    <!-- Cột trái: ảnh + tiêu đề -->
                    <div class="fund-news-picture">
                        <img src="./Footer/Ảnh/HD_1.png" alt="Ảnh tổng kết" class="fund-news-picture-img">
                        <div class="fund-news-title-box">Tổng kết quỹ vinh danh anh hùng <br> tháng 3 - 2025</div>
                    </div>

                    <!-- Cột phải: nội dung + nút -->
                    <div class="fund-news-sapotext">
                        <p>
                        Tháng Tư – tháng của những kỷ ức lịch sử và lòng biết ơn – Quỹ Vinh danh Anh hùng tiếp tục
                            hành trình tri ân, lan tỏa những giá trị cao đẹp của tinh thần yêu nước và sự hy sinh thầm
                            lặng. Bản tổng kết tháng 04/2025 không chỉ ghi lại những con số đóng góp đầy ý nghĩa, mà còn
                            là câu chuyện về sự chung tay của cộng đồng trong việc giữ gìn và tôn vinh hình ảnh những
                            người Anh hùng – những ngọn đuốc soi đường cho thế hệ hôm nay. Hãy cùng nhìn lại những dấu
                            ấn đặc biệt trong tháng vừa qua và cùng thắp sáng thêm ngọn lửa tri ân.
                        </p>
                        <div class="fund-news-sapotext-button-container">
                        <a href="./Trang_tin_bao.html" class="fund-news-sapotext-button">
                         <span class="fund-news-sapotext-text">XEM TIẾP</span>
                        </a>
                        </div>
                    </div>

                <!-- <div class="fund-news-sapotext">
                    <div class="fund-news-sapotext-textbox">
                        <p>
                            Tháng Tư – tháng của những kỷ ức lịch sử và lòng biết ơn – Quỹ Vinh danh Anh hùng tiếp tục
                            hành trình tri ân, lan tỏa những giá trị cao đẹp của tinh thần yêu nước và sự hy sinh thầm
                            lặng. Bản tổng kết tháng 04/2025 không chỉ ghi lại những con số đóng góp đầy ý nghĩa, mà còn
                            là câu chuyện về sự chung tay của cộng đồng trong việc giữ gìn và tôn vinh hình ảnh những
                            người Anh hùng – những ngọn đuốc soi đường cho thế hệ hôm nay. Hãy cùng nhìn lại những dấu
                            ấn đặc biệt trong tháng vừa qua và cùng thắp sáng thêm ngọn lửa tri ân.
                        </p>
                    </div>
                    <div class="fund-news-sapotext-button-container">
                        <button class="fund-news-sapotext-button">
                            <p class="fund-news-sapotext-text">XEM TIẾP</p>
                        </button>
                    </div>
                </div>

                <div class="fund-news-picture">
                    <img src="Ảnh/HD_1.png" alt="Ảnh tổng kết" class="fund-news-picture-img">
                </div>
                <div class="fund-news-title">
                    <div class="fund-news-title-textbox">
                        <div class="fund-news-title-text">
                            Tổng kết quỹ vinh danh anh hùng tháng 3 - 2025
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Footer will be loaded dynamically -->
        <div id="footer-container"></div>
    </div>
    <script defer src="./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-3px)';
                    this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
                });

                button.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });

            // Event card animation from test.html
            const eventCard = document.querySelector('.event-card');
            let scale = 1;
            let growing = false;

            function pulseCard() {
                if (growing) {
                    scale += 0.0005;
                    if (scale >= 1.01) {
                        growing = false;
                    }
                } else {
                    scale -= 0.0005;
                    if (scale <= 0.99) {
                        growing = true;
                    }
                }

                eventCard.style.transform = `scale(${scale})`;
                requestAnimationFrame(pulseCard);
            }

            pulseCard();



            // Placeholder images handling
            const placeholderImages = document.querySelectorAll('.carousel-item img');
            placeholderImages.forEach((img, index) => {
                // Set a colored background for placeholders
                const colors = ['#E9967A', '#8FBC8F', '#B0C4DE', '#DDA0DD', '#FFD700'];
                img.style.backgroundColor = colors[index % colors.length];
            });

            // Button click event from test1.html
            const btnMore = document.querySelector('.btn-more');
            btnMore.addEventListener('click', function () {
                alert('Tìm hiểu thêm về Quỹ Vinh danh Anh Hùng');
            });

            // See more links from test1.html
            const seeMoreLinks = document.querySelectorAll('.see-more');
            seeMoreLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    alert('Xem chi tiết bản tổng kết');
                });
            });

            // Add animation to cards from test1.html
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 300 * (index + 1));
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
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
                date: "19.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg",
                title: "Vinh quang người chiến sĩ",
                date: "17.04.2025",
                buttonText: "Chi tiết"
            },
            {
                image: "../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg",
                title: "Dấu ấn anh hùng",
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

            // Xác định các biến cấu hình slider
            let cardsPerPage = 4; // Số lượng card hiển thị mỗi trang
            let cardWidth = 400; // Chiều rộng mỗi card
            let cardMargin = 80; // Khoảng cách giữa các card
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
                const containerWidth = document.querySelector('.slider-container').clientWidth;

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
                    dot.addEventListener('click', function () {
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
                dot.addEventListener('click', function () {
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
            document.addEventListener('click', function (e) {
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
        }
    </script>
</body>

</html>