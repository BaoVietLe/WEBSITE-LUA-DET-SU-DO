<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8"> <!-- Thiết lập mã hóa ký tự -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive cho di động -->
  <title>Quản lý BTC</title>

  <!-- Preconnect & Import Font Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
  </svg>
  <!-- Kết nối file CSS chính -->
  <link rel="stylesheet" href="../admin_css/admin.css">
</head>

<body>
  <div class="sidebar">
    <div class="admin_logo">
      <a href="../admin.html">
        <img src="../BIT-logo-white.png" alt="Logo" class="BIT-logo">
      </a>
    </div>

    <ul>
    <li><a href="./admin_anhhung.php">Thông tin mẹ VNAH</a></li>
      <li><a href="./admin_btc.php">Thông tin BTC</a></li>
      <li><a href="./admin_sv.php">Thông tin sinh viên</a></li>
      <li><a href="./admin_data.php">Quỹ Momo</a></li>
    </ul>
  </div>

  <div class="main-content">
    <div class="activity-management">
      <div class="header">
        <h2>QUẢN LÝ <span>BAN TỔ CHỨC CHIA SẺ</span></h2>
        <!-- Thông báo status -->
        <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
          ?>
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 30px; height: 30px">
              <use xlink:href="#check-circle-fill" />
            </svg>
            <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php
          unset($_SESSION['status']);
        }
        ?>
        <!-- Thông báo status -->

        <div class="actions">
          <input type="text" placeholder="Tìm kiếm ..." />
          <div class="button-group">

            <button type="button" class="btn btn-primary add-button" data-bs-toggle="modal"
              data-bs-target="#insertdata">
              Thêm mới
            </button>

          </div>
        </div>
      </div>

      <!-- insertdata -->
      <div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="insertdataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="insertdataLabel">Thêm mới thông tin</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../admin_solve/solve_btc.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
              <div class="form-group mb-4">
                  <label for="mssv">MSSV</label>
                  <input type="text" name="mssv" class="form-control" placeholder="MSSV">
                </div>

                <div class="form-group mb-4">
                  <label for="btc_img">Thêm ảnh BTC</label>
                  <input type="file" name="btc_img" id="formFile" class="form-control" placeholder="Thêm ảnh">
                </div>

                <div class="form-group mb-4">
                  <label for="btc_name">Tên BTC</label>
                  <input type="text" name="btc_name" class="form-control" placeholder="Tên Thành viên">
                </div>

                <div class="form-group mb-4">
                  <label for="btc_title">Chức vụ</label>
                  <input type="text" name="btc_title" class="form-control" placeholder="Chức vụ nắm giữ">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_position">Vị trí trong chương trình</label>
                  <input type="text" name="btc_position" class="form-control" placeholder="Vị trí trong chương trình">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_phone">Số điện thoại</label>
                  <input type="text" name="btc_phone" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_email">Email</label>
                  <input type="text" name="btc_email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_sharing">Sharing</label>
                  <input type="text" name="btc_sharing" class="form-control" placeholder="Chia sẻ của BTC">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" name="save_data" class="btn btn-primary">Lưu thông tin</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- insertdata -->

      <!-- editdata -->
      <div class="modal fade" id="editdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editdataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editdataLabel">Chỉnh sửa thông tin <span id="btc_id_display"
                  style="color: #679eff"></span></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="../admin_solve/solve_btc.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group mb-4">
                  <input type="hidden" name="btc_id" id="btc_id" class="form-control">
                  <input type="hidden" name="current_img" id="current_img" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label for="mssv">MSSV</label>
                  <input type="text" name="mssv" id="mssv" class="form-control" placeholder="MSSV">
                </div>


                <div class="form-group mb-4">
                  <label for="btc_img">Thêm ảnh BTC</label>
                  <input type="file" name="btc_img" id="formFile" class="form-control" placeholder="Thêm ảnh">
                  <small id="current-img-name" class="text-muted mt-1 d-block"></small>
                </div>

                <div class="form-group mb-4">
                  <label for="btc_name">Tên BTC</label>
                  <input type="text" name="btc_name" id="btc_name" class="form-control" placeholder="Tên BTC">
                </div>

                <div class="form-group mb-4">
                  <label for="btc_title">Chức vụ</label>
                  <input type="text" name="btc_title" id="btc_title" class="form-control" placeholder="Chức vụ nắm giữ">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_position">Vị trí trong chương trình</label>
                  <input type="text" name="btc_position" id="btc_position" class="form-control" placeholder="Vị trí trong chương trình">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_phone">Số điện thoại</label>
                  <input type="text" name="btc_phone" id="btc_phone" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_email">Email</label>
                  <input type="text" name="btc_email" id="btc_email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-4">
                  <label for="btc_sharing">Sharing</label>
                  <input type="text" name="btc_sharing" id="btc_sharing" class="form-control" placeholder="Chia sẻ của BTC">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" name="update_data" class="btn btn-primary">Lưu thông tin</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- editdata -->


      <table class="custom-table">

        <thead>
          <tr>
            <th>ID</th>
            <th>MSSV</th>
            <th>Img URL</th>
            <th>Tên</th>
            <th>Chức vụ</th>
            <th>Vị trí</th>
            <th>Email</th>
            <th>Hành động</th>
          </tr>
        </thead>

        <tbody>
          <?php
          include('../../Config/connect.php');
          $query = "SELECT btc_id, mssv, btc_img, btc_name, btc_title, btc_position, btc_email FROM btc";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td class="btc_id"><?= $row['btc_id'] ?></td>
                <td><?= $row['mssv'] ?></td>
                <td><?= $row['btc_img'] ?></td>
                <td><?= $row['btc_name'] ?></td>
                <td><?= $row['btc_title'] ?></td>
                <td><?= $row['btc_position'] ?></td>
                <td><?= $row['btc_email'] ?></td>
                <td class="action-buttons">
                  <a href="#" class="edit-btn"><i class="fas fa-pen-to-square"></i></a>
                  <a href="#" class="delete-btn"><i class="fas fa-trash"></i></a>
                </td>

              </tr>
            <?php }
          } else { ?>
            <tr>
              <td colspan="9">Không có dữ liệu</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>


    </div>

  </div>

  <!-- Kết nối file JavaScript -->
  <script src="./admin_js/admin.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>

  <!-- Edit data -->
  <script>
    $(document).ready(function () {

      $('.edit-btn').click(function (e) {
        e.preventDefault();
        var btc_id = $(this).closest('tr').find('.btc_id').text();

        $.ajax({
          method: 'POST',
          url: '../admin_solve/solve_btc.php',
          data: {
            'click_edit_btn': true,
            'btc_id': btc_id,
          },
          success: function (response) {
            $.each(response, function (Key, value) {
              $('#btc_id_display').text(value['btc_id']);
              $('#btc_id').val(value['btc_id']);
              $('#mssv').val(value['mssv']);
              $('#current_img').val(value['btc_img']);
              $('#current-img-name').text('Hiện tại: ' + value['btc_img']);
              $('#btc_name').val(value['btc_name']);
              $('#btc_title').val(value['btc_title']);
              $('#btc_position').val(value['btc_position']);
              $('#btc_phone').val(value['btc_phone']);
              $('#btc_email').val(value['btc_email']);
              $('#btc_sharing').val(value['btc_sharing']);
            });

            $('#editdata').modal('show');
          }
        })
      });
    });
  </script>
  <!-- Edit data -->
  <!-- Delete data -->
  <script>
    $(document).ready(function () {

      $('.delete-btn').click(function (e) {
        e.preventDefault();
        var confirmDelete = confirm("Bạn có chắc chắn muốn xóa mục này không?");
        if (!confirmDelete) {
          return; // Nếu người dùng chọn Hủy thì thoát khỏi hàm
        }
        var btc_id = $(this).closest('tr').find('.btc_id').text();
        $.ajax({
          method: 'POST',
          url: '../admin_solve/solve_btc.php',
          data: {
            'click_delete_btn': true,
            'btc_id': btc_id,
          },
          success: function (response) {
            console.log(response);
            window.location.reload();
          }
        })
      });
    });

  </script>
  <!-- Delete data -->

</body>

</html>