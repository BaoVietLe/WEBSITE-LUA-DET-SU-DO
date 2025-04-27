<?php
// Start the session only once
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fixed path to connect.php
// The file is located in the Config directory at the root of your project
$slidesData = [];
try {
    // Fix the path issue - the .. after trai_nghiem is causing problems
    // Using absolute path based on your project structure
    $connectPath = __DIR__ . '/../../Config/connect.php';
    
    if (file_exists($connectPath)) {
        include_once $connectPath;
        
        // Check if $conn exists and is a valid connection
        if (isset($conn) && $conn) {
            // Get student data
            $query = "SELECT sv_id, mssv, sv_img, sv_name, sv_sharing FROM sinhvien";
            $result = $conn->query($query);
            
            if (!$result) {
                throw new Exception('Query error: ' . $conn->error);
            }
            
            while ($row = $result->fetch_assoc()) {
                $slidesData[] = [
                    'id' => $row['sv_id'],
                    'mssv' => $row['mssv'],
                    'name' => $row['sv_name'],
                    'content' => $row['sv_sharing'],
                    'avatar_fix' => '../assets/img/sv/' . $row['sv_img']
                ];
            }
        } else {
            throw new Exception('Database connection not established in connect.php');
        }
    } else {
        throw new Exception('Connect.php file not found at: ' . $connectPath);
    }
} catch (Exception $e) {
    // Log the error but continue with empty data
    error_log($e->getMessage());
    echo "<!-- Database Error: " . htmlspecialchars($e->getMessage()) . " -->";
}
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
        .avatar-section-fix {
            width: 17rem;
            height: 17rem;
            text-align: center;
            overflow: hidden;
            border-radius: 50%;
        }

        .avatar_fix {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
        <div class="avatar-section-fix">
            <?php if (!empty($slidesData)): ?>
                <img src="<?= htmlspecialchars($slidesData[0]['avatar_fix']) ?>" alt="<?= htmlspecialchars($slidesData[0]['name']) ?>" class="avatar_fix">
            <?php else: ?>
                <img src="../../assets/img/sv/default-avatar.jpg" alt="Default avatar" class="avatar_fix">
            <?php endif; ?>
        </div>
        
        <div class="content-section">
        <div class="pagination" id="pagination">
                <!-- Pagination dots will be generated dynamically -->
            </div>
            <div class="fixed-headers">
                <div class="subtitle">KINH NGHIỆM & TRẢI NGHIỆM</div>
                <h1 class="main-title">HÀNH TRÌNH VỀ NGUỒN CÙNG BIT2024</h1>
            </div>
            
            
            <div class="slides" id="slides-container">
                <?php if (!empty($slidesData)): ?>
                    <?php foreach ($slidesData as $index => $slide): ?>
                        <div class="slide <?= $index === 0 ? 'active' : '' ?>">
                            <div class="slide-content"><?= htmlspecialchars($slide['content']) ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="slide active">
                        <div class="slide-content">Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.</div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress" id="progress-bar"></div>
                </div>
            </div>
            
            
            <div class="buttons">
                <a href="/BANKYTHUAT-WEB/ModelViews/Ve_chien_dich/ve_chien_dich.html" class="button">NỘI DUNG CHƯƠNG TRÌNH</a>
                <a href="#register" class="button button-white">ĐĂNG KÝ THAM GIA</a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get slides data from PHP
        let slidesData = <?= json_encode($slidesData) ?>;
        
        // Use sample data if no data is available
        if (slidesData.length === 0) {
            slidesData = [
                {
                    id: 0,
                    mssv: 'N/A',
                    name: 'Sinh viên mẫu',
                    content: 'Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.',
                    avatar: '../../assets/img/sv/default-avatar.jpg'
                }
            ];
        }
        
        // DOM elements
        const slidesContainer = document.getElementById('slides-container');
        const paginationContainer = document.getElementById('pagination');
        const progressBar = document.getElementById('progress-bar');
        const pauseBtn = document.getElementById('pauseBtn');
        
        let currentSlideIndex = 0;
        let slideInterval;
        let isPaused = false;
        const slideIntervalTime = 3000; // 5 seconds per slide
        
        // Create pagination dots
        createPagination();
        
        // Start slideshow
        startInterval();
        
        // Add event listener for pause button
        pauseBtn.addEventListener('click', function() {
    isPaused = !isPaused;
    if (isPaused) {
        clearInterval(slideInterval);
        pauseBtn.textContent = '▶️'; // đổi nút thành play
    } else {
        startInterval();
        pauseBtn.textContent = '⏸️'; // đổi nút thành pause
    }
});

        
        // Create pagination dots function
        function createPagination() {
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
        
        // Go to specific slide
        function goToSlide(index) {
            const slideElements = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (slideElements.length === 0) return;

            // Remove active class from all slides and dots
            slideElements.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dot
            slideElements[index].classList.add('active');
            dots[index].classList.add('active');
            
            // Update avatar
            const avatarImg = document.querySelector('.avatar_fix');
            if (avatarImg && slidesData[index]) {
                avatarImg.src = slidesData[index].avatar_fix;
                avatarImg.alt = slidesData[index].name || 'Student avatar';
            }
            
            // Update progress bar
            updateProgressBar(0);
            
            currentSlideIndex = index;
        }
        
        // Go to next slide
        function nextSlide() {
            const nextIndex = (currentSlideIndex + 1) % slidesData.length;
            goToSlide(nextIndex);
        }
        
        // Update progress bar
        function updateProgressBar(percent) {
            progressBar.style.width = `${percent}%`;
        }
        
        // Setup and start interval for slideshow
        function startInterval() {
            clearInterval(slideInterval);
            let progress = 0;
            const increment = 100 / (slideIntervalTime / 100); // Update every 100ms
            
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
        
        // Reset interval when user interacts
        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }
    });
    </script>
</body>
</html>