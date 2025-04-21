<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8"> <!-- Thiết lập mã hóa ký tự -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive cho di động -->
  <title>Quản lý anh hùng</title>

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
  <link rel="stylesheet" href="./admin_css/admin.css">
</head>

<body>
  <div class="sidebar">
    <div class="admin_logo">
      <a href="./admin.html">
        <img src="./BIT-logo-white.png" alt="Logo" class="BIT-logo">
      </a>
    </div>

    <ul>
      <li><a href="./admin_hoatdong.html">Quản lý Anh hùng</a></li>
      <li><a href="./admin_hoatdong.html">Quản lý quỹ</a></li>
      <li><a href="./admin_hoatdong.html">Thông tin sinh viên</a></li>
      <li><a href="./admin_hoatdong.html">Thông tin mẹ VNAH</a></li>
    </ul>
  </div>

  <div class="main-content">
    <div class="activity-management">
      <div class="header">
        <h2>QUẢN LÝ <span>MẸ VIỆT NAM ANH HÙNG</span></h2>
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

            <form action="solve_admin.php" method="POST">
              <div class="modal-body">

                <div class="form-group mb-4">
                  <label for="anhhung_img">Thêm ảnh Mẹ Việt Nam Anh hùng</label>
                  <input type="file" name="anhhung_img" id="formFile" class="form-control" placeholder="Thêm ảnh">
                </div>

                <div class="form-group mb-4">
                  <label for="anhhung_name">Tên Mẹ Việt Nam Anh hùng</label>
                  <input type="text" name="anhhung_name" class="form-control" placeholder="Tên Mẹ Việt Nam Anh hùng">
                </div>

                <div class="form-group mb-4">
                  <label for="anhhung_date">Ngày sinh</label>
                  <input type="date" name="anhhung_date" class="form-control" placeholder="Ngày sinh">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_home">Quê quán</label>
                  <input type="text" name="anhhung_home" name="anhhung_home" class="form-control"
                    placeholder="Quê quán">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_chiencong">Chiến công</label>
                  <input type="text" name="anhhung_chiencong" class="form-control" placeholder="Chiến công">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_note">Ghi chú</label>
                  <input type="text" name="anhhung_note" class="form-control" placeholder="Ghi chú">
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
              <h1 class="modal-title fs-5" id="editdataLabel">Chỉnh sửa thông tin <span id="anhhung_id_display"
                  style="color: #679eff"></span></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="solve_admin.php" method="POST">
              <div class="modal-body">
                <div class="form-group mb-4">
                  <input type="hidden" name="anhhung_id" id="anhhung_id" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label for="anhhung_img">Thêm ảnh Mẹ Việt Nam Anh hùng</label>
                  <input type="file" name="anhhung_img" id="formFile" id="anhhung_img" class="form-control"
                    placeholder="Thêm ảnh">
                  <small id="current-img-name" class="text-muted mt-1 d-block"></small>
                </div>

                <div class="form-group mb-4">
                  <label for="anhhung_name">Tên Mẹ Việt Nam Anh hùng</label>
                  <input type="text" name="anhhung_name" id="anhhung_name" class="form-control"
                    placeholder="Tên Mẹ Việt Nam Anh hùng">
                </div>

                <div class="form-group mb-4">
                  <label for="anhhung_date">Ngày sinh</label>
                  <input type="date" name="anhhung_date" id="anhhung_date" class="form-control" placeholder="Ngày sinh">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_home">Quê quán</label>
                  <input type="text" name="anhhung_home" id="anhhung_home" name="anhhung_home" class="form-control"
                    placeholder="Quê quán">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_chiencong">Chiến công</label>
                  <input type="text" name="anhhung_chiencong" id="anhhung_chiencong" class="form-control"
                    placeholder="Chiến công">
                </div>
                <div class="form-group mb-4">
                  <label for="anhhung_note">Ghi chú</label>
                  <input type="text" name="anhhung_note" id="anhhung_note" class="form-control" placeholder="Ghi chú">
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
            <th>img URL</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
            <th>Chiến công</th>
            <th>Ghi chú</th>
            <th>Hành động</th>
          </tr>
        </thead>

        <tbody>
          <?php
          include('../Config/connect.php');
          $query = "SELECT anhhung_id, anhhung_img, anhhung_name, anhhung_date, anhhung_home, anhhung_chiencong, anhhung_note FROM anhhung";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td class="anhhung_id"><?= $row['anhhung_id'] ?></td>
                <td><?= $row['anhhung_img'] ?></td>
                <td><?= $row['anhhung_name'] ?></td>
                <td><?= $row['anhhung_date'] ?></td>
                <td><?= $row['anhhung_home'] ?></td>
                <td><?= $row['anhhung_chiencong'] ?></td>
                <td><?= $row['anhhung_note'] ?></td>
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
        var anhhung_id = $(this).closest('tr').find('.anhhung_id').text();

        $.ajax({
          method: 'POST',
          url: 'solve_admin.php',
          data: {
            'click_edit_btn': true,
            'anhhung_id': anhhung_id,
          },
          success: function (response) {
            $.each(response, function (Key, value) {
              $('#anhhung_id_display').text(value['anhhung_id']);
              $('#anhhung_id').val(value['anhhung_id']);
              $('#current-img-name').text('Hiện tại: ' + value['anhhung_img']);
              $('#anhhung_name').val(value['anhhung_name']);
              $('#anhhung_date').val(value['anhhung_date']);
              $('#anhhung_home').val(value['anhhung_home']);
              $('#anhhung_chiencong').val(value['anhhung_chiencong']);
              $('#anhhung_note').val(value['anhhung_note']);
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
        var anhhung_id = $(this).closest('tr').find('.anhhung_id').text();
        $.ajax({
          method: 'POST',
          url: 'solve_admin.php',
          data: {
            'click_delete_btn': true,
            'anhhung_id': anhhung_id,
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