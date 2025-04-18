<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8"> <!-- Thiết lập mã hóa ký tự -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive cho di động -->
  <title>Quản lý anh hùng</title>

  <!-- Preconnect & Import Font Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" 
    rel="stylesheet"
  >
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

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
          <div class="actions">
            <input type="text" placeholder="Tìm kiếm ..." />
            <div class="button-group">
            <button class="filter-button">
              <i class="fa-solid fa-filter"></i> Sắp xếp
            </button>
            <button class="add-button">Thêm mới</button>
          </div>
          </div>
        </div>
      
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
                    include ('../Config/connect.php');
                    $query = "SELECT anhhung_id, anhhung_img, anhhung_name, anhhung_date, anhhung_home, anhhung_chiencong, anhhung_note FROM anhhung";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                    <tr> 
                        <td><?= $row['anhhung_id'] ?></td>
                        <td><?= $row['anhhung_img'] ?></td>
                        <td><?= $row['anhhung_name'] ?></td>
                        <td><?= $row['anhhung_date'] ?></td>
                        <td><?= $row['anhhung_home'] ?></td>
                        <td><?= $row['anhhung_chiencong'] ?></td>                       
                        <td><?= $row['anhhung_note'] ?></td>
                        <td class="action-buttons">
                            <button class="edit-btn"><i class="fas fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fas fa-trash"></i></button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
