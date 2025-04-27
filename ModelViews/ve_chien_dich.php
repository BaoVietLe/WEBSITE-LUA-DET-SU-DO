<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng bạn đến với chuỗi hoạt động về nguồn của khoa Công nghệ thông tin kinh doanh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/ve_chien_dich.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Style Hành trình trải nghiệm1 -->
    <style>
        @import url('../assets/css/File_CSS_chung.css');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            color: #333;
            background-color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .bit-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .bit-container {
                padding: 3rem 2rem;
                flex-direction: row;
                align-items: center;
            }
        }

        /* Pagination dots */
        .pagination {
            display: flex;
            justify-content: center;
            margin: 1rem 0 2rem;
            gap: 0.5rem;
        }

        .dot {
            height: 10px;
            width: 10px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dot.active {
            background-color: #000;
        }

        /* Avatar section */
        .avatar-section {
            flex: 0 0 100%;
            text-align: center;
        }

        .avatar {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        @media (min-width: 768px) {
            .avatar-section {
                flex: 0 0 35%;
            }
        }

        /* Content section */
        .content-section {
            flex: 0 0 100%;
        }

        @media (min-width: 768px) {
            .content-section {
                flex: 0 0 65%;
            }
        }

        .subtitle {
            color: #a8a037;
            font-size: 1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        @media (min-width: 768px) {
            .title {
                font-size: 2.5rem;
            }
        }

        .description {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        /* Progress bar */
        .progress-container {
            margin: 2rem 0;
        }

        .progress-bar {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .progress {
            height: 100%;
            width: 30%;
            background: linear-gradient(90deg, #d32f2f 0%, #ff9800 100%);
            border-radius: 4px;
            transition: width 0.5s ease;
        }

        /* Buttons */
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
            align-items: center;
        }

        @media (min-width: 576px) {
            .buttons {
                flex-direction: row;
                justify-content: flex-start;
            }
        }

        /* Define button class if not in the external CSS */
        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            text-decoration: none;
            background-color: #d32f2f;
            color: white;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #b71c1c;
            transform: translateY(-2px);
        }

        /* Override for white button */
        .button-white {
            background-color: transparent;
            color: #333;
            border: 2px solid #333;
            box-shadow: none;
        }

        .button-white:hover {
            background-color: #f5f5f5;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
        }

        /* Slide content */
        .slides {
            position: relative;
            overflow: hidden;
        }

        .slide {
            display: none;
            animation: fadeEffect 1s;
        }

        .slide-content {
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .slide.active {
            display: block;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0.7;
            }

            to {
                opacity: 1;
            }
        }

        /* Controls for slideshow */
        .controls {
            text-align: center;
            margin-top: 1rem;
        }

        /* Fixed headers */
        .fixed-headers {
            margin-bottom: 2rem;
        }

        .main-title {
            font-size: 2.5rem;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
    </style>

</head>

<body>
    <!-- Header will be loaded dynamically -->
    <div id="header-container"></div>

    <!-- Main Content -->
    <div class="hero-section">
        <h1>LỬA DỆT SỬ ĐỎ</h1>

        <div class="hero-content">
            <!-- Left Column -->
            <div class="hero-left-column">
                <div class="hero-text" id="slide-1">
                    <h2>HOẠT ĐỘNG VỀ NGUỒN CÙNG BIT</h2>
                    <p>Những hoạt động để tìm về cội nguồn lịch sử dân tộc, tìm hiểu những địa danh,
                        di tích lịch sử cách mạng và văn hóa truyền thống của dân tộc.</p>
    <div class="hero-content">
        <!-- Left Column -->
        <div class="hero-left-column">
            <div class="hero-text" id="slide-1">
                <h2>HOẠT ĐỘNG VỀ NGUỒN CÙNG BIT</h2>
                <p>Chương trình thuộc chuỗi hoạt động Về nguồn - Khoa Công nghệ thông tin kinh doanh chào mừng 50 năm 
                    ngày Giải phóng miền Nam - thống nhất Đất Nước. Hoạt động thường niên mang ý nghĩa vô cùng to lớn, 
                    thể hiện tình yêu nước cùng tinh thần dân tộc, hướng về nguồn cội của sinh viên khoa BIT nói riêng 
                    và sinh viên UEH nói chung.</p>
            </div>
            <div class="hero-text" id="slide-2" style="display: none;">
                <h2>SỨ MỆNH LƯU GIỮ TRUYỀN THỐNG</h2>
                <p>Chúng tôi tin rằng thế hệ trẻ cần hiểu rõ về nguồn cội để vững bước tiến về tương lai. Thông qua các hoạt động thực tế, sinh viên được trải nghiệm và tiếp nối giá trị văn hóa quý báu của dân tộc.</p>
            </div>
            <div class="hero-text" id="slide-3" style="display: none;">
                <h2>ĐỒNG HÀNH CÙNG LỊCH SỬ</h2>
                <p>Tham gia cùng chúng tôi trong hành trình khám phá các di tích lịch sử, tìm hiểu về những anh hùng dân tộc và gắn kết cộng đồng sinh viên qua các hoạt động ý nghĩa.</p>
            </div>
            
            <!-- Pagination dots for content navigation -->
            <div class="hero-pagination">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            
            <!-- Stats section -->
            <div class="program-info">
                <div class="program-info-box">
                  <div class="program-info-number">18K+</div>
                  <div class="program-info-label">LƯỢT TIẾP CẬN</div>
                    </div>
                    <div class="program-info-box">
                        <div class="program-info-number">12K+</div>
                        <div class="program-info-label">LƯỢT THÍCH</div>
                    </div>
                    <div class="program-info-box">
                        <div class="program-info-number">100+</div>
                        <div class="program-info-label">NGƯỜI THAM GIA</div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="hero-right-column">
                <div class="hero-image">
                    <img src="./Footer/Ảnh/HD_1.png" alt="Team Photo">
                </div>
            </div>
        </div>
        </section>

        <div class="activity-photos">
            <div class="homepage-title">
                Một số hình ảnh hoạt động tiêu biểu<br>cùng chuỗi hoạt động về nguồn
            </div>
            <div class="photo-grid">
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
                <div class="photo-item"><img src="images/placeholder.jpg" alt="Hoạt động"></div>
            </div>
        </div>
    </div>

    <div class="activities-section">
        <div class="section-header">
            <h2 class="red-button">CÁC HOẠT ĐỘNG VỀ NGUỒN</h2>
        </div>

        <div class="sub-header-wrapper">
            <div class="sub-header">NHỮNG HOẠT ĐỘNG ĐÃ VÀ ĐANG THỰC HIỆN
            </div>
        </div>

    </div>
    <!-- Card Slider Container -->
    <div class="slider-container">
        <div class="slider-wrapper" id="sliderWrapper">
            <!-- Cards will be added here dynamically -->
        </div>
        <!-- Pagination dots sẽ được thêm vào đây bởi JS -->
    </div>
    </div>

    <div class="bit-container" id="bit-container">
        <?php include "./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem1.php"; ?>
    </div>

    <!-- Footer will be loaded dynamically -->
    <div id="footer-container"></div>


    <script defer src="../assets/js/ve_chien_dich.js"></script>
</body>

</html>