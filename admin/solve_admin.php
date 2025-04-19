<?php
session_start();
include('../Config/connect.php');
if (isset($_POST['save_data'])) {
    $anhhung_img = $_POST['anhhung_img'];
    $anhhung_name = $_POST['anhhung_name'];
    $anhhung_date = $_POST['anhhung_date'];
    $anhhung_home = $_POST['anhhung_home'];
    $anhhung_chiencong = $_POST['anhhung_chiencong'];
    $anhhung_note = $_POST['anhhung_note'];

    $insert_query = "INSERT INTO anhhung(anhhung_img, anhhung_name, anhhung_date, anhhung_home, anhhung_chiencong, anhhung_note) 
                        VALUES ('$anhhung_img', '$anhhung_name', '$anhhung_date', '$anhhung_home', '$anhhung_chiencong', '$anhhung_note')";
    $insert_query_run = mysqli_query($conn, $insert_query);
    if ($insert_query_run) {
        $_SESSION['status'] = "Thêm mới thành công";
        header('location: admin_anhhung.php');
    } else {
        $_SESSION["status"] = "Thêm mới thất bại";
        header('location: admin_anhhung.php');
    }
}
?>