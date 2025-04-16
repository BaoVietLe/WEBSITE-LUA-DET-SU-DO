<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name"; // Đổi lại cho đúng

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
