document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-links a");
    const nav = document.querySelector(".nav-links");
    const indicator = document.getElementById("indicator");
  
    // Xử lý phần notification popup
    const bellIcon = document.querySelector(".notification-icon");
    const notificationPopup = document.querySelector(".notification-popup");
  
    // Kiểm tra xem các phần tử có tồn tại không
    if (bellIcon && notificationPopup) {
      // Lắng nghe sự kiện click trên chuông thông báo
      bellIcon.addEventListener("click", function (event) {
        event.stopPropagation();
        
        // Hiển thị/ẩn popup bằng cách trực tiếp thay đổi style
        if (notificationPopup.style.display === "block") {
          notificationPopup.style.display = "none";
        } else {
          notificationPopup.style.display = "block";
        }
      });
  
      // Đóng popup khi click bên ngoài
      document.addEventListener("click", function (event) {
        if (!notificationPopup.contains(event.target) && !bellIcon.contains(event.target)) {
          notificationPopup.style.display = "none";
        }
      });
    } else {
      console.error("Không tìm thấy phần tử notification-icon hoặc notification-popup");
    }
  });
  // Chiều cao của thanh xanh ứng với Thanh Navbar
  window.addEventListener("load", adjustNavLinks);
  window.addEventListener("resize", adjustNavLinks);
  
  function adjustNavLinks() {
    const navbar = document.querySelector(".navbar");
    const links = document.querySelectorAll(".nav-links a::after");
  
    if (navbar) {
      const navbarHeight = navbar.offsetHeight; // Lấy chiều cao navbar
      links.forEach(link => {
        link.style.height = `${navbarHeight}px`; // Cập nhật chiều cao
      });
    }
  }
  