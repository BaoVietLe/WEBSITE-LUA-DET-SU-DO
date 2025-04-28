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

        body {
            overflow-x: hidden;
            width: 100%;
        }

        /* Container styles */
        .head-container {
            width: 100%;
            margin: 0 auto;
            padding: 0;
            overflow-x: hidden;
        }

        /* Header */
        header {
            background-color: #fff;
            padding: 0.625rem 0;
            box-shadow: 0 0.125rem 0.3125rem rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            width: 100%;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 75rem;
            margin: 0 auto;
        }

        .logo {
            height: 3.125rem;
        }

        .logo img {
            height: 100%;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.25rem;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.875rem;
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
            height: 6.25rem;
            margin-bottom: 1.875rem;
            width: 100%;
        }
        .sub-header-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .sub-header {
            font-weight: bold;
            font-size: 1.25rem;
            text-align: center;
            color: rgb(0, 0, 0);
            padding: 0.5rem 1rem;
            position: relative;
            display: flex;
            align-items: center;
            width:100%;
        }

        /* Add lines before and after text */
        .sub-header::before,
        .sub-header::after {
            content: '';
            height: 1px;
            background-color: rgb(0, 0, 0);
            flex: 1; /* Stretch the lines */
            display: inline-block;
        }

        .sub-header::before {
            margin-right: 1rem;
        }

        .sub-header::after {
            margin-left: 1rem;
        }

        /* Main Event Section */
        .main-event {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start; /* Align items to the top */
            gap: 1.875rem;
            margin: 0 auto 2.5rem;
            width: 90%;
            max-width: 75rem;
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
        }

        .event-information {
            flex: 1;
            min-width: 300px; /* Minimum width before wrapping */
            max-width: 100%; /* Don't exceed container width */
        }
        .right-content {
            flex: 1;
            min-width: 300px; /* Minimum width before breaking */
            display: flex;
            justify-content: center; /* Center the content */
            align-items: center;
            max-width: 100%; /* Don't exceed container width */
        }

        /* Image container */
        .image-info-no-action {
            width: 100%;
            max-width: 500px; /* Maximum image container width */
            margin: 0 auto; /* Center the image container */
            text-align: center;
        }

        /* Make image responsive */
        .image-info-no-action-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 1rem; /* Center image and add bottom margin */
        }

        .image-info-no-action-content {
            padding: 0.5rem;
            text-align: center;
        }

        .image-info-no-action-title {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .event-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.625rem;
            color: #000;
        }

        .event-date {
            font-size: 1.125rem;
            margin-bottom: 1.25rem;
        }

        .event-description {
            margin-bottom: 1.25rem;
            color: #666;
        }

        .event-description-emphasize {
            font-weight: bold;
        }

        /* Event Details Card - Fixed Centering */
        .event-card-wrapper {
            position: relative;
            width: 90%;
            max-width: 75rem;
            margin: 0 auto 2.5rem;
            padding: 0.9375rem;
            background: linear-gradient(135deg, rgba(247, 118, 34, 0.1), rgba(214, 34, 34, 0.1));
            border-radius: 0.9375rem;
            box-shadow: 0 0.5rem 1.5625rem rgba(0, 0, 0, 0.07);
            left: 0;
            right: 0;
        }

        /* Background effect */
        .event-card-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg");
            border-radius: 0.9375rem;
            opacity: 0.5;
            z-index: 0;
        }

        /* Decorative border */
        .event-card-wrapper::after {
            content: '';
            position: absolute;
            top: 0.3125rem;
            left: 0.3125rem;
            right: 0.3125rem;
            bottom: 0.3125rem;
            border: 0.0625rem dashed rgba(214, 34, 34, 0.2);
            border-radius: 0.75rem;
            z-index: 0;
        }

        .event-card {
            background-color: #fff;
            border-radius: 0.625rem;
            padding: 1.875rem;
            box-shadow: 0 0.25rem 0.9375rem rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }

        .card-title {
            text-align: center;
            font-size: 1.375rem;
            font-weight: bold;
            margin-bottom: 0.625rem;
        }

        .card-date {
            text-align: center;
            font-size: 1rem;
            margin-bottom: 1.25rem;
        }

        .card-date-input {
            text-align: center;
            margin-bottom: 1.25rem;
            color: #666;
        }

        .event-description-list {
            margin-bottom: 1.25rem;
        }

        .event-description-list p {
            margin-bottom: 0.625rem;
            line-height: 1.5;
        }

        /* Completely revised sub-header */
        .section-heading {
            font-weight: bold;
            color: #d62222;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem auto;
            width: 80%;
            max-width: 50rem;
        }

        .section-heading::before,
        .section-heading::after {
            content: '';
            height: 1px;
            background-color: #d62222;
            flex: 1;
        }

        .section-heading::before {
            margin-right: 1rem;
        }

        .section-heading::after {
            margin-left: 1rem;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 62rem) { /* 992px */
            .main-event {
                flex-direction: column;
                align-items: center;
            }
            
            .event-information,
            .image-info-no-action {
                width: 100%;
            }
            
            .event-details {
                flex-wrap: wrap;
            }
            
            .detail-box {
                flex: 0 0 50%;
                border-bottom: 0.0625rem solid #ddd;
                border-right: 0.0625rem solid #ddd;
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

        @media (max-width: 48rem) { /* 768px - mobile phones */
            .header-container,
            .main-event,
            .event-card-wrapper {
                width: 95%;
            }
            
            /* Center event title and date on mobile */
            .event-title, 
            .event-date {
                text-align: center;
            }
            
            /* Additional mobile improvements */
            .event-title {
                font-size: 1.25rem;
            }
            
            .event-date {
                font-size: 1rem;
            }
            
            /* Ensure all content respects page borders */
            .event-description {
                padding: 0 0.5rem;
                text-align: justify;
            }
            
            /* Make sure the event card content is properly spaced */
            .event-card {
                padding: 1rem;
            }
            
            .card-title {
                font-size: 1.25rem;
            }
            
            /* Adjust image size on mobile */
            .image-info-no-action {
                max-width: 100%;
            }
            
            .image-info-no-action-image {
                max-width: 90%;
            }
            .sub-header::before,
            .sub-header::after {
                width: 3rem; /* Shorter lines on mobile */
            }
            
            .sub-header::before {
                margin-right: 0.5rem;
            }
            
            .sub-header::after {
                margin-left: 0.5rem;
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
            <div class="sub-header">HOẠT ĐỘNG ĐÃ DIỄN RA
            </div>
        </div>

        <div class="main-event">
            <div class="event-information">
                <h1 class="event-title">KỶ NIỆM 34 NĂM<br>NGÀY HỘI CỰU CHIẾN BINH VIỆT NAM</h1>
                <div class="event-date">06/12/1989 - 06/12/2023</div>
                <div class="event-description">
                    <p class="event-description-emphasize">Hoạt động 1: Hoạt động về nguồn nhân ngày thành lập Hội cựu chiến binh Việt Nam 06/12</p>
                    <br>  - Đối tượng tham gia: BCH và CTV Đoàn - Hội khoa Công nghệ thông tin kinh doanh.<br>
                    <br>  - Thời gian diễn ra: Tháng 12/2023.</p>

                    <br><p class="event-description-emphasize">Hoạt động 2: Hoạt động truyền thông cho chủ đề số 2: Về nguồn thuộc hoạt động Radio “Não Cá Vàng”</p>
                    <br>- Đối tượng tham gia: Toàn thể sinh viên UEH.<br>
                    <br>- Thời gian diễn ra: ngày 14 - 24/12/2023.<br>
                </div>
            </div>
            <div class="right-content">
                <div class="image-info-no-action">
                    <img src="../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg" alt="Hình ảnh hoạt động" class="image-info-no-action-image">
                    <div class="image-info-no-action-content">
                        <div class="image-info-no-action-title">
                            KỶ NIỆM 43 NĂM<br>NGÀY HỘI CỰU CHIẾN BINH VIỆT NAM
                        </div>
                        <div class="image-info-no-action-date">
                            06/12/1989 - 06/12/2023
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="event-container"></div>

        <div class="event-card-wrapper">
        <div class="event-card">
            <h2 class="card-title">KỶ NIỆM 34 NĂM NGÀY HỘI CỰU CHIẾN BINH VIỆT NAM</h2>
            <div class="card-date">06/12/1989 - 06/12/2023</div>
            <div class="card-date-input">From: 14/12/2023 - To: 27/12/2023</div>

            <div class="event-description-list">
                <p>[BIT][HTVVDT] PHÁT ĐỘNG HOẠT ĐỘNG VỀ NGUỒN NHÂN DỊP 94 NĂM NGÀY THÀNH LẬP ĐOÀN TNCS HỒ CHÍ MINH (26/3/1931 - 26/3/2025) - “HÀNH TRÌNH VỀ VÙNG ĐẤT THÉP”</p>
                
                <p>★ “Tuổi hai mươi, anh nằm lại rừng xanh.<br>
                      Anh không được vui niềm vui đại thắng!<br>
                      Anh nằm lại nơi rừng hoang núi thẳm.<br>
                      Hoá thân mình thành sông núi nước Nam.</p>

                <p>★ Tôi lắng nghe trong gió núi mây ngàn.<br>
                    Có tiếng hát cuộc đời anh vọng mãi.<br>
                    Xin an lòng những gì anh để lại.<br>
                    Có chúng tôi xin tiếp tục giữ gìn.”</p>
                
                <p>-Trích “Người lính chiến” (Người cầm bút)</p>

                <p>Đã bao giờ các bạn rưng rưng nước mắt vì xúc động khi nghe tới những gì người lính Việt Nam ta phải trải qua để đổi lấy thời bình cho chúng ta chưa?</p>

                <p>★ Nếu có dịp xem qua tác phẩm “Mùi Cỏ Cháy” của đạo diễn Nguyễn Hữu Mười, các bạn có thể cảm nhận một cách sâu sắc sự khắc nghiệt của chiến trường, nơi bom đạn rơi nhiều “như cơm bữa”. Biết bao nhiêu người lính lên đường vì lý tưởng cao đẹp, và rồi nằm lại trên mảnh đất mẹ thân yêu, vì tương lai đất nước Việt Nam, vì một mảnh đất hình chữ S vẹn toàn, không thiếu đi một tấc đất, tấc biển.</p>

                <p>★ Làm sao chúng ta có thể không ghi nhớ công ơn của những người lính cụ Hồ ngày xưa? Vì thế, nhân ngày Hội cựu chiến binh Việt Nam 06/12, để bày tỏ lòng tôn vinh và tri ân những người lính đã dũng cảm tham gia chiến đấu mang lại nền hòa bình cho đất nước, Đoàn - Hội Khoa Công nghệ thông tin kinh doanh phát động Chuỗi hoạt động Về Nguồn với chủ đề “Dấu ấn anh hùng” mong muốn tạo cơ hội cho các bạn sinh viên thể hiện sự tôn trọng, lòng biết ơn, “uống nước nhớ nguồn” đối với công lao to lớn của các vị anh hùng.</p>

                <p class="section-heading">THÔNG TIN CHI TIẾT HOẠT ĐỘNG CHƯƠNG TRÌNH</p>
                <p class="event-description-emphasize">Hoạt động 1: Hoạt động về nguồn nhân ngày thành lập Hội cựu chiến binh Việt Nam 06/12</p>
                <br>  - Đối tượng tham gia: BCH và CTV Đoàn - Hội khoa Công nghệ thông tin kinh doanh.<br>
                <br>  - Thời gian diễn ra: Tháng 12/2023.</p>

                <br><p class="event-description-emphasize">Hoạt động 2: Hoạt động truyền thông cho chủ đề số 2: Về nguồn thuộc hoạt động Radio “Não Cá Vàng”</p>
                <br>- Đối tượng tham gia: Toàn thể sinh viên UEH.<br>
                <br>- Thời gian diễn ra: ngày 14 - 24/12/2023.<br></p>

                <p class="section-heading">QUYỀN LỢI SINH VIÊN</p>
                ✿ Cơ hội để các bạn sinh viên thể hiện lòng biết ơn sâu sắc đến các anh hùng, người lính thông qua những dòng cảm nghĩ của mình.<br>
                ✿ Lan tỏa lòng biết ơn, tôn trọng, cũng như tinh thần yêu nước đến với mọi người đặc biệt là các bạn sinh viên UEH.<br>
                ✿ Sinh viên tham gia ít nhất 1 trong 2 hoạt động sẽ được ghi nhận MSSV.<br>

                <p>Theo dõi Fanpage Đoàn - Hội khoa Công nghệ thông tin kinh doanh để biết thêm thông tin về chương trình nhé!</p>

                <p class="section-heading">Mọi thắc mắc vui lòng liên hệ:</p>
                <p>Fanpage: https://www.facebook.com/BIT.UEH<br>
                Sđt:  0823.971.080 (Minh Khôi)<br>
                #BIT #dauananhhung<br>
                #venguon #naocavang</p>
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
        // Execute navbar initialization code
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
            timeElement.textContent = '8:00:00 | 23/12/2024 - 17:00:00 | 23/12/2024';
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

          // Initialize Card Slider
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
    </script>
</body>
</html>