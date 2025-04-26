<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Vinh danh Mẹ Việt Nam Anh Hùng: Nơi người hùng thầm lặng lên tiếng</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Bang_vinh_danh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Header will be loaded dynamically -->
    <div id="header-container"></div>

    <div class="hero-container">
        <section class="hero">
            <div class="wave-bg"></div>
            <h1 class="hero-title">Nơi người hùng thầm lặng lên tiếng</h1>
        </section>

        <div class="chevron-container" id="chevron-up">
            <div class="chevron">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 15l-6-6-6 6" />
                </svg>
            </div>
        </div>

        <div class="content-panel" id="content-panel">
            <section class="section-title">
                <div class="title-banner">BẢNG VINH DANH</div>
            </section>

            <section class="heroes-container">
                <h3 class="heroes-subtitle">NGƯỜI MẸ VIỆT NAM ANH HÙNG</h3>

                <!-- Nút điều hướng trái -->
                <button class="arrow-btn left-btn">&#10094;</button>

                <!-- Wrapper cho carousel -->
                <div class="heroes-carousel-wrapper">
                    <div class="heroes-grid" id="heroes-grid">
                        <?php
                        include '../Config/connect.php';
                        $anhhung_query = mysqli_query($conn, "SELECT * FROM anhhung");
                        while ($row = mysqli_fetch_array($anhhung_query)) {
                            ?>
                            <div class="hero-card">
                                <img src="../assets/img/heroes/<?php echo $row["anhhung_img"]; ?>" alt="Mẹ VNAH">
                                <div class="hero-card-info">
                                    <div class="hero-card-name">Mẹ <?php echo $row["anhhung_name"]; ?></div>
                                    <div class="hero-card-year">
                                        Sinh ngày
                                        <?php echo ($row["anhhung_date"] != "0000-00-00") ? date("d/m/Y", strtotime($row["anhhung_date"])) : "chưa rõ"; ?>
                                    </div>
                                    <div class="hero-card-location"><?php echo $row["anhhung_home"]; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Nút điều hướng phải -->
                <button class="arrow-btn right-btn">&#10095;</button>
            </section>

                <!-- Footer will be loaded dynamically -->
                <div id="footer-container"></div>



        </div>
    </div>

    <script src="../assets/js/Bang_vinh_danh.js" defer></script>
</body>

</html>