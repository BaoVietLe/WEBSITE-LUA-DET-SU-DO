function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.getElementById("email");
    const clearIcon = document.getElementById("clear-email");

    // Kiểm tra và hiển thị icon khi có nhập liệu
    emailInput.addEventListener("input", function () {
        clearIcon.style.display = emailInput.value.length > 0 ? "inline-block" : "none";
    });

    // Hàm xóa nội dung input
    function clearEmail() {
        emailInput.value = "";
        clearIcon.style.display = "none"; // Ẩn icon sau khi xóa
        emailInput.focus(); // Đưa trỏ chuột về ô input
    }

    // Gán hàm vào window để có thể gọi từ HTML
    window.clearEmail = clearEmail;
});