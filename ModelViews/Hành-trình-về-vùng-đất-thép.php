<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chi tiết hoạt động Hành trình về vùng đất thép</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" 
      rel="stylesheet"
    >
    <style>
        @import url('../assets/css/File_CSS_chung.css');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto';
        }

        .head-container {
            max-width: full-width;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        header {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 50px;
        }

        .logo img {
            height: 100%;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #d62222;
        }

        .active {
            color: #d62222;
        }

        /* Banner */
        .banner {
            background-image: linear-gradient(to right, #f77622, #d62222);
            height: 100px;
            margin-bottom: 30px;
        }

        

        /* Main Event Section */
        .main-event {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            gap: 30px;
            margin-bottom: 40px;
        }

        .event-information {
            display: flex;
    flex-direction: column;
    gap: 10px;
        }

        .event-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }

        .event-date {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .event-description {
            margin-bottom: 20px;
            color: #666;
        }

        
        /* Event Details Card */
        .event-card-wrapper {
    position: relative;
    width: full-width;
    margin-bottom: 40px;
    padding: 15px;
    background: linear-gradient(135deg, rgba(247, 118, 34, 0.1), rgba(214, 34, 34, 0.1));
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
}

/* Tạo hiệu ứng nền trang trí */
.event-card-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg");
    border-radius: 15px;
    opacity: 0.5;
    z-index: 0;
}

/* Thêm border trang trí cho nền */
.event-card-wrapper::after {
    content: '';
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border: 1px dashed rgba(214, 34, 34, 0.2);
    border-radius: 12px;
    z-index: 0;
}
.event-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
            margin-bottom: 0; /* Bỏ margin vì wrapper đã có */
        }


        .card-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-date {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .card-date-input {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        .event-description-list {
            margin-bottom: 20px;
        }

        .event-description-list p {
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .section-heading {
            font-weight: bold;
            margin: 15px 0 10px;
            color: #d62222;
        }

       
        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .main-event {
                flex-direction: column;
            }

            .event-details {
                flex-wrap: wrap;
            }

            .detail-box {
                flex: 0 0 50%;
                border-bottom: 1px solid #ddd;
                border-right: 1px solid #ddd;
            }

            .detail-box:nth-child(2n) {
                border-right: none;
            }

            .detail-box:nth-last-child(-n+2) {
                border-bottom: none;
            }

            .testimonial-slide {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            nav ul {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background-color: #fff;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                padding: 10px 0;
            }

            nav.active ul {
                display: flex;
            }

            nav ul li {
                margin: 0;
                padding: 10px 20px;
            }

            .detail-box {
                flex: 0 0 100%;
                border-right: none;
            }

            .detail-box:nth-last-child(2) {
                border-bottom: 1px solid #ddd;
            }
        }
    </style>
</head>
<body>
    <header>
     <!-- Header will be loaded dynamically -->
     <div id="header-container"></div>
            <nav id="mainNav">
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                <ul>
                    <li><a href="./Homepage_Ve_Nguon.PHP" class="active">TRANG CHỦ</a></li>
                    <li><a href="./ve_chien_dich.html">VỀ CHIẾN DỊCH</a></li>
                    <li><a href="./Bang_vinh_danh.html">BẢNG VINH DANH</a></li>
                    <li><a href="./Quy_Vinh_danh_anh_hung.html">QUỸ VINH DANH ANH HÙNG</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banner"></div>

    <div class="head-container">
        <div class="sub-header-wrapper">
            <div class="sub-header">HOẠT ĐỘNG ĐANG DIỄN RA
            </div>
        </div>

        <div class="main-event">
            <div class="event-information">
                <h1 class="event-title">CHÀO MỪNG KỈ NIỆM 94 NĂM<br>NGÀY THÀNH LẬP ĐOÀN TNCS HỒ CHÍ MINH</h1>
                <div class="event-date">26/3/1931 - 26/3/2025</div>
                <div class="event-description">
                    <br>Hoạt động 1: Thăm và tặng quà cho các gia đình chính sách tại địa phương.<br>
                    <br>Hoạt động 2: Dâng hương tại đền tưởng niệm Liệt sĩ Bến Dược.<br>
                    <br>Hoạt động 3: Tập huấn cán bộ Đoàn - Hội.<br>
                    <br>Hoạt động 4: Tham quan tại Địa đạo Bến Dược thuộc Khu di tích lịch sử Địa đạo Củ Chi.<br>
                </div>
            </div>
            <div class="right-content">
                <div class="image-info-no-action">
                    <img src="../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/Vùng đất thép.jpg" alt="Hình ảnh hoạt động" class="image-info-no-action-image">
                    <div class="image-info-no-action-content">
                        <div class="image-info-no-action-title">
                            CHÀO MỪNG KỈ NIỆM 94 NĂM<br>NGÀY THÀNH LẬP ĐOÀN TNCS HỒ CHÍ MINH
                        </div>
                        <div class="image-info-no-action-date">
                            26/3/1931 - 26/3/2025
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="event-container"></div>

        <div class="event-card-wrapper">
        <div class="event-card">
            <h2 class="card-title">CHÀO MỪNG KỈ NIỆM 94 NĂM NGÀY THÀNH LẬP ĐOÀN TNCS HỒ CHÍ MINH</h2>
            <div class="card-date">26/3/1931 - 26/3/2025</div>
            <div class="card-date-input">From: 17/3/2025 - To: 26/3/2025</div>

            <div class="event-description-list">
                <p>[BIT][HTVVDT] PHÁT ĐỘNG HOẠT ĐỘNG VỀ NGUỒN NHÂN DỊP 94 NĂM NGÀY THÀNH LẬP ĐOÀN TNCS HỒ CHÍ MINH (26/3/1931 - 26/3/2025) - “HÀNH TRÌNH VỀ VÙNG ĐẤT THÉP”</p>
                
                <p>★ 94 năm rực rỡ một chặng đường, Đoàn TNCS Hồ Chí Minh chính biểu tượng của sức trẻ, của lý tưởng cách mạng và khát vọng cống hiến. Nhằm khơi dậy niềm tự hào về truyền thống vẻ vang của Đoàn TNCS Hồ Chí Minh trong mỗi cán bộ, Đoàn viên, thanh niên, cũng như tạo không khí sôi nổi chào mừng và kỷ niệm 94 năm ngày thành lập Đoàn TNCS Hồ Chí Minh (26/3/1931 - 26/3/2025), Đoàn - Hội khoa Công nghệ thông tin kinh doanh quyết định tổ chức hoạt động về nguồn - “Hành trình về vùng Đất thép”.</p>
                
                <p>★ “Hành trình về vùng Đất thép” là một hoạt động về nguồn, thường gắn liền với các chuyến đi thực tế đến Củ Chi – nơi được mệnh danh là "Đất thép Thành Đồng" do những chiến công anh dũng trong kháng chiến. Cụ thể, "vùng Đất thép" thường được hiểu là huyện Củ Chi, TP.HCM, nơi có hệ thống địa đạo nổi tiếng, từng là căn cứ cách mạng quan trọng trong hai cuộc kháng chiến chống Pháp và chống Mỹ.</p>

                <p>★ Chương trình được tổ chức nhằm phát huy tinh thần xung kích, tình nguyện, sáng tạo của tuổi trẻ khoa Công nghệ thông tin kinh doanh nói riêng và sinh viên UEH nói chung, bên cạnh đó tri ân những người lính, người anh hùng đã hy sinh cho nền độc lập dân tộc, thể hiện lòng tôn trọng, lòng biết ơn và tinh thần “Uống nước nhớ nguồn”. </p>

                <p class="section-heading">CÁC HOẠT ĐỘNG TRONG CHƯƠNG TRÌNH</p>
                <p><br>Hoạt động 1: Thăm và tặng quà cho các gia đình chính sách tại địa phương.<br>
                    <br>Hoạt động 2: Dâng hương tại đền tưởng niệm Liệt sĩ Bến Dược.<br>
                    <br>Hoạt động 3: Tập huấn cán bộ Đoàn - Hội.<br>
                    <br>Hoạt động 4: Tham quan tại Địa đạo Bến Dược thuộc Khu di tích lịch sử Địa đạo Củ Chi.<br></p>

                <p class="section-heading">THÔNG TIN CHƯƠNG TRÌNH</p>
                <br>✿ Đối tượng tham gia: BCH Đoàn - Hội khoa, CTV Ban chuyên môn, BCH Chi đoàn - Chi hội trực thuộc khoa Công nghệ thông tin kinh doanh.<br>
                ✿ Thời gian: Ngày 23/3/2025.<br>
                ✿ Địa điểm diễn ra: Địa đạo Bến Dược thuộc Khu di tích lịch sử Địa đạo Củ Chi, đường tỉnh lộ 15, ấp Phú Hiệp, xã Phú Mỹ Hưng, huyện Củ Chi, thành phố Hồ Chí Minh.<br>


                <p class="section-heading">QUYỀN LỢI SINH VIÊN</p>
                <p>- Được tìm hiểu những thông tin bổ ích về lịch sử, cụ thể là khu di tích lịch sử Địa đạo Củ Chi<br>
                   - Được đi thăm hỏi, tặng quà cho các gia đình chính sách tại huyện Củ Chi, TP. Hồ Chí Minh.<br>
                   - Được đi tham quan, tập huấn trực tiếp tại Địa đạo Củ Chi.<br>
                   - Được ghi nhận MSSV khi tham gia chương trình.</p>

                <p>Theo dõi Fanpage Đoàn - Hội khoa Công nghệ thông tin kinh doanh để biết thêm thông tin về chương trình nhé!</p>

                <p class="section-heading">Mọi thắc mắc vui lòng liên hệ:</p>
                <p>Fanpage: https://www.facebook.com/BIT.UEH<br>
                Sđt: 0799860152 (Ngọc Lan) - 0989664606 (Thu Trang)<br>
                #UEH #BIT #CNTTKT<br>
                #HTVVDT #HANHTRINHDIVEVUNGDATTHEP</p>
            </div>
        </div>
        </div>

        <?php include "./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem1.php"?>

        <!-- Footer will be loaded dynamically -->
        <div id="footer-container"></div>

    <script>
       document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('./Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initNavbar();
        });
    
    // Load footer
    fetch('./Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
// Load Thanh chi tiết hoạt động
fetch('./Component khác/Thanh_chi_tiet_hoat_dong.html')
    .then(response => response.text())
    .then(data => {
        // Tạo một phần tử DOM tạm thời để chứa HTML
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;
        
        // Bây giờ bạn có thể thay đổi các nội dung text
        // Ví dụ: thay đổi địa điểm
        const locationElement = tempDiv.querySelector('.info-section:nth-child(1) .section-content');
        if (locationElement) {
            locationElement.textContent = 'Huyện Củ Chi, TP. Hồ Chí Minh';
        }
        
        // Thay đổi thời gian
        const timeElement = tempDiv.querySelector('.time-section .section-content');
        if (timeElement) {
            timeElement.textContent = '8:00:00 | 23/03/2025 - 17:00:00 | 23/03/2025';
        }
        
        // Thay đổi số lượng tham gia
        const participantsElement = tempDiv.querySelector('.participants-section .section-content');
        if (participantsElement) {
            participantsElement.textContent = '30/30';
        }
        
        // Có thể thay đổi cả nội dung của button
        const registerButton = tempDiv.querySelector('.register-button');
        if (registerButton) {
            registerButton.textContent = 'ĐĂNG KÝ';
        }
        
        // Chèn HTML đã sửa đổi vào trang
        document.getElementById('event-container').innerHTML = tempDiv.innerHTML;
        
        // Thêm lại event listener cho button vì innerHTML sẽ xóa các event cũ
        document.querySelector('.register-button').addEventListener('click', function() {
            alert('Bạn đã nhấn nút đăng ký!');
            // Thêm logic đăng ký ở đây
        });
    })
    .catch(error => {
        console.error('Lỗi khi tải tệp HTML:', error);
    });
            // Load Sponsor
    fetch('./Component khác/Sponsor-Section.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('sponsor-section').innerHTML = data;
        });
    
    // Load activities data
    fetch('js/activities.json')
        .then(response => response.json())
        .then(data => {
            renderActivities('past-activities', data.pastActivities);
            renderActivities('upcoming-activities', data.upcomingActivities);
        });
     
            // Load Hanh Trinh Trai Nghiem HTML
    fetch('./Bang_BTC_chia_se/Bang_BTC.html')
    .then(response => response.text())
    .then(html => {
        document.getElementById('about-section').innerHTML = html;

        // Load JS sau khi đã render HTML
        const script = document.createElement('script');
        script.src = './Bang_BTC_chia_se/Bang_BTC.js';
        script.onload = () => {
            console.log("JS slideshow loaded");

            // Fetch PHP để lấy dữ liệu
            fetch('./Bang_BTC_chia_se/Bang_BTC.js')
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
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');
        
        mobileMenuBtn.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });

        // Testimonial Slider
        let slideIndex = 1;
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            const dots = document.getElementsByClassName("dot");
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            dots[slideIndex-1].className += " active";
        }

        // Auto change slides every 5 seconds
        setInterval(function() {
            slideIndex++;
            if (slideIndex > document.getElementsByClassName("dot").length) {
                slideIndex = 1;
            }
            currentSlide(slideIndex);
        }, 5000);

document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.profile-card');
    const indicatorsContainer = document.getElementById('carousel-indicators');

    let currentIndex = 0;
    let autoPlayInterval;

    // Tạo các chấm
    cards.forEach((card, index) => {
        const indicator = document.createElement('li');
        if (index === 0) indicator.classList.add('active');
        indicator.dataset.index = index;
        indicator.addEventListener('click', function() {
            goToCard(index);
            resetAutoPlay(); // Khi người dùng bấm chấm thì reset tự động
        });
        indicatorsContainer.appendChild(indicator);
    });

    function showCard(index) {
        cards.forEach((card, idx) => {
            card.style.display = idx === index ? 'block' : 'none';
        });

        const indicators = indicatorsContainer.querySelectorAll('li');
        indicators.forEach((ind, idx) => {
            ind.classList.toggle('active', idx === index);
        });
    }

    function goToCard(index) {
        currentIndex = index;
        showCard(currentIndex);
    }

    function nextCard() {
        currentIndex = (currentIndex + 1) % cards.length;
        showCard(currentIndex);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextCard, 4000); // 4000ms = 4s đổi 1 lần
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // Khi load trang thì hiện card đầu tiên và chạy tự động
    showCard(currentIndex);
    startAutoPlay();
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
    </script>
</body>
</html>