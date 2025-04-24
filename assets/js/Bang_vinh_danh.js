document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('../../ModelViews/Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initMobileMenu();
        });
    
    // Load footer
    fetch('../../ModelViews/Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });