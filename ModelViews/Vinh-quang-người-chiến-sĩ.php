<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết hoạt động Vinh quang người chiến sĩ</title>
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
        .event-description-emphasize {
            font-weight: bold;
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
                <h1 class="event-title">CHƯƠNG TRÌNH TRI ÂN NGƯỜI BỘ ĐỘI CỤ HỒ<br>VÀ TÌM HIỂU NGÀY GIẢI PHÓNG MIỀN NAM THỐNG NHẤT ĐẤT NƯỚC</h1>
                <div class="event-date">30/04/1975 - 30/04/2024</div>
                <div class="event-description">
                    <p class="event-description-emphasize">Chặng 1: Chuỗi hoạt động Chặng 1 với tên gọi “Dấu ấn Việt Nam”</p>
                    
                    <br>  - Hoạt động 1: Video truyền thông 1 “Dấu ấn Việt Nam” về hình ảnh lá thư thời chiến.<br>
                    <br>  - Hoạt động 2: Video truyền thông 2 “Dấu ấn Việt Nam” về những hồi ức của người lính hoạt động cách mạng.<br>
                    <br>  - Hoạt động 3: Hoạt động ra mắt khu triển lãm tư liệu lịch sử trực tuyến thông qua Artstep<br>và “Bức tường lịch sử” kết hợp với công nghệ AR.</p><br>

                    <p class="event-description-emphasize">Chặng 2: Chuỗi hoạt động Chặng 2 với tên gọi “Quỹ vinh danh anh hùng”</p>
                    <br>- Hoạt động 1: Hoạt động ra mắt Quỹ Momo “Quỹ vinh danh anh hùng”.<br>
                    <br>- Hoạt động 2: Hoạt động phát động gây quỹ về chi đoàn.<br>
                    <br>- Hoạt động 3: Hoạt động Workshop gây quỹ “Thư Tỏ”.<br>
                    <br>- Hoạt động 4: Hoạt động chiếu phim gây quỹ.<br>
                    <br>- Hoạt động 5: Hoạt động Về nguồn.<br>

                </div>
            </div>
            <div class="right-content">
                <div class="image-info-no-action">
                    <img src="../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg" alt="Hình ảnh hoạt động" class="image-info-no-action-image">
                    <div class="image-info-no-action-content">
                        <div class="image-info-no-action-title">
                            CHƯƠNG TRÌNH TRI ÂN NGƯỜI BỘ ĐỘI CỤ HỒ<br>VÀ TÌM HIỂU NGÀY GIẢI PHÓNG MIỀN NAM THỐNG NHẤT ĐẤT NƯỚC
                        </div>
                        <div class="image-info-no-action-date">
                            19/04/2024 - 10/05/2024
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="event-container"></div>


        <div class="event-card-wrapper">
        <div class="event-card">
            <h2 class="card-title">CHƯƠNG TRÌNH TRI ÂN NGƯỜI BỘ ĐỘI CỤ HỒ VÀ TÌM HIỂU NGÀY GIẢI PHÓNG MIỀN NAM THỐNG NHẤT ĐẤT NƯỚC</h2>
            <div class="card-date">30/04/1975 - 30/04/2024</div>
            <div class="card-date-input">From: 19/4/2024 - To: 10/5/2024</div>

            <div class="event-description-list">
                <p>[BIT] [VINH QUANG NGƯỜI CHIẾN SĨ]PHÁT ĐỘNG CHƯƠNG TRÌNH TRI ÂN NGƯỜI BỘ ĐỘI CỤ HỒ VÀ TÌM HIỂU NGÀY GIẢI PHÓNG MIỀN NAM THỐNG NHẤT ĐẤT NƯỚC (30/4/1975 - 30/4/2024)</p>
                
                <p>★ "Miền Nam ruột thịt đã hoàn toàn giải phóng. Non sông thu về một mối. Từ đây, không còn chia cắt hai miền. Nước Việt Nam thống nhất từ bờ Nam đến bờ Bắc." - Chủ tịch Hồ Chí Minh.</p>
                
                <p>★ Ngày 30 tháng 4 năm 1975 là một ngày trọng đại của lịch sử dân tộc ta. Sự kiện này đánh dấu một cột mốc quan trọng trong sự nghiệp cách mạng của toàn dân ta đó là nước Việt Nam chính thức giành được độc lập, tự do, thoát khỏi ách đô hộ. Có không biết bao nhiêu người anh hùng, người chiến sĩ đã ngã xuống, đã hi sinh để đổi lấy những chiến thắng vang dội và nền độc lập dân tộc như hiện nay.</p>

                <p>★ Chiến dịch “Vinh quang người chiến sĩ” là một hoạt động ý nghĩa nhằm giáo dục cho thế hệ trẻ về lòng yêu nước, tinh thần dũng cảm dân tộc Việt Nam. Ngoài ra chiến dịch còn gây quỹ để mang đến những món quà tri ân cho những người lính, thương binh, liệt sĩ, gia đình có công với cách mạng nhằm thể hiện tinh thần uống nước nhớ nguồn. Mọi người hãy cùng chung tay góp sức để chiến dịch thành công và lan tỏa lòng biết ơn đối với những người lính Việt Nam - những người anh hùng đã góp phần làm nên lịch sử hào hùng của dân tộc.</p>

                <p>★ Hãy cùng Đoàn khoa Công nghệ thông tin kinh doanh tham gia chiến dịch “Vinh danh người chiến sĩ” để thấu hiểu và trân trọng những hy sinh thầm lặng của người lính Việt Nam - những người anh hùng đã góp phần làm nên lịch sử hào hùng của dân tộc.</p>

                <p class="section-heading">THÔNG TIN CÁC CHẶNG HOẠT ĐỘNG</p>
                <p class="event-description-emphasize">Chặng 1: Chuỗi hoạt động Chặng 1 với tên gọi “Dấu ấn Việt Nam”</p>
                    
                    <br>  - Hoạt động 1: Video truyền thông 1 “Dấu ấn Việt Nam” về hình ảnh lá thư thời chiến.<br>
                    <br>  - Hoạt động 2: Video truyền thông 2 “Dấu ấn Việt Nam” về những hồi ức của người lính hoạt động cách mạng.<br>
                    <br>  - Hoạt động 3: Hoạt động ra mắt khu triển lãm tư liệu lịch sử trực tuyến thông qua Artstep và “Bức tường lịch sử” kết hợp với công nghệ AR.</p>

                    <p class="event-description-emphasize">Chặng 2: Chuỗi hoạt động Chặng 2 với tên gọi “Quỹ vinh danh anh hùng”</p>
                    <br>- Hoạt động 1: Hoạt động ra mắt Quỹ Momo “Quỹ vinh danh anh hùng”.<br>
                    <br>- Hoạt động 2: Hoạt động phát động gây quỹ về chi đoàn.<br>
                    <br>- Hoạt động 3: Hoạt động Workshop gây quỹ “Thư Tỏ”.<br>
                    <br>- Hoạt động 4: Hoạt động chiếu phim gây quỹ.<br>
                    <br>- Hoạt động 5: Hoạt động Về nguồn.<br>


                <p class="section-heading">THÔNG TIN CHUỖI HOẠT ĐỘNG</p>
                <p>✿ Đối tượng tham gia: Toàn thể sinh viên Đại học UEH.</p>
                <p>✿ Thời gian diễn ra (dự kiến): Từ 24/04/2024 đến 10/05/2024.</p>

                <p class="section-heading"> Quyền lợi khi tham gia: </p>
                    <br>- Tham gia ít nhất 1 trong 2 chuỗi sẽ được ghi nhận MSSV. <br>
                    <br>- Sinh viên tham gia hoạt động về nguồn và thực hiện phần việc thanh niên sẽ được tính 01 ngày tình nguyện. <br>

                <br><p>★ Các bạn sinh viên đã sẵn sàng lên đường tìm hiểu về cội nguồn lịch sử của dân tộc hay chưa? Hãy cùng chung tay góp sức để chương trình được diễn ra thuận lợi và thành công như mong đợi. Mỗi đóng góp của bạn, dù là nhỏ bé nhất, đều sẽ góp phần lan tỏa lòng biết ơn và niềm tự hào về người lính Việt Nam - những người anh hùng thầm lặng của dân tộc. Theo dõi Fanpage Đoàn - Hội khoa Công nghệ thông tin kinh doanh để biết thêm thông tin về chương trình nhé!</p>

                <p class="section-heading">Mọi thắc mắc vui lòng liên hệ:</p>
                <p>Fanpage: https://www.facebook.com/BIT.UEH<br>
                Sđt: 823.971.080 (Minh Khôi) - 0793.546.403 (Hoàng Thị Ánh)<br>
                #UEH #BIT #CNTTKT<br>
                #VQNCS #VINHQUANGNGUOICHIENSI</p>
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
            initMobileMenu();
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
            locationElement.textContent = 'Xã Qui Đức, Huyện Bình Chánh, TP. Hồ Chí Minh';
        }
        
        // Thay đổi thời gian
        const timeElement = tempDiv.querySelector('.time-section .section-content');
        if (timeElement) {
            timeElement.textContent = '6:00:00 | 11/05/2024 - 14:00:00 | 11/05/2024';
        }
        
        // Thay đổi số lượng tham gia
        const participantsElement = tempDiv.querySelector('.participants-section .section-content');
        if (participantsElement) {
            participantsElement.textContent = '25/25';
        }
        
        // Có thể thay đổi cả nội dung của button
        const registerButton = tempDiv.querySelector('.register-button');
        if (registerButton) {
            registerButton.textContent = 'ĐĂNG KÝ NGAY';
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
    </script>
</body>
</html>