document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('./Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
        // Execute navbar initialization code
        initNavbar();
        });
    
    // Load footer
    fetch('./Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });
    function initNavbar() {
        const navLinks = document.querySelectorAll(".nav-links a");
        const nav = document.querySelector(".nav-links");
        const indicator = document.getElementById("indicator");
        const hamburger = document.getElementById("hamburger");
        const overlay = document.getElementById("overlay");
        
        // Toggle mobile menu
        if (hamburger) {
            hamburger.addEventListener("click", function() {
                nav.classList.toggle("active");
                hamburger.classList.toggle("active");
                overlay.classList.toggle("active");
                
                // Ngăn cuộn trang khi menu mở
                if (nav.classList.contains("active")) {
                    document.body.style.overflow = "hidden";
                } else {
                    document.body.style.overflow = "auto";
                }
            });
        }
        
        // Đóng menu khi click vào overlay
        if (overlay) {
            overlay.addEventListener("click", function() {
                nav.classList.remove("active");
                hamburger.classList.remove("active");
                overlay.classList.remove("active");
                document.body.style.overflow = "auto";
            });
        }
        
        // Đóng menu khi click vào link
        if (navLinks) {
            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    if (window.innerWidth <= 768) {
                        nav.classList.remove("active");
                        hamburger.classList.remove("active");
                        overlay.classList.remove("active");
                        document.body.style.overflow = "auto";
                    }
                });
            });
        }
        
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
        }
    }
            // Toggle content panel
            const chevronUp = document.getElementById('chevron-up');
            const contentPanel = document.getElementById('content-panel');
            
            chevronUp.addEventListener('click', () => {
                contentPanel.classList.toggle('active');
                // Update chevron direction
                if (contentPanel.classList.contains('active')) {
                    chevronUp.querySelector('svg').innerHTML = '<path d="M6 9l6 6 6-6"/>';
                } else {
                    chevronUp.querySelector('svg').innerHTML = '<path d="M18 15l-6-6-6 6"/>';
                }
            });

            function initCarousel(buttonLeft, buttonRight, track, itemSelector, visibleItems = 2) {
                const items = document.querySelectorAll(itemSelector);
                const totalItems = items.length;
                let currentIndex = 0;
                let itemWidth = items[0].offsetWidth;
            
                function updatePosition() {
                    const newPosition = -(currentIndex * itemWidth);
                    track.style.transform = `translateX(${newPosition}px)`;
                }
            
                buttonLeft.addEventListener('click', () => {
                    currentIndex = Math.max(currentIndex - 1, 0); // Không lùi quá 0
                    updatePosition();
                });
            
                buttonRight.addEventListener('click', () => {
                    currentIndex = Math.min(currentIndex + 1, totalItems - visibleItems); // Không tiến quá số thẻ hiển thị
                    updatePosition();
                });
            
                window.addEventListener('resize', () => {
                    itemWidth = items[0].offsetWidth;
                    updatePosition();
                    updateVisibleItems();
                });
                function autoSlide(interval = 3000) {
                    setInterval(() => {
                        if (currentIndex < totalItems - visibleItems) {
                            currentIndex++;
                        } else {
                            currentIndex = 0; // Quay lại từ đầu nếu hết thẻ
                        }
                        updatePosition();
                    }, interval);
                }
                function updateVisibleItems() {
                    visibleItems = getVisibleItems();
                    currentIndex = Math.min(currentIndex, totalItems - visibleItems);
                    updatePosition();
                }
                updatePosition();
                autoSlide();
            }
            
            // Gọi hàm cho từng carousel
            function getVisibleItems() {
                // Tính số lượng thẻ hiển thị dựa trên kích thước màn hình
                if (window.innerWidth < 768) {
                    return 1;
                } else if (window.innerWidth < 1024) {
                    return 2;
                } else {
                    return 3; // Mặc định hiển thị 3 thẻ
                }
            }
            
            document.addEventListener('DOMContentLoaded', function () {
                const visibleItems = getVisibleItems();
                initCarousel(
                    document.querySelector('.left-btn'),
                    document.querySelector('.right-btn'),
                    document.querySelector('.heroes-grid'),
                    '.hero-card',
                    visibleItems
                );
            });

    
            // // Simulated hero data
            // const heroesData = [
            //     [
            //         {
            //             name: "Mẹ Bùi Thị Lảng",
            //             year: "Sinh năm 1926",
            //             location: "phường Hiệp An, TP.Thủ Dầu Một",
            //             image: "/api/placeholder/300/250"
            //         },
            //         {
            //             name: "Mẹ Nguyễn Thị Kéo",
            //             year: "Sinh năm 1925",
            //             location: "phường Hiệp An, TP.Thủ Dầu Một",
            //             image: "/api/placeholder/300/250"
            //         },
            //         {
            //             name: "Mẹ Trần Thị Tư",
            //             year: "Sinh năm 1940",
            //             location: "xã An Sơn, TX.Thuận An",
            //             image: "/api/placeholder/300/250"
            //         }
            //     ],
            //     // More pages of heroes would be added here
            //     [
            //         {
            //             name: "Mẹ Lê Thị Hoa",
            //             year: "Sinh năm 1930",
            //             location: "phường Phú Hòa, TP.Thủ Dầu Một",
            //             image: "/api/placeholder/300/250"
            //         },
            //         {
            //             name: "Mẹ Phạm Thị Mai",
            //             year: "Sinh năm 1928",
            //             location: "phường Phú Lợi, TP.Thủ Dầu Một",
            //             image: "/api/placeholder/300/250"
            //         },
            //         {
            //             name: "Mẹ Võ Thị Ngọc",
            //             year: "Sinh năm 1935",
            //             location: "xã Bình Nhâm, TX.Thuận An",
            //             image: "/api/placeholder/300/250"
            //         }
            //     ],
            //     // Additional pages for pagination simulation
            //     [], [], [], [], [], [], [], [], [], [], [], []
            // ];
    
            // // Pagination functionality
            // const paginationDots = document.querySelectorAll('.pagination-dot');
            // const heroesGrid = document.getElementById('heroes-grid');
            
            // paginationDots.forEach((dot, index) => {
            //     dot.addEventListener('click', () => {
            //         // Update active dot
            //         document.querySelector('.pagination-dot.active').classList.remove('active');
            //         dot.classList.add('active');
                    
            //         // Update heroes display
            //         if (heroesData[index] && heroesData[index].length > 0) {
            //             updateHeroesDisplay(heroesData[index]);
            //         } else {
            //             // Sample data for other pages
            //             updateHeroesDisplay([
            //                 {
            //                     name: "Mẹ Việt Nam Anh Hùng " + (index + 1),
            //                     year: "Sinh năm 19XX",
            //                     location: "Tỉnh/Thành phố",
            //                     image: "/api/placeholder/300/250"
            //                 },
            //                 {
            //                     name: "Mẹ Việt Nam Anh Hùng " + (index + 2),
            //                     year: "Sinh năm 19XX",
            //                     location: "Tỉnh/Thành phố",
            //                     image: "/api/placeholder/300/250"
            //                 },
            //                 {
            //                     name: "Mẹ Việt Nam Anh Hùng " + (index + 3),
            //                     year: "Sinh năm 19XX",
            //                     location: "Tỉnh/Thành phố",
            //                     image: "/api/placeholder/300/250"
            //                 }
            //             ]);
            //         }
            //     });
            // });
            
            // function updateHeroesDisplay(heroes) {
            //     heroesGrid.innerHTML = '';
            //     heroes.forEach(hero => {
            //         const heroCard = document.createElement('div');
            //         heroCard.className = 'hero-card';
            //         heroCard.innerHTML = `
            //             <img src="${hero.image}" alt="${hero.name}">
            //             <div class="hero-card-info">
            //                 <div class="hero-card-name">${hero.name}</div>
            //                 <div class="hero-card-year">${hero.year}</div>
            //                 <div class="hero-card-location">${hero.location}</div>
            //             </div>
            //         `;
            //         heroesGrid.appendChild(heroCard);
            //     });
            // }