<?php
    include 'connect.php';
    $insert = "
        INSERT INTO sinhvien (mssv, sv_img, sv_name, sv_sharing)
            VALUES
            ('12345678901', 'image1.jpg', 'Nguyen Van A', 'Chia sẻ về cuộc sống sinh viên và học tập'),
            ('12345678902', 'image2.jpg', 'Tran Thi B', 'Chia sẻ về các hoạt động ngoại khóa và kinh nghiệm làm việc'),
            ('12345678903', 'image3.jpg', 'Le Minh C', 'Chia sẻ về các dự án nghiên cứu và sáng tạo trong học tập');
        
        INSERT INTO btc (mssv, btc_img, btc_name, btc_title, btc_position, btc_phone, btc_email, btc_sharing)
            VALUES
            ('12345678901', 'btc_image1.jpg', 'Nguyen Thi D', 'Chủ tịch', 'Trưởng ban tổ chức', '0123456789', 'nguyen.d@example.com', 'Chia sẻ về các chương trình tình nguyện và phát triển cộng đồng', 'EVT001'),
            ('12345678902', 'btc_image2.jpg', 'Tran Thi E', 'Phó chủ tịch', 'Trưởng ban tài chính', '0123456790', 'tran.e@example.com', 'Chia sẻ về các kế hoạch tài chính và quản lý quỹ', 'EVT002'),
            ('12345678903', 'btc_image3.jpg', 'Le Minh F', 'Thư ký', 'Trưởng ban nội dung', '0123456791', 'le.f@example.com', 'Chia sẻ về các hoạt động truyền thông và nội dung chương trình', 'EVT003');

        INSERT INTO anhhung (anhhung_img, anhhung_name, anhhung_date, anhhung_home, anhhung_chiencong, anhhung_note)
            VALUES
            ('anhhung_image1.jpg', 'Nguyen Thi G', '2025-04-10', 'Hà Nội', 'Giải nhất cuộc thi khoa học', 'Công trình nghiên cứu về sinh học tế bào'),
            ('anhhung_image2.jpg', 'Tran Minh H', '2025-04-12', 'TP.HCM', 'Giải nhì cuộc thi viết sáng tạo', 'Dự án về phát triển ứng dụng di động cho sinh viên'),
            ('anhhung_image3.jpg', 'Le Thi I', '2025-04-15', 'Đà Nẵng', 'Giải ba cuộc thi thiết kế đồ họa', 'Thiết kế bộ nhận diện thương hiệu cho một tổ chức phi lợi nhuận');
    ";
    //Kiểm tra kết nối
    if ($conn->multi_query($insert)){
        do {
            if ($conn->errno) {
                echo "Lỗi: " .$conn->error. "<br>";
            }
        } while ($conn->next_result());
            echo "Nhập dữ liệu thành công";
        } else {
            echo "Nhập dữ liệu thất bại!";
        }
?>