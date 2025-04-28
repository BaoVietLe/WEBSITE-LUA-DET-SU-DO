<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết hoạt động Lửa dệt sử đỏ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
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
    background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/LDSD.jpg");
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

        /* CSS BTC */
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }

        .profile-content {
            display: flex;
            padding: 20px;
            align-items: center;
        }
/* 
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        } */
        .profile-info {
            padding-left: 30px;
            flex-grow: 1;
        }

        .profile-position {
            color: #666;
            font-size: 18px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .profile-name {
            color: #c42f2f;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .profile-quote {
            font-style: italic;
            color: #333;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .profile-details {
            display: flex;
            background-color: #f5f5f5;
            border-radius: 10px;
        }

        .detail-item {
            flex: 1;
            padding: 15px;
            border-right: 1px solid #e1e1e1;
        }

        .detail-item:last-child {
            border-right: none;
        }

        .detail-label {
            font-size: 14px;
            color: #555;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .detail-value {
            font-size: 14px;
            color: #333;
        }

        .contact-button {
            display: inline-block;
            background-color: #c42f2f;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-button:hover {
            background-color: #a52727;
        }
        #carousel-indicators {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    list-style: none;
    padding: 0;
}

#carousel-indicators li {
    width: 10px;
    height: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#carousel-indicators li.active {
    background-color: #333;
}

        /* Animation for profile transition */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .profile-content.fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Adjust for avatar class as in the other file */
        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Make the card responsive */
        @media (max-width: 768px) {
            .profile-content {
                flex-direction: column;
            }

            .profile-position, .profile-name, .profile-quote, .contact-button {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center
            }
            
            .profile-image, .avatar {
                margin-bottom: 20px;
            }
            
            .profile-info {
                padding-left: 0;
                width: 100%;
            }
            
            .profile-details {
                flex-direction: column;
                width: 100%;
            }
            
            .detail-item {
                flex: 1;
                border-right: none;
                border-bottom: 1px solid #e1e1e1;
                width: 100%;
            }
            
            .detail-item:last-child {
                border-bottom: none;
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
                <h1 class="event-title">KỈ NIỆM 50 NĂM<br>NGÀY GIẢI PHÓNG MIỀN NAM</h1>
                <div class="event-date">30/04/1975 - 30/04/2025</div>
                <div class="event-description">
                    <p class="event-description-emphasize">Chặng 1: Hoạt động truyền thông</p>
                    
                    <br>  - Hoạt động 1: Truyền thông trực tuyến<br>
                    <br>  - Hoạt động 2: Triển lãm tem thư “Sài Gòn – Thành phố mang tên Bác”</p>

                    <br><p class="event-description-emphasize">Chặng 2: Chương trình nghệ thuật - “Lửa dệt sử đỏ”</p><br>

                    <p class="event-description-emphasize">Chặng 3: Hoạt động về nguồn</p>
                    <br>- Hoạt động 1: Tiếp tục triển khai Quỹ “Quỹ Vinh danh anh hùng” và hoạt động gây quỹ<br>
                    <br>- Hoạt động 2: Hoạt động ra mắt website “Lửa dệt sử đỏ”<br>
                    <br>- Hoạt động 3: Hoạt động về nguồn và tri ân những người lính, người mẹ Việt Nam anh hùng<br>

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

        <div id="event-container"></div>

        <div id="sponsor-section"></div>
        
        <div class="event-card-wrapper">
        <div class="event-card">
            <h2 class="card-title">KỈ NIỆM 50 NĂM NGÀY GIẢI PHÓNG MIỀN NAM</h2>
            <div class="card-date">30/04/1975 - 30/04/2025</div>
            <div class="card-date-input">From: 6/4/2025 - To: 27/4/2025</div>

            <div class="event-description-list">
                <p>[BIT][LDSD] PHÁT ĐỘNG CHUỖI HOẠT ĐỘNG CHÀO MỪNG KỶ NIỆM 50 NĂM NGÀY GIẢI PHÓNG MIỀN NAM, THỐNG NHẤT ĐẤT NƯỚC - LỬA DỆT SỬ ĐỎ (30/4/1975 - 30/4/2025)</p>
                
                <p>★ "Chúng ta đang sống trong những ngày yên bình, vì đã từng có người dũng cảm ngã xuống cho độc lập – tự do." Ngày 30/4/1975 là ngày đất nước ta chính thức thống nhất, khép lại những năm tháng khói lửa khốc liệt, mở ra kỷ nguyên mới hòa bình cho dân tộc. Biết bao chiến sĩ, anh hùng đã ngã xuống để đất nước có được hòa bình như hôm nay. Thân xác họ đã nằm lại cùng đất tổ, song linh hồn họ vẫn sống mãi với hồn thiêng sông núi như một phần bất tử của dân tộc Việt Nam.</p>
                
                <p>★ "Lửa dệt sử đỏ" như một lời khẳng định hòa bình của đất nước ngày hôm nay được đánh đổi bằng máu, mồ hôi và nước mắt của những người đi trước. Và giờ đây, câu chuyện hào hùng ấy sẽ được BIT tái hiện lại một cách sống động và đầy tự hào, như một lời tri ân sâu sắc gửi đến thế hệ cha anh. Chương trình cùng chuỗi hoạt động được tổ chức nhằm chào mừng và kỷ niệm cột mốc lịch sử trọng đại - 50 năm Ngày giải phóng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2025). Đây không chỉ là dịp để ôn lại những trang sử hào hùng của dân tộc mà còn là cơ hội để thế hệ trẻ thể hiện lòng yêu nước và phát huy tinh thần tự hào dân tộc.</p>

                <p>★ Hãy cùng đón chờ Đoàn khoa Công nghệ thông tin kinh doanh sẽ mang đến những hoạt động ý nghĩa nào để vinh danh những hy sinh âm thầm của các anh hùng đã góp sức hòa nên dòng chảy lịch sử hào hùng của dân tộc.</p>

                <p class="section-heading">NỘI DUNG CÁC CHẶNG HOẠT ĐỘNG</p>
                <p class="event-description-emphasize">Chặng 1: Hoạt động truyền thông</p>            
                 - Hoạt động 1: Truyền thông trực tuyến<br>
                 - Hoạt động 2: Triển lãm tem thư “Sài Gòn – Thành phố mang tên Bác”<br>
                <br><p class="event-description-emphasize">Chặng 2: Chương trình nghệ thuật - “Lửa dệt sử đỏ”</p>
                <p class="event-description-emphasize">Chặng 3: Hoạt động về nguồn</p>
                    - Hoạt động 1: Tiếp tục triển khai Quỹ “Quỹ Vinh danh anh hùng” và hoạt động gây quỹ<br>
                    - Hoạt động 2: Hoạt động ra mắt website “Lửa dệt sử đỏ”<br>
                    - Hoạt động 3: Hoạt động về nguồn và tri ân những người lính, người mẹ Việt Nam anh hùng<br>


                <p class="section-heading">THÔNG TIN CHUỖI HOẠT ĐỘNG</p>
                <p>✿ Đối tượng tham gia: Toàn thể sinh viên Đại học UEH.</p>
                <p>✿ Thời gian diễn ra (dự kiến): Từ 6/4/2025 đến 27/4/2025</p>

                <p class="section-heading"> Quyền lợi khi tham gia: </p>
                    <br>- Sinh viên tham gia 2/3 chặng sẽ được ghi nhận MSSV; <br>
                    <br>- Sinh viên tham gia hoạt động về nguồn và thực hiện phần việc thanh niên sẽ được tính 01 ngày tình nguyện. (Lưu ý: Hoạt động 3 chỉ dành cho sinh viên khoa Công nghệ thông tin kinh doanh)<br>

                <br><p>★ Các bạn sinh viên đã sẵn sàng để cùng lật lại những trang sử nhuốm màu gian khó của cha ông nhưng rất đỗi hào hùng của dân tộc? Mỗi đóng góp của các bạn, dù là nhỏ bé nhất, đều sẽ góp phần lan tỏa lòng biết ơn và niềm tự hào về người anh hùng Việt Nam - những người anh hùng thầm lặng nhưng quật cường bất khuất của dân tộc. Theo dõi Fanpage Đoàn - Hội khoa Công nghệ thông tin kinh doanh để biết thêm thông tin về chương trình nhé!</p>

                <p class="section-heading">Mọi thắc mắc vui lòng liên hệ:</p>
                <p>Fanpage: https://www.facebook.com/BIT.UEH<br>
                Sđt: Nguyễn Thị Thúy Vân: 0854513189 - Nguyễn Võ Lan Thanh: 0906182064<br>
                #UEH #BIT #CNTTKT<br>
                #LDSD #LUADETSUDO</p>
            </div>
        </div>
        </div>
        
        <div id="profile-carousel">
        <?php
    include '../Config/connect.php';
    $btc_query = mysqli_query($conn, "SELECT * FROM btc");
    while ($row = mysqli_fetch_array($btc_query)) {
?>
    <div class="profile-card">
        <div class="section-title">
            <div class="section-title-nd">CÂU CHUYỆN CỦA NHỮNG NGƯỜI PHỤ TRÁCH</div>
        </div>
        <div class="profile-content" id="profile-content">
            <div class="avatar">
                <img src="../assets/img/btc/<?php echo !empty($row["btc_img"]) ? $row["btc_img"] : 'default.png'; ?>" alt="Ban Tổ chức">
            </div>
            <div class="profile-info">
                <div class="profile-position" id="staff-position-title">
                    <?php echo $row["btc_position"]; ?>
                </div>
                <h2 class="profile-name" id="staff-name">
                    <?php echo $row["btc_name"]; ?>
                </h2>
                <p class="profile-quote" id="staff-quote">
                    <?php echo $row["btc_sharing"]; ?>
                </p>
                <div class="profile-details">
                    <div class="detail-item">
                        <div class="detail-label">Vị trí</div>
                        <div class="detail-value" id="staff-role">
                            <?php echo $row["btc_title"]; ?>
                        </div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Điện thoại</div>
                        <div class="detail-value" id="staff-phone">
                            <?php echo $row["btc_phone"]; ?>
                        </div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Email</div>
                        <div class="detail-value" id="staff-email">
                            <?php echo $row["btc_email"]; ?>
                        </div>
                    </div>
                    <div class="detail-item">
                        <a href="mailto:<?php echo $row['btc_email']; ?>" class="contact-button">Liên hệ ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>
</div>
<!-- Đây là chỗ để hiện các chấm nè -->
<ul id="carousel-indicators"></ul>


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
            timeElement.textContent = '8:00:00 | 20/04/2025 - 17:00:00 | 20/04/2025';
        }
        
        // Thay đổi số lượng tham gia
        const participantsElement = tempDiv.querySelector('.participants-section .section-content');
        if (participantsElement) {
            participantsElement.textContent = '30/30';
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