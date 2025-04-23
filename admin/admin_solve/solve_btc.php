<?php
session_start();
include('../../Config/connect.php');
/*insertdata*/
if (isset($_POST['save_data'])) {
    $mssv = $_POST['mssv'];
    $btc_name = $_POST['btc_name'];
    $btc_title = $_POST['btc_title'];
    $btc_position = $_POST['btc_position'];
    $btc_phone = $_POST['btc_phone'];
    $btc_email = $_POST['btc_email'];
    $btc_sharing = $_POST['btc_sharing'];
    // Xử lý hình ảnh tải lên
    $upload_dir = '../../assets/img/btc/';
    $btc_img = null;
    if (!empty($_FILES['btc_img']['name'])) {
        $btc_img = basename($_FILES['btc_img']['name']);
        $target_file = $upload_dir . $btc_img;
        if (!move_uploaded_file($_FILES['btc_img']['tmp_name'], $target_file)) {
            $error = $_FILES['btc_img']['error'];
            echo "<script>alert('Lỗi upload hình ảnh: $error');</script>";
        }
    }
    $insert_query = "INSERT INTO btc(mssv, btc_img, btc_name, btc_title, btc_position, btc_phone, btc_email, btc_sharing) 
                        VALUES ('$mssv', '$btc_img', '$btc_name', '$btc_title', '$btc_position', '$btc_phone', '$btc_email', '$btc_sharing')";
    $insert_query_run = mysqli_query($conn, $insert_query);
    if ($insert_query_run) {
        $_SESSION['status'] = "Thêm mới thành công";
        header('location: ../admin_view/admin_btc.php');
    } else {
        $_SESSION["status"] = "Thêm mới thất bại";
        header('location: ../admin_view/admin_btc.php');
    }
}

/*editdata*/
if (isset($_POST['click_edit_btn'])) {
    $id = $_POST['btc_id'];
    $arrayresult = [];
    $fetch_query = "SELECT * FROM btc WHERE btc_id = '$id'";
    $fetch_query_run = mysqli_query($conn, $fetch_query);
    if (mysqli_num_rows($fetch_query_run) > 0) {

        while ($row = mysqli_fetch_array($fetch_query_run)) {
            array_push($arrayresult, $row);
            header('content-type: application/json');
            echo json_encode($arrayresult);
        }
    }
} else {
    echo '<h4>No record found</h4>';
}

/*updatedata*/
if (isset($_POST['update_data'])) {
    $id = $_POST['btc_id'];
    $mssv = $_POST['mssv'];
    $btc_name = $_POST['btc_name'];
    $btc_title = $_POST['btc_title'];
    $btc_position = $_POST['btc_position'];
    $btc_phone = $_POST['btc_phone'];
    $btc_email = $_POST['btc_email'];
    $btc_sharing = $_POST['btc_sharing'];
    // Xử lý hình ảnh tải lên
    $upload_dir = '../../assets/img/btc/';
    $btc_img = null;
    if (!empty($_FILES['btc_img']['name'])) {
        $btc_img = basename($_FILES['btc_img']['name']);
        $target_file = $upload_dir . $btc_img;
        if (!move_uploaded_file($_FILES['btc_img']['tmp_name'], $target_file)) {
            $error = $_FILES['btc_img']['error'];
            echo "<script>alert('Lỗi upload hình ảnh: $error');</script>";
        }
    } else {
        $btc_img = $_POST['current_img'];
    }

    $update_query = "UPDATE btc SET mssv = ?, btc_img = ?, btc_name = ?, btc_title = ?, btc_position = ?, btc_phone = ?, btc_email = ?, btc_sharing = ? WHERE btc_id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param('ssssssssi', $mssv, $btc_img, $btc_name, $btc_title, $btc_position, $btc_phone, $btc_email, $btc_sharing, $id);
    $update_query_run = $stmt->execute();
    if ($update_query_run) {
        $_SESSION['status'] = "Chỉnh sửa thành công";
        header('location: ../admin_view/admin_btc.php');
    } else {
        $_SESSION["status"] = "Chỉnh sửa thất bại";
        header('location: ../admin_view/admin_btc.php');
    }
}

/* Delete Data*/
if (isset($_POST['click_delete_btn'])) {
    $id = $_POST['btc_id'];
    // B1: Lấy tên ảnh cũ từ DB
    $get_img_query = "SELECT btc_img FROM btc WHERE btc_id = ?";
    $stmt = $conn->prepare($get_img_query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $img_name = "";
    if ($row = $result->fetch_assoc()) {
        $img_name = $row['btc_img'];
    }

    // B2: Xóa ảnh khỏi thư mục nếu tồn tại
    $upload_dir = '../../assets/img/btc/';
    if (!empty($img_name) && file_exists($upload_dir . $img_name)) {
        unlink($upload_dir . $img_name);
    }

    $delete_query = "DELETE FROM btc WHERE btc_id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $id);
    $delete_query_run = $stmt->execute();
    if ($delete_query_run) {
        $_SESSION['status'] = "Xóa thành công";
        header('location: ../admin_view/admin_btc.php');
    } else {
        $_SESSION["status"] = "Xóa thất bại";
        header('location: ../admin_view/admin_btc.php');
    }
}
?>