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
        .event-description-emphasize {
            font-weight: bold;
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
    background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/DẤU ẤN ANH HÙNG.jpg");
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