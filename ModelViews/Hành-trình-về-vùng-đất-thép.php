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
            width: 100%;
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
            background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/Vùng đất thép.jpg");
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
            .photo-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .photo-item {
        width: calc(50% - 15px);
    }
    
    .activity-photos h2 {
        font-size: 2rem;
    }
    
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
            .activity-photos {
        padding: 40px 15px;
    }
    
    .photo-grid {
        gap: 15px;
    }
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
.activity-photos {
    padding: 60px 20px;
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
}

.activity-photos h2 {
    color: #333;
    font-size: 2.2rem;
    margin-bottom: 15px;
    text-align: center;
    font-weight: 700;
    position: relative;
}

.activity-photos h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(to right, #e32212, transparent);
}

.highlight {
    color: #e32212;
    position: relative;
}

.activity-photos h3 {
    color: #555;
    font-size: 1.2rem;
    margin-bottom: 40px;
    text-align: center;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* Enhanced Photo Grid with Responsive Design */
.photo-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.photo-item {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 
        0 10px 20px rgba(0, 0, 0, 0.1),
        0 6px 6px rgba(0, 0, 0, 0.05);
    position: relative;
    transition: all 0.4s ease;
    aspect-ratio: 4/3;
    background-color: #f5f5f5;
    cursor: pointer;
}

.photo-item:hover {
    transform: translateY(-10px);
    box-shadow: 
        0 15px 30px rgba(0, 0, 0, 0.2),
        0 10px 10px rgba(0, 0, 0, 0.1);
}

.photo-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.photo-item:hover img {
    transform: scale(1.1);
}

.photo-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 20px;
    color: white;
}

.photo-item:hover .photo-overlay {
    opacity: 1;
}

.photo-title {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 5px;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.4s ease 0.1s;
}

.photo-date {
    font-size: 0.9rem;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.4s ease 0.2s;
}

.photo-item:hover .photo-title,
.photo-item:hover .photo-date {
    transform: translateY(0);
    opacity: 1;
}
@media (max-width: 576px) {
    .photo-grid {
        grid-template-columns: 1fr;
    }
    
    /* Single column on mobile */
    .photo-item {
        width: 100%;
        margin-bottom: 15px;
    }
    
    .activity-photos h2 {
        font-size: 1.8rem;
    }
    
    .activity-photos h3 {
        font-size: 1rem;
    }
    
    .photo-item {
        aspect-ratio: 16/9;
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
            <div class="activity-photos">
                <div class="photo-grid">
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                </div>
                <div class="sub-header">
                <a href="https://www.facebook.com/share/v/1ADVobfjaM/" target="_blank" rel="noopener">
                Nhấn vào đây để xem chi tiết bài viết
                </a>
                </div>
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