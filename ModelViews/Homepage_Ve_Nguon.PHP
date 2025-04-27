<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Lửa Dệt Sử Đỏ</title>
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
                    <div class="subtitle" style="font-size: 90px;">Lửa Dệt Sử Đỏ</div>
                    <div class="description" style="font-size: 20px;">Website “Lửa dệt sử đỏ” là dự án website thuộc chuỗi hoạt động chào mừng kỷ niệm 50 năm Giải phóng miền Nam Thống nhất đất nước (30-4-1975 - 30-4-2025) nhằm thúc đẩy tinh thần yêu tổ quốc, yêu đồng bào trong thế hệ sinh viên UEH thông qua giới thiệu các hoạt động về nguồn của khoa Công nghệ thông tin kinh doanh, đồng thời cung cấp đến sinh viên những hiểu biết về các mẹ Việt Nam Anh Hùng, và công khai minh bạch quá trình vận hành quỹ Vinh danh Anh hùng.</div>
                </div>

                <div class="left-content-bottom">
                    <div class="button-group">
                        <a href="./ve_chien_dich.php" class="button">
                            <div class="button-text">
                                <span>TÌM HIỂU THÊM VỀ</span>
                                <span>LỬA DỆT SỬ ĐỎ</span>
                            </div>
                        </a>
                        <a href="./Lửa-dệt-sử-đỏ.html" class="button button-white">
                            <div class="button-text">
                                <span>ĐĂNG KÝ THAM GIA</span>
                                <span>LỬA DỆT SỬ ĐỎ</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="right-content">
                <div class="image-info-no-action">
                    <img src="../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/LDSD.jpg" alt="Hình ảnh hoạt động" class="image-info-no-action-image">
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
    <?php include "./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem1.php"?>
    </div>

    <!-- Content from test1.html -->
    <div class="hero-section">
        <div class="container">
            <div class="header">
                <div class="homepage-title">
                    Khơi nguồn cảm hứng<br>cùng Quỹ vinh danh Anh hùng
                </div>
                <button class="btn-more" onclick="location.href='./Quy_Vinh_danh_anh_hung.html'">TÌM HIỂU THÊM</button>

            </div>

            <div class="fund-news-container">
                    <!-- Cột trái: ảnh + tiêu đề -->
                    <div class="fund-news-picture">
                        <img src="../assets/img/Tin bài 1/13.jpg" alt="Ảnh tổng kết" class="fund-news-picture-img">
                        <div class="fund-news-title-box">Nhìn lại Chặng 1 - Hoạt động 2<br>Triển lãm tem thư Khoa Công nghệ thông tin kinh doanh</div>
                    </div>

                    <!-- Cột phải: nội dung + nút -->
                    <div class="fund-news-sapotext">
                        <p>
                        Từ ngày 16-18/04/2025, khoa Công nghệ thông tin kinh doanh đã tổ chức Triển lãm tem thư đưa sinh viên trở về với hình ảnh một Sài Gòn xưa – thân thương và sâu lắng qua từng con tem nhuốm màu thời gian. Là hoạt động thứ hai trong Chặng 1 của chuỗi chương trình “Lửa Dệt Sử Đỏ”, triển lãm đã góp phần lan tỏa tình yêu lịch sử, hun đúc niềm tự hào dân tộc và khơi gợi trong sinh viên tinh thần gìn giữ những giá trị truyền thống giữa dòng chảy đổi thay của thời đại.

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
                });

            // Load footer
            fetch('./Footer/footer.html')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('footer-container').innerHTML = data;
                });

            // Initialize Card Slider
            initCardSlider();
        });

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
        date: "22.03.2025",
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