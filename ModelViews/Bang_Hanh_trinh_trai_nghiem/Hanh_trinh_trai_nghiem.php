<?php
    include '../Config/connect.php';
    
    // Lấy dữ liệu từ bảng sinhvien
    $query = "SELECT * FROM sinhvien";
    $result = $conn->query($query);
    
    $slidesData = array();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $slidesData[] = array(
                'id' => $row['sv_id'],
                'mssv' => $row['mssv'],
                'name' => $row['sv_name'],
                'content' => $row['sv_sharing'],
                'avatar' => '../assets/img/sv/' . $row['sv_img']
            );
        }
    }
    
    // Trả về dữ liệu dưới dạng JSON nếu được gọi qua AJAX
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($slidesData);
        exit;
    }
?>