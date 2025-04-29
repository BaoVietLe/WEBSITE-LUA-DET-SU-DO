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
            width: 10%;
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
            background-image: url("../assets/img/Tổng hợp ctrinh về nguồn/Bài phát động/VQNCS.jpg");
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
                <a href="https://www.facebook.com/share/v/1CFfEPiuUR/" target="_blank" rel="noopener">
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