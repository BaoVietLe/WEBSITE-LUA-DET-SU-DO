<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng bạn đến với chuỗi hoạt động về nguồn của khoa Công nghệ thông tin kinh doanh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" 
      rel="stylesheet"
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/ve_chien_dich.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    <!-- Content will be loaded here -->
    <div class="loading">Loading...</div>
</div>

    <!-- Footer will be loaded dynamically -->
    <div id="footer-container"></div>


    <script defer src="../assets/js/ve_chien_dich.js"></script>
    <script defer src="./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.js"></script>
</body>
</html>