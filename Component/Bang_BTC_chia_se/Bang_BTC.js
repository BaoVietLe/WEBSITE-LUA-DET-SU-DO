document.addEventListener('DOMContentLoaded', function() {
    // Load staff data from PHP/MySQL
    loadStaffData();
});

// Variables for carousel
let currentStaffIndex = 0;
let carouselInterval;
const autoPlayInterval = 5000; // 5 seconds per slide

function loadStaffData() {
    // AJAX call to get data from PHP backend
    fetch('Bang_BTC.php')
        .then(response => response.json())
        .then(data => {
            // Display first staff member by default
            if (data.length > 0) {
                window.staffData = data;
                displayStaffMember(data[0]);
                
                // Create carousel indicators based on number of staff members
                createCarouselIndicators(data.length);
                
                // Start auto-play carousel
                startCarousel();
            } else {
                console.error('No staff data returned from database');
                showErrorMessage('No staff data available');
            }
        })
        .catch(error => {
            console.error('Error fetching staff data:', error);
            showErrorMessage('Error loading staff data');
        });
}

function showErrorMessage(message) {
    document.querySelector('.profile-content').innerHTML = `
        <div style="text-align: center; width: 100%; padding: 30px;">
            <h3 style="color: #c42f2f;">${message}</h3>
            <p>Please check your database connection or contact administrator.</p>
        </div>
    `;
}

function displayStaffMember(staffMember) {
    const profileContent = document.querySelector('.profile-content');
    
    // Add fade-in effect
    profileContent.classList.remove('fade-in');
    void profileContent.offsetWidth; // Trigger reflow to restart animation
    profileContent.classList.add('fade-in');
    
    // Set all dynamic content from database
    document.getElementById('staff-image').src = staffMember.image_url || 'default_avatar.jpg';
    document.getElementById('staff-position-title').textContent = staffMember.position_title;
    document.getElementById('staff-name').textContent = staffMember.name;
    document.getElementById('staff-quote').textContent = '"' + staffMember.quote + '"';
    
    // Set the labels from database too
    document.getElementById('role-label').textContent = staffMember.role_label || 'CHỨC VỤ';
    document.getElementById('staff-role').textContent = staffMember.role;
    
    document.getElementById('phone-label').textContent = staffMember.phone_label || 'SỐ ĐIỆN THOẠI';
    document.getElementById('staff-phone').textContent = staffMember.phone;
    
    document.getElementById('email-label').textContent = staffMember.email_label || 'EMAIL LIÊN LẠC';
    document.getElementById('staff-email').textContent = staffMember.email;
    
    // Set button text from database
    document.getElementById('contact-button').textContent = staffMember.button_text || 'LIÊN HỆ';
    
    // Set custom button action if provided
    if (staffMember.button_action) {
        document.getElementById('contact-button').onclick = function() {
            window.location.href = staffMember.button_action;
        };
    } else {
        // Default action: mailto
        document.getElementById('contact-button').onclick = function() {
            window.location.href = 'mailto:' + staffMember.email;
        };
    }
}

function createCarouselIndicators(numStaff) {
    const indicatorsContainer = document.querySelector('.carousel-indicators');
    indicatorsContainer.innerHTML = '';
    
    for (let i = 0; i < numStaff; i++) {
        const indicator = document.createElement('li');
        if (i === 0) {
            indicator.classList.add('active');
        }
        indicator.dataset.index = i;
        indicator.addEventListener('click', function() {
            navigateToStaff(i);
            
            // Reset auto-play timer when user manually clicks
            restartCarousel();
        });
        indicatorsContainer.appendChild(indicator);
    }
}

function navigateToStaff(index) {
    if (window.staffData && window.staffData.length > index) {
        // Update current index
        currentStaffIndex = index;
        
        // Update active indicator
        document.querySelectorAll('.carousel-indicators li').forEach(function(indicator, i) {
            if (i === index) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
        
        // Display selected staff member
        displayStaffMember(window.staffData[index]);
    }
}

function startCarousel() {
    // Clear any existing interval first
    if (carouselInterval) {
        clearInterval(carouselInterval);
    }
    
    // Set interval for auto carousel
    carouselInterval = setInterval(function() {
        goToNextStaff();
    }, autoPlayInterval);
}

function restartCarousel() {
    // Restart autoplay timer when user manually navigates
    if (carouselInterval) {
        clearInterval(carouselInterval);
    }
    startCarousel();
}

function goToNextStaff() {
    if (window.staffData && window.staffData.length > 0) {
        // Move to next staff member, loop back to beginning if at end
        let nextIndex = currentStaffIndex + 1;
        if (nextIndex >= window.staffData.length) {
            nextIndex = 0;
        }
        
        // Navigate to that staff member
        navigateToStaff(nextIndex);
    }
}

// Pause carousel when hovering over profile card
document.querySelector('.profile-card').addEventListener('mouseenter', function() {
    if (carouselInterval) {
        clearInterval(carouselInterval);
    }
});

// Resume carousel when mouse leaves profile card
document.querySelector('.profile-card').addEventListener('mouseleave', function() {
    startCarousel();
});