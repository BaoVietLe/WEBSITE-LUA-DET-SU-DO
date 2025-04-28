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
</head>

<body>
    <!-- Header will be loaded dynamically -->
    <div id="header-container"></div>

<!-- Main Content -->
<div class="hero-section">
    <div class="hero-background-overlay"></div>
    <h1 class="hero-title animate-pulse">Lửa dệt Sử đỏ</h1>
    <div class="hero-content">
        <!-- Left Column -->
        <div class="hero-left-column animate-slide-up">
            <div class="ribbon-container">
                <div class="ribbon">BIT-er</div>
            </div>
            <div class="hero-text-carousel">
                <div class="hero-text active animate-fade-in" id="slide-1">
                    <h2 class="gradient-text">HOẠT ĐỘNG VỀ NGUỒN</h2>
                    <p>Chương trình thuộc chuỗi hoạt động Về nguồn thường niên mang ý nghĩa thể hiện tinh thần dân tộc, hướng về nguồn cội của sinh viên khoa BIT.</p>
                </div>
            </div>
            
            <!-- Pagination dots with improved styling -->
            <div class="hero-pagination">
                <div class="dot active" data-slide="1"></div>
            </div>
            
            <!-- Stats section with improved visuals -->
            <div class="program-info">
                <div class="program-info-box">
                    <div class="program-info-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="program-info-number count-up" data-target="18000">18K+</div>
                    <div class="program-info-label">LƯỢT TIẾP CẬN</div>
                </div>
                <div class="program-info-box">
                    <div class="program-info-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="program-info-number count-up" data-target="12000">12K+</div>
                    <div class="program-info-label">LƯỢT THÍCH</div>
                </div>
                <div class="program-info-box">
                    <div class="program-info-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="program-info-number count-up" data-target="100">100+</div>
                    <div class="program-info-label">NGƯỜI THAM GIA</div>
                </div>
            </div>
            
            <!-- Call to action button -->
            <div class="hero-cta">
                <a href="#" class="cta-button">ĐĂNG KÝ THAM GIA</a>
            </div>
        </div>

        <!-- Right Column -->
        <div class="hero-right-column animate-slide-right">
            <div class="hero-image-container">
                <div class="hero-image">
                    <div class="image-frame"></div>
                    <img src="../assets/img/1.jpg" alt="Di tích lịch sử">
                </div>
                <div class="image-badge">HƯỚNG ĐẾN KỶ NIỆM 50 NĂM GIẢI PHÓNG MIỀN NAM THỐNG NHẤT ĐẤT NƯỚC (30/4/1975 - 30/4/2025)</div>
                <div class="decorative-element top-left"></div>
                <div class="decorative-element top-right"></div>
                <div class="decorative-element bottom-left"></div>
                <div class="decorative-element bottom-right"></div>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="hero-decorative-shape shape-1"></div>
    <div class="hero-decorative-shape shape-2"></div>
</div>
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
    <?php include "./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem1.php"?>
    <!-- Footer will be loaded dynamically -->
    <div id="footer-container"></div>


    <script defer src="../assets/js/ve_chien_dich.js"></script>
</body>

</html>