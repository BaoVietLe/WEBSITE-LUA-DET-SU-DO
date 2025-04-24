document.addEventListener("DOMContentLoaded", function() {
    // Nạp file navbar.html vào vùng #navbar-placeholder
    fetch("../Navigation_Bar_khoa.html")
        .then(response => {
            if (!response.ok) {
                throw new Error('Không thể tải file navbar, mã trạng thái: ' + response.status);
            }
            return response.text();
        })
        .then(data => {
            const navbarPlaceholder = document.getElementById('navbar-placeholder');
            if (navbarPlaceholder) {
                // Xử lý HTML trước khi chèn vào navbar-placeholder
                // Loại bỏ các thẻ <html>, <head>, <body> và các thẻ script
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const navElement = doc.querySelector('nav');
                if (navElement) {
                    navbarPlaceholder.innerHTML = navElement.outerHTML;
                    
                    // Thêm CSS của navbar vào head
                    const link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.href = './Thanh_Navigation_khoa/css/Navigation_Bar_khoa.css';
                    document.head.appendChild(link);
                    
                    // Thêm script của navbar vào body
                    const script = document.createElement('script');
                    script.src = './Thanh_Navigation_khoa/js/Navigation_Bar_khoa.js';
                    document.body.appendChild(script);
                } else {
                    console.error('Không tìm thấy phần tử nav.navbar trong file navbar');
                }
            } else {
                console.error('Không tìm thấy phần tử có ID "navbar-placeholder"');
            }
        })
        .catch(error => console.error('Lỗi nạp navbar:', error));
    
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
});