# 🇻🇳 CÔNG TRÌNH THANH NIÊN: WEBSITE "LỬA DỆT SỬ ĐỎ"

[![Website](https://img.shields.io/badge/Website-Lửa_dệt_Sử_đỏ-blue?style=for-the-badge)](https://lnkd.in/gYzN7P8f)
[![Tech Stack](https://img.shields.io/badge/Tech_Stack-HTML_|_CSS_|_JS_|_PHP-orange?style=for-the-badge)](#)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen?style=for-the-badge)](#)

**Cổng thông tin vinh danh Mẹ Việt Nam Anh Hùng và Hành trình về nguồn Đoàn - Hội khoa Công nghệ thông tin kinh doanh (BIT)**

---

## 📑 Mục lục
1. [Tổng quan dự án](#1-tổng-quan-dự-án)
2. [Công nghệ và Kiến trúc hệ thống](#2-công-nghệ-và-kiến-trúc-hệ-thống)
3. [Tính năng chi tiết](#3-tính-năng-chi-tiết)
4. [Hướng dẫn cài đặt & Triển khai](#4-hướng-dẫn-cài-đặt--triển-khai)
5. [Đội ngũ thực hiện](#5-đội-ngũ-thực-hiện)

---

## 1. 📌 Tổng quan dự án

**“Lửa dệt Sử đỏ”** không chỉ là một trang web, mà là một không gian số hóa lưu giữ ký ức và tôn vinh những giá trị lịch sử hào hùng. Dự án trưng bày tư liệu, hình ảnh và những câu chuyện xúc động của các cựu chiến binh, Mẹ Việt Nam Anh hùng và những người có công với cách mạng. 

Thông qua nền tảng này, Đoàn - Hội khoa BIT mong muốn lan tỏa thông điệp "Uống nước nhớ nguồn", đồng thời kêu gọi sinh viên trực tiếp đồng hành qua Quỹ “Vinh danh Anh hùng” hoặc tham gia các chuyến đi thực tế. Việc tích cực tham gia các hoạt động và lưu lại hành trình trên hệ thống cũng là một minh chứng thực tiễn, tạo động lực to lớn cho các bạn sinh viên trong quá trình phấn đấu đạt danh hiệu **Sinh viên 5 Tốt** các cấp.

* **🌐 Link trải nghiệm:** [Truy cập Website Lửa dệt Sử đỏ](https://lnkd.in/gYzN7P8f)
* **⏱️ Thời gian phát triển:** 1 tháng (Từ khâu lên ý tưởng, thiết kế UI/UX đến lập trình và deploy).
* **🛡️ Đơn vị chủ quản:** Quản lý và sở hữu bản quyền bởi Đoàn - Hội khoa Công nghệ thông tin kinh doanh (BIT). Nhóm thực hiện: BANKYTHUAT - 30/4.
* **📝 Bài viết cảm nghĩ:** [Xem chi tiết tại đây](https://lnkd.in/gYGVSMMV)

---

## 2. 💻 Công nghệ và Kiến trúc hệ thống

Dự án được xây dựng theo mô hình Client-Server truyền thống nhưng được tối ưu hóa mạnh mẽ về mặt hiệu suất để đảm bảo thời gian phản hồi (loading time) luôn dưới 3 giây.

### Khối Front-end (Client-side)
* **HTML5:** Xây dựng bộ khung ngữ nghĩa (Semantic Web), tối ưu hóa cấu trúc cho SEO và các công cụ đọc màn hình.
* **CSS3:** Tùy biến giao diện chuyên sâu. Sử dụng hệ thống Grid và Flexbox để đảm bảo tính năng **Fully Responsive** (hoạt động mượt mà trên Desktop, Tablet và Mobile). 
* **JavaScript (Vanilla JS):** Xử lý các tương tác động trên giao diện người dùng, hiệu ứng chuyển trang, kiểm tra tính hợp lệ của biểu mẫu (form validation).

### Khối Back-end & Database (Server-side)
* **PHP:** Ngôn ngữ cốt lõi xử lý logic nghiệp vụ, kết nối cơ sở dữ liệu, xử lý tính toán quỹ và render giao diện động (Dynamic fetching).
* **MySQL:** Hệ quản trị cơ sở dữ liệu quan hệ, dùng để lưu trữ thông tin các chuyến đi, dữ liệu đóng góp từ Quỹ Momo và hệ thống Bảng vinh danh.

### Tối ưu hạ tầng (Infrastructure & Hosting)
* **Lưu trữ tốc độ cao (SSD Hosting):** Ưu tiên triển khai trên các máy chủ sử dụng ổ cứng SSD NVMe để tăng tốc độ truy xuất dữ liệu.
* **Quản trị hệ thống:** Sử dụng nền tảng **cPanel** để tối ưu hóa việc quản lý source code và database.
* **Đảm bảo tính sẵn sàng (Availability):** Cấu hình **cơ chế Failover** dự phòng cho server, giúp website luôn duy trì hoạt động liên tục ngay cả khi có lượng truy cập đột biến.

---

## 3. 🌟 Tính năng chi tiết

### Tính năng Tương tác & Trình diễn (Front-office)
* **Trang chủ (Home & Landing):** Hiển thị thông tin sơ bộ, lời ngỏ của BTC và cấu trúc điều hướng.
* **Bảo tàng số (Thông tin về nguồn):** Lưu trữ album hình ảnh, tư liệu lịch sử và bài viết về các hoạt động tại BIT.
* **Hệ thống Quỹ Momo "Vinh danh Anh hùng":** Tích hợp mã QR và công khai minh bạch toàn bộ dữ liệu dòng tiền (thu - chi).
* **Bảng Kinh nghiệm & Trải nghiệm:** Thu thập dữ liệu từ Google Form, xử lý qua PHP để tự động hiển thị dạng thẻ (cards) trên website.

### Tính năng Xử lý Động (Back-office bằng PHP)
* **Bảng Vinh Danh (Sắp ra mắt):** Truy vấn (fetch data) các cá nhân/tập thể có đóng góp xuất sắc từ CSDL MySQL.
* **Kết nối "Người phụ trách":** Hồ sơ đội ngũ BTC hiển thị động. Tích hợp tính năng **"Liên hệ ngay"** mở trình soạn thảo email mặc định với thông tin đã cấu hình sẵn.

---

## 4. 🚀 Hướng dẫn cài đặt & Triển khai

### Môi trường Localhost (Dành cho Developer)
1.  **Yêu cầu hệ thống:** Cài đặt `XAMPP`, `WAMP` hoặc `Laragon` (PHP >= 7.4).
2.  **Sao chép mã nguồn:**
    ```bash
    git clone [https://github.com/](https://github.com/)[user-name]/lua-det-su-do.git
    ```
3.  **Cấu hình thư mục:** Copy toàn bộ thư mục dự án vào `C:\xampp\htdocs\` (nếu dùng XAMPP).
4.  **Khởi tạo Database:**
    * Mở trình quản lý MySQL (phpMyAdmin).
    * Tạo cơ sở dữ liệu mới (ví dụ: `db_luadetsudo`).
    * Import file `database.sql` đi kèm vào cơ sở dữ liệu.
5.  **Cấu hình kết nối:** Chỉnh sửa file `config.php` hoặc `db_connect.php`:
    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_luadetsudo";
    ```
6.  **Chạy dự án:** Truy cập `http://localhost/lua-det-su-do`.

### Triển khai lên Production (cPanel Hosting)
1.  Nén toàn bộ mã nguồn thành file `.zip`.
2.  Tạo Database và User trên **MySQL® Databases** (cPanel).
3.  Import file `.sql` qua **phpMyAdmin**.
4.  Upload và giải nén file `.zip` vào thư mục `public_html` qua **File Manager**.
5.  Cập nhật thông tin Database trong file cấu hình PHP trên Hosting.

---

## 5. 👥 Đội ngũ thực hiện

Dự án là tâm huyết của tập thể sinh viên và các cộng sự tài năng. Cảm ơn mọi người đã cùng nhau dệt nên ngọn lửa lịch sử này!

| STT | Họ và Tên | Vai trò chính | Chi tiết nhiệm vụ |
| :---: | :--- | :--- | :--- |
| 1 | **Bảo Lê Viết** | **Trưởng dự án** | Lên kế hoạch, quản lý tiến độ và điều phối chung. |
| 2 | **Kim Nguyen Khac Vinh** | **Đồng thực hiện** | Kiến trúc sư hệ thống, lập trình viên chính (Fullstack PHP/JS). |
| 3 | Nguyễn Thị Diệu Thảo | Cộng sự | Hỗ trợ triển khai dự án, tổng hợp tư liệu. |
| 4 | Quân Hoàng | Cộng sự | Phối hợp triển khai các tính năng vệ tinh. |
| 5 | Hà Quang Đại | Cộng sự | Hỗ trợ xử lý dữ liệu và vận hành hệ thống. |
| 6 | Nguyễn Võ Lan Thanh | Cộng sự | Điều phối thông tin giữa các team. |
| 7 | Gia Huy Trần Viết | Hỗ trợ chuyên môn | Đảm nhiệm thiết kế giao diện (UI/UX Design). |
| 8 | Vân Thúy | Hỗ trợ chuyên môn | Quản lý dự toán và kinh phí vận hành. |
| 9 | Nguyen Minh Khoi | Hỗ trợ chuyên môn | Cố vấn định hướng ý tưởng và concept dự án. |
| 10 | Hoàng Thị Ánh | Hỗ trợ chuyên môn | Biên tập và định hướng luồng nội dung lịch sử. |
| 11 | Võ Tâm Đan | Hỗ trợ chuyên môn | Chịu trách nhiệm công tác truyền thông lan tỏa. |
| 12 | HOA LÊ THỊ THU | Hỗ trợ chuyên môn | Phối hợp đẩy mạnh truyền thông đa nền tảng. |

---

> *Tham gia hoạt động Đoàn - Hội không bao giờ là một trải nghiệm lãng phí đối với việc nâng cao học thuật chuyên ngành, đặc biệt là khi bạn biết cách nắm bắt thời cơ và biến chúng thành những dự án thực tế đầy giá trị!*
