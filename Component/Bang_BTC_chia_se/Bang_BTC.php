<?php
// get_staff_data.php
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Return error as JSON
    echo json_encode([
        'error' => 'Connection failed: ' . $conn->connect_error
    ]);
    exit;
}

// Set character set to utf8
$conn->set_charset("utf8");

// Query to get all staff members with all fields
$sql = "SELECT 
            id,
            name,
            position_title,
            quote,
            role,
            role_label,
            phone,
            phone_label,
            email,
            email_label,
            button_text,
            button_action,
            image_url
        FROM staff_profiles
        ORDER BY display_order ASC";

$result = $conn->query($sql);

$staff = [];

if ($result->num_rows > 0) {
    // Fetch all staff members
    while($row = $result->fetch_assoc()) {
        $staff[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'position_title' => $row['position_title'],
            'quote' => $row['quote'],
            'role' => $row['role'],
            'role_label' => $row['role_label'],
            'phone' => $row['phone'],
            'phone_label' => $row['phone_label'],
            'email' => $row['email'],
            'email_label' => $row['email_label'],
            'button_text' => $row['button_text'],
            'button_action' => $row['button_action'],
            'image_url' => $row['image_url']
        ];
    }
}

// Close connection
$conn->close();

// Return JSON response
echo json_encode($staff);
?>