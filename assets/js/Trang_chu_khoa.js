document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('../ModelViews/Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initMobileMenu();
        });
    
    // Load footer
    fetch('../ModelViews/Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });
    
    // Xử lý nút cuộn đến phần "Về Chúng Tôi"
    const scrollButton = document.getElementById('scroll-button');
    if (scrollButton) {
        scrollButton.addEventListener('click', function() {
            document.getElementById('about').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });
    }
    
    // Thêm chức năng thanh navbar cố định khi cuộn
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-fixed');
            } else {
                navbar.classList.remove('navbar-fixed');
            }
        }
    });