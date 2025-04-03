document.addEventListener("DOMContentLoaded", function () {
    // Lấy URL hiện tại
    let currentPath = window.location.pathname.split("/").pop();

    // Lấy tất cả các mục trong sidebar
    let sidebarLinks = document.querySelectorAll(".sidebar ul li a");

    sidebarLinks.forEach(link => {
        // Nếu URL trùng với đường dẫn của thẻ <a>, thêm class active
        if (link.getAttribute("href") === currentPath) {
            link.parentElement.classList.add("active");
        }
    });
});
