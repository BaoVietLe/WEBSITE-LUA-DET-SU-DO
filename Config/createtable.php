<?php
    include 'connect.php';
    $create = "
    CREATE TABLE sinhvien (
        sv_id INT(3) AUTO_INCREMENT PRIMARY KEY,
        mssv VARCHAR(11),
        sv_img VARCHAR(255),
        sv_name VARCHAR(255) NOT NULL,
        sv_sharing TEXT NOT NULL
    );
    CREATE TABLE btc (
        btc_id INT(3) AUTO_INCREMENT PRIMARY KEY,
        mssv VARCHAR(11),
        btc_img VARCHAR(255),
        btc_name VARCHAR(255) NOT NULL,
        btc_title VARCHAR (255) NOT NULL,
        btc_position VARCHAR(255) NOT NULL,
        btc_phone VARCHAR (10) NOT NULL,
        btc_email VARCHAR (255) NOT NULL,
        btc_sharing TEXT NOT NULL,
        id_event VARCHAR(10)
    );
    CREATE TABLE anhhung (
        anhhung_id INT(3) AUTO_INCREMENT PRIMARY KEY,
        anhhung_img VARCHAR(255),
        anhhung_name VARCHAR(255) NOT NULL,
        anhhung_date DATE NOT NULL,
        anhhung_home VARCHAR(255) NOT NULL,
        anhhung_chiencong VARCHAR(255),
        anhhung_note VARCHAR(255)
    )";
//Kiểm tra kết nối
    if ($conn->multi_query($create)){
    do {
        if ($conn->errno) {
            echo "Lỗi: " .$conn->error. "<br>";
        }
    } while ($conn->next_result());
    echo "Tạo bảng thành công";
    } else {
        echo "Tạo bảng thất bại!";
    } 
?>