// Hanh_trinh_trai_nghiem.js

document.addEventListener('DOMContentLoaded', function() {
    // Truy vấn dữ liệu slides từ PHP
    let slidesData = [];
    
    // Fetch dữ liệu từ server 
    fetch('get_slides_data.php')
        .then(response => response.json())
        .then(data => {
            slidesData = data;
            initSlideshow(slidesData);
        })
        .catch(error => {
            console.error('Error fetching slides data:', error);
            // Dữ liệu mẫu nếu không thể lấy từ server
            slidesData = [
                {
                    content: 'Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.',
                    avatar: './images/default-avatar.jpg'
                }
            ];
            initSlideshow(slidesData);
        });
    
    function initSlideshow(slides) {
        const slidesContainer = document.getElementById('slides-container');
        const paginationContainer = document.getElementById('pagination');
        const progressBar = document.getElementById('progress-bar');
        const pauseBtn = document.getElementById('pauseBtn');
        
        let currentSlideIndex = 0;
        let slideInterval;
        let isPaused = false;
        const slideIntervalTime = 5000; // 5 giây mỗi slide
        
        // Thêm phần tiêu đề cố định vào trước slides container
        addFixedHeaders();
        
        // Tạo các slides từ dữ liệu
        createSlides();
        
        // Tạo các chấm phân trang
        createPagination();
        
        // Bắt đầu slideshow
        startInterval();
        
        // Thêm tiêu đề cố định
        function addFixedHeaders() {
            // Tạo container cho header
            const fixedHeaders = document.createElement('div');
            fixedHeaders.className = 'fixed-headers';
            
            // Thêm subtitle
            const subtitle = document.createElement('div');
            subtitle.className = 'subtitle';
            subtitle.textContent = 'KINH NGHIỆM & TRẢI NGHIỆM';
            
            // Thêm main title
            const mainTitle = document.createElement('h1');
            mainTitle.className = 'main-title';
            mainTitle.textContent = 'HÀNH TRÌNH VỀ NGUỒN CÙNG BIT2024';
            
            // Thêm vào header container
            fixedHeaders.appendChild(subtitle);
            fixedHeaders.appendChild(mainTitle);
            
            // Thêm header vào trước slides container
            slidesContainer.parentNode.insertBefore(fixedHeaders, slidesContainer);
        }
        
        // Tạo các slides từ dữ liệu
        function createSlides() {
            // Xóa nội dung cũ
            slidesContainer.innerHTML = '';
            
            if (slides.length === 0) {
                // Tạo slide mặc định nếu không có dữ liệu
                const defaultSlide = document.createElement('div');
                defaultSlide.className = 'slide active';
                
                const slideContent = document.createElement('div');
                slideContent.className = 'slide-content';
                slideContent.textContent = 'Tham gia các campaign về cội nguồn lịch sử giúp ta hiểu sâu hơn về văn hóa, truyền thống và tinh thần dân tộc. Những chuyến đi ấy không chỉ khơi dậy lòng tự hào mà còn truyền cảm hứng để thế hệ trẻ gìn giữ và phát huy giá trị lịch sử.';
                
                defaultSlide.appendChild(slideContent);
                slidesContainer.appendChild(defaultSlide);
                return;
            }

            // Tạo slides từ dữ liệu
            slides.forEach((slide, index) => {
                const slideElement = document.createElement('div');
                slideElement.className = `slide ${index === 0 ? 'active' : ''}`;
                
                const slideContent = document.createElement('div');
                slideContent.className = 'slide-content';
                slideContent.textContent = slide.content;
                
                slideElement.appendChild(slideContent);
                slidesContainer.appendChild(slideElement);
            });
        }
        
        // Tạo các chấm phân trang
        function createPagination() {
            // Xóa nội dung cũ
            paginationContainer.innerHTML = '';
            
            if (slides.length === 0) {
                // Tạo một chấm mặc định nếu không có dữ liệu
                const dot = document.createElement('span');
                dot.className = 'dot active';
                paginationContainer.appendChild(dot);
                return;
            }

            slides.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.className = `dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    resetInterval();
                });
                paginationContainer.appendChild(dot);
            });
        }
        
        // Chuyển đến slide theo index
        function goToSlide(index) {
            const slideElements = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (slideElements.length === 0) return;

            // Loại bỏ class active từ tất cả slides và dots
            slideElements.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Thêm class active cho slide và dot hiện tại
            slideElements[index].classList.add('active');
            dots[index].classList.add('active');
            
            // Cập nhật avatar
            const avatarImg = document.querySelector('.avatar');
            if (avatarImg && slides[index]) {
                avatarImg.src = slides[index].avatar;
            }
            
            // Cập nhật progress bar
            updateProgressBar(0);
            
            currentSlideIndex = index;
        }
        
        // Chuyển đến slide tiếp theo
        function nextSlide() {
            if (slides.length === 0) return;
            const nextIndex = (currentSlideIndex + 1) % slides.length;
            goToSlide(nextIndex);
        }
        
        // Cập nhật thanh tiến trình
        function updateProgressBar(percent) {
            progressBar.style.width = `${percent}%`;
        }
        
        // Thiết lập và khởi động interval cho slideshow
        function startInterval() {
            clearInterval(slideInterval);
            let progress = 0;
            const increment = 100 / (slideIntervalTime / 100); // Cập nhật mỗi 100ms
            
            updateProgressBar(0);
            
            slideInterval = setInterval(() => {
                if (!isPaused) {
                    progress += increment;
                    
                    if (progress >= 100) {
                        progress = 0;
                        nextSlide();
                    }
                    
                    updateProgressBar(progress);
                }
            }, 100);
        }
        
        // Reset interval khi người dùng tương tác
        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }
        
        // Xử lý sự kiện tạm dừng
        pauseBtn.addEventListener('click', function() {
            isPaused = !isPaused;
            this.textContent = isPaused ? '▶️' : '⏸️';
        });
    }
});