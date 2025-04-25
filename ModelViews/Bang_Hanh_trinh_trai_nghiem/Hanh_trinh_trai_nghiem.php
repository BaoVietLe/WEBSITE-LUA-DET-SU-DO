<?php
// get_slides_data.php
header('Content-Type: application/json');

// Thiết lập kết nối database
$servername = "localhost";
$username = "root"; // Thay thế bằng username MySQL của bạn
$password = ""; // Thay thế bằng password MySQL của bạn
$dbname = "luadetsudo"; // Tên database

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die(json_encode(['error' => 'Kết nối thất bại: ' . $conn->connect_error]));
}

// Đặt charset UTF-8 để hiển thị tiếng Việt đúng
$conn->set_charset("utf8mb4");

// Truy vấn dữ liệu slides từ database
$sql = "SELECT * FROM slides ORDER BY slide_order ASC";
$result = $conn->query($sql);

$slidesData = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $slidesData[] = $row;
    }
}

// Đóng kết nối
$conn->close();

// Trả về dữ liệu dưới dạng JSON
echo json_encode($slidesData);
?>