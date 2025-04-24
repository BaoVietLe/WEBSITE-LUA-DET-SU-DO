document.addEventListener('DOMContentLoaded', function() {
    // Load header
    fetch('./Header_dự_án/Header_dự_án.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-container').innerHTML = data;
            initMobileMenu();
        });
    
    // Load footer
    fetch('./Footer/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        });
    });
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
    
            // Simulated hero data
            const heroesData = [
                [
                    {
                        name: "Mẹ Bùi Thị Lảng",
                        year: "Sinh năm 1926",
                        location: "phường Hiệp An, TP.Thủ Dầu Một",
                        image: "/api/placeholder/300/250"
                    },
                    {
                        name: "Mẹ Nguyễn Thị Kéo",
                        year: "Sinh năm 1925",
                        location: "phường Hiệp An, TP.Thủ Dầu Một",
                        image: "/api/placeholder/300/250"
                    },
                    {
                        name: "Mẹ Trần Thị Tư",
                        year: "Sinh năm 1940",
                        location: "xã An Sơn, TX.Thuận An",
                        image: "/api/placeholder/300/250"
                    }
                ],
                // More pages of heroes would be added here
                [
                    {
                        name: "Mẹ Lê Thị Hoa",
                        year: "Sinh năm 1930",
                        location: "phường Phú Hòa, TP.Thủ Dầu Một",
                        image: "/api/placeholder/300/250"
                    },
                    {
                        name: "Mẹ Phạm Thị Mai",
                        year: "Sinh năm 1928",
                        location: "phường Phú Lợi, TP.Thủ Dầu Một",
                        image: "/api/placeholder/300/250"
                    },
                    {
                        name: "Mẹ Võ Thị Ngọc",
                        year: "Sinh năm 1935",
                        location: "xã Bình Nhâm, TX.Thuận An",
                        image: "/api/placeholder/300/250"
                    }
                ],
                // Additional pages for pagination simulation
                [], [], [], [], [], [], [], [], [], [], [], []
            ];
    
            // Pagination functionality
            const paginationDots = document.querySelectorAll('.pagination-dot');
            const heroesGrid = document.getElementById('heroes-grid');
            
            paginationDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    // Update active dot
                    document.querySelector('.pagination-dot.active').classList.remove('active');
                    dot.classList.add('active');
                    
                    // Update heroes display
                    if (heroesData[index] && heroesData[index].length > 0) {
                        updateHeroesDisplay(heroesData[index]);
                    } else {
                        // Sample data for other pages
                        updateHeroesDisplay([
                            {
                                name: "Mẹ Việt Nam Anh Hùng " + (index + 1),
                                year: "Sinh năm 19XX",
                                location: "Tỉnh/Thành phố",
                                image: "/api/placeholder/300/250"
                            },
                            {
                                name: "Mẹ Việt Nam Anh Hùng " + (index + 2),
                                year: "Sinh năm 19XX",
                                location: "Tỉnh/Thành phố",
                                image: "/api/placeholder/300/250"
                            },
                            {
                                name: "Mẹ Việt Nam Anh Hùng " + (index + 3),
                                year: "Sinh năm 19XX",
                                location: "Tỉnh/Thành phố",
                                image: "/api/placeholder/300/250"
                            }
                        ]);
                    }
                });
            });
            
            function updateHeroesDisplay(heroes) {
                heroesGrid.innerHTML = '';
                heroes.forEach(hero => {
                    const heroCard = document.createElement('div');
                    heroCard.className = 'hero-card';
                    heroCard.innerHTML = `
                        <img src="${hero.image}" alt="${hero.name}">
                        <div class="hero-card-info">
                            <div class="hero-card-name">${hero.name}</div>
                            <div class="hero-card-year">${hero.year}</div>
                            <div class="hero-card-location">${hero.location}</div>
                        </div>
                    `;
                    heroesGrid.appendChild(heroCard);
                });
            }