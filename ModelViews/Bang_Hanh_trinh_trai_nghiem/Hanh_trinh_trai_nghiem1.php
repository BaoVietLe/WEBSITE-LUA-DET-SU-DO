<?php
include "../Config/connect.php";
include "./Bang_Hanh_trinh_trai_nghiem/Hanh_trinh_trai_nghiem.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hành Trình Về Nguồn BIT2024</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
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
        /* Custom buttons based on common button class */
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

        /* Override for white button */
        .button-white {
            background-color: transparent;
            color: #333;
            border: 2px solid #333;
            box-shadow: none;
        }

        .button-white:hover {
            --button-hover-bg-color: #f5f5f5;
            --button-hover-box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
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

        .slide.active {
            display: block;
        }

        @keyframes fadeEffect {
            from {opacity: 0.7;}
            to {opacity: 1;}
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
    <div class="bit-container">
        <div class="avatar-section">
            <?php
            // Hiển thị avatar sinh viên đầu tiên
            if (!empty($slidesData)) {
                echo '<img src="' . htmlspecialchars($slidesData[0]['avatar']) . '" alt="' . htmlspecialchars($slidesData[0]['name']) . '" class="avatar">';
            } else {
                echo '<img src="../assets/img/sv/default-avatar.jpg" alt="Default avatar" class="avatar">';
            }
            ?>
        </div>
        
        <div class="content-section">
            <div class="fixed-headers">
                <div class="subtitle">KINH NGHIỆM & TRẢI NGHIỆM</div>
                <h1 class="main-title">HÀNH TRÌNH VỀ NGUỒN CÙNG BIT2024</h1>
            </div>
            
            <div class="pagination" id="pagination">
                <!-- Pagination dots will be generated dynamically -->
            </div>
            
            <div class="slides" id="slides-container">
                <!-- Slides will be generated dynamically from database -->
                <?php
                if (!empty($slidesData)) {
                    foreach ($slidesData as $index => $slide) {
                        echo '<div class="slide ' . ($index === 0 ? 'active' : '') . '">';
                        echo '<div class="slide-content">' . htmlspecialchars($slide['content']) . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="slide active">';
                    echo '<div class="slide-content">Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress" id="progress-bar"></div>
                </div>
            </div>
            
            <div class="controls">
                <button id="pauseBtn">⏸️</button>
            </div>
            
            <div class="buttons">
                <a href="/Ve_chien_dich/ve_chien_dich.html" class="button">NỘI DUNG CHƯƠNG TRÌNH</a>
                <a href="#register" class="button button-white">ĐĂNG KÝ THAM GIA</a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sử dụng dữ liệu trực tiếp từ PHP thay vì fetch
        let slidesData = <?php echo json_encode($slidesData); ?>;
        
        // Nếu không có dữ liệu, sử dụng dữ liệu mẫu
        if (slidesData.length === 0) {
            slidesData = [
                {
                    content: 'Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.',
                    avatar: '../assets/img/sv/default-avatar.jpg'
                }
            ];
        }
        
        // Các biến DOM
        const slidesContainer = document.getElementById('slides-container');
        const paginationContainer = document.getElementById('pagination');
        const progressBar = document.getElementById('progress-bar');
        const pauseBtn = document.getElementById('pauseBtn');
        
        let currentSlideIndex = 0;
        let slideInterval;
        let isPaused = false;
        const slideIntervalTime = 5000; // 5 giây mỗi slide
        
        // Tạo các chấm phân trang
        createPagination();
        
        // Bắt đầu slideshow
        startInterval();
        
        // Tạo các chấm phân trang
        function createPagination() {
            // Xóa nội dung cũ
            paginationContainer.innerHTML = '';
            
            slidesData.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.className = `dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetInterval();
                });
                paginationContainer.appendChild(dot);
            });
        }
        
        // Chuyển đến slide theo index
        function goToSlide(index) {
            const slideElements = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (slideElements.length === 0) return;

            // Loại bỏ class active từ tất cả slides và dots
            slideElements.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Thêm class active cho slide và dot hiện tại
            slideElements[index].classList.add('active');
            dots[index].classList.add('active');
            
            // Cập nhật avatar
            const avatarImg = document.querySelector('.avatar');
            if (avatarImg && slidesData[index]) {
                avatarImg.src = slidesData[index].avatar;
                avatarImg.alt = slidesData[index].name || 'Student avatar';
            }
            
            // Cập nhật progress bar
            updateProgressBar(0);
            
            currentSlideIndex = index;
        }
        
        // Chuyển đến slide tiếp theo
        function nextSlide() {
            const nextIndex = (currentSlideIndex + 1) % slidesData.length;
            goToSlide(nextIndex);
        }
        
        // Cập nhật thanh tiến trình
        function updateProgressBar(percent) {
            progressBar.style.width = `${percent}%`;
        }
        
        // Thiết lập và khởi động interval cho slideshow
        function startInterval() {
            clearInterval(slideInterval);
            let progress = 0;
            const increment = 100 / (slideIntervalTime / 100); // Cập nhật mỗi 100ms
            
            updateProgressBar(0);
            
            slideInterval = setInterval(() => {
                if (!isPaused) {
                    progress += increment;
                    
                    if (progress >= 100) {
                        progress = 0;
                        nextSlide();
                    }
                    
                    updateProgressBar(progress);
                }
            }, 100);
        }
        
        // Reset interval khi người dùng tương tác
        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }
        
    });
    </script>
</body>
</html>