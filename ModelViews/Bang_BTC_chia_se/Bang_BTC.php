<?php
// Start the session only once
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize array to store BTC data
$btcData = [];
try {
    // Using absolute path based on project structure
    $connectPath = $_SERVER['DOCUMENT_ROOT'] . '/BANKYTHUAT-WEB/Config/connect.php';
    
    if (file_exists($connectPath)) {
        include_once $connectPath;
        
        // Check if $conn exists and is a valid connection
        if (isset($conn) && $conn) {
            // Get BTC data
            $query = "SELECT btc_id, mssv, btc_img, btc_name, btc_title, btc_position, btc_phone, btc_email, btc_sharing FROM btc";
            $result = $conn->query($query);
            
            if (!$result) {
                throw new Exception('Query error: ' . $conn->error);
            }
            
            while ($row = $result->fetch_assoc()) {
                $btcData[] = [
                    'id' => $row['btc_id'],
                    'mssv' => $row['mssv'],
                    'name' => $row['btc_name'],
                    'title' => $row['btc_title'],
                    'position' => $row['btc_position'],
                    'phone' => $row['btc_phone'],
                    'email' => $row['btc_email'],
                    'sharing' => $row['btc_sharing'],
                    'avatar' => '../assets/img/btc/' . $row['btc_img']
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
    <title>Câu chuyện của những người phụ trách</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <style>
        @import url('../../assets/css/File_CSS_chung.css');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto';
        }

        .container {
            max-width: full-width;
            margin: 0 auto;
            padding: 20px;
        }

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

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }
        .profile-info {
            padding-left: 30px;
            flex-grow: 1;
        }

        .position-title {
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

        .carousel-indicators {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
        }

        .carousel-indicators li {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .carousel-indicators li.active {
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
            
            .profile-image, .avatar {
                margin-bottom: 20px;
            }
            
            .profile-info {
                padding-left: 0;
            }
            
            .profile-details {
                flex-direction: column;
            }
            
            .detail-item {
                border-right: none;
                border-bottom: 1px solid #e1e1e1;
            }
            
            .detail-item:last-child {
                border-bottom: none;
            }
        }   
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <div class="section-title">
                <div class="section-title-nd">CÂU CHUYỆN CỦA NHỮNG NGƯỜI PHỤ TRÁCH</div>
            </div>
            <div class="profile-content" id="profile-content">
                <div class="avatar">
                    <?php if (!empty($btcData)): ?>
                        <img id="staff-image" src="<?= htmlspecialchars($btcData[0]['avatar']) ?>" alt="<?= htmlspecialchars($btcData[0]['name']) ?>">
                    <?php else: ?>
                        <img id="staff-image" src="../../assets/img/btc/default-avatar.jpg" alt="Default staff image">
                    <?php endif; ?>
                </div>
                <div class="profile-info">
                    <div class="position-title" id="staff-position-title">
                        <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['position']) : 'Vị trí trong ban tổ chức'; ?>
                    </div>
                    <h2 class="profile-name" id="staff-name">
                        <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['name']) : 'Tên người phụ trách'; ?>
                    </h2>
                    <p class="profile-quote" id="staff-quote">
                        <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['sharing']) : 'Câu nói tâm đắc về chương trình.'; ?>
                    </p>
                    <div class="profile-details">
                        <div class="detail-item">
                            <div class="detail-label">Vị trí</div>
                            <div class="detail-value" id="staff-role">
                                <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['title']) : 'Chức vụ'; ?>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Điện thoại</div>
                            <div class="detail-value" id="staff-phone">
                                <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['phone']) : '0123456789'; ?>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Email</div>
                            <div class="detail-value" id="staff-email">
                                <?php echo !empty($btcData) ? htmlspecialchars($btcData[0]['email']) : 'email@example.com'; ?>
                            </div>
                        </div>
                        <div class="detail-item">
                            <button class="contact-button" id="contact-button">Liên hệ ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-indicators" id="carousel-indicators">
            <!-- Carousel indicators will be inserted here dynamically -->
            <?php if (!empty($btcData)): ?>
                <?php foreach ($btcData as $index => $staff): ?>
                    <li class="<?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>"></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="active" data-index="0"></li>
            <?php endif; ?>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get BTC data from PHP
        let btcData = <?= json_encode($btcData) ?>;
        
        // Use sample data if no data is available
        if (btcData.length === 0) {
            btcData = [
                {
                    id: 0,
                    mssv: 'N/A',
                    name: 'Nguyễn Văn A',
                    title: 'Trưởng ban tổ chức',
                    position: 'Điều phối viên chính',
                    phone: '0123456789',
                    email: 'nguyenvana@example.com',
                    sharing: 'Chương trình này là cơ hội tuyệt vời để sinh viên kết nối với văn hóa và lịch sử dân tộc. Tôi rất tự hào được đồng hành cùng các bạn trong hành trình này.',
                    avatar: '../../assets/img/btc/default-avatar.jpg'
                }
            ];
        }
        
        // DOM elements
        const profileContent = document.getElementById('profile-content');
        const staffImage = document.getElementById('staff-image');
        const staffPositionTitle = document.getElementById('staff-position-title');
        const staffName = document.getElementById('staff-name');
        const staffQuote = document.getElementById('staff-quote');
        const staffRole = document.getElementById('staff-role');
        const staffPhone = document.getElementById('staff-phone');
        const staffEmail = document.getElementById('staff-email');
        const contactButton = document.getElementById('contact-button');
        const carouselIndicators = document.getElementById('carousel-indicators');
        
        let currentStaffIndex = 0;
        
        // Create carousel indicators if they don't exist
        if (carouselIndicators.children.length === 0) {
            createCarouselIndicators();
        } else {
            // Add click event to existing indicators
            addIndicatorEventListeners();
        }
        
        // Create carousel indicators function
        function createCarouselIndicators() {
            carouselIndicators.innerHTML = '';
            
            btcData.forEach((_, index) => {
                const indicator = document.createElement('li');
                indicator.className = index === 0 ? 'active' : '';
                indicator.dataset.index = index;
                indicator.addEventListener('click', () => {
                    goToStaff(index);
                });
                carouselIndicators.appendChild(indicator);
            });
        }
        
        // Add event listeners to existing indicators
        function addIndicatorEventListeners() {
            const indicators = carouselIndicators.querySelectorAll('li');
            indicators.forEach(indicator => {
                indicator.addEventListener('click', () => {
                    goToStaff(parseInt(indicator.dataset.index));
                });
            });
        }
        
        // Go to specific staff member
        function goToStaff(index) {
            const indicators = carouselIndicators.querySelectorAll('li');
            
            // Remove active class from all indicators
            indicators.forEach(ind => ind.classList.remove('active'));
            
            // Add active class to current indicator
            indicators[index].classList.add('active');
            
            // Apply fade-in animation
            profileContent.classList.remove('fade-in');
            void profileContent.offsetWidth; // Trigger reflow
            profileContent.classList.add('fade-in');
            
            // Update staff info
            updateStaffInfo(index);
            
            currentStaffIndex = index;
        }
        
        // Update staff information
        function updateStaffInfo(index) {
            const staff = btcData[index];
            
            staffImage.src = staff.avatar;
            staffImage.alt = staff.name;
            staffPositionTitle.textContent = staff.title;
            staffName.textContent = staff.name;
            staffQuote.textContent = staff.sharing;
            staffRole.textContent = staff.position;
            staffPhone.textContent = staff.phone;
            staffEmail.textContent = staff.email;
            contactButton.textContent = 'Liên hệ ngay';
            
            // Add click event to contact button
            contactButton.onclick = function() {
                window.location.href = `mailto:${staff.email}`;
            };
        }
        
        // Handle contact button click
        contactButton.addEventListener('click', function() {
            const staff = btcData[currentStaffIndex];
            window.location.href = `mailto:${staff.email}`;
        });
    });
    </script>
</body>
</html>