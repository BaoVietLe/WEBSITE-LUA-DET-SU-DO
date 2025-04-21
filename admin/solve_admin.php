<?php
session_start();
include('../Config/connect.php');
/*insertdata*/
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

/*editdata*/
if (isset($_POST['click_edit_btn'])) {
    $id = $_POST['anhhung_id'];
    $arrayresult = [];
    $fetch_query = "SELECT * FROM anhhung WHERE anhhung_id = '$id'";
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
    $id = $_POST['anhhung_id'];
    $anhhung_img = $_POST['anhhung_img'];
    $anhhung_name = $_POST['anhhung_name'];
    $anhhung_date = $_POST['anhhung_date'];
    $anhhung_home = $_POST['anhhung_home'];
    $anhhung_chiencong = $_POST['anhhung_chiencong'];
    $anhhung_note = $_POST['anhhung_note'];
    $update_query = "UPDATE anhhung SET anhhung_img = ?, anhhung_name = ?, anhhung_date = ?, anhhung_home = ?, anhhung_chiencong = ?, anhhung_note = ? WHERE anhhung_id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param('ssssssi', $anhhung_img, $anhhung_name, $anhhung_date, $anhhung_home, $anhhung_chiencong, $anhhung_note, $id);
    $update_query_run = $stmt->execute();
    if ($update_query_run) {
        $_SESSION['status'] = "Chỉnh sửa thành công";
        header('location: admin_anhhung.php');
    } else {
        $_SESSION["status"] = "Chỉnh sửa thất bại";
        header('location: admin_anhhung.php');
    }
}

/* Delete Data*/
if (isset($_POST['click_delete_btn'])) 
{
    $id = $_POST['anhhung_id'];
    $delete_query = "DELETE FROM anhhung WHERE anhhung_id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $id);
    $delete_query_run = $stmt->execute();
    if ($delete_query_run) {
        $_SESSION['status'] = "Xóa thành công";
        header('location: admin_anhhung.php');
    } else {
        $_SESSION["status"] = "Xóa thất bại";
        header('location: admin_anhhung.php');
    }
}
?>