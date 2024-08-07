<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check user credentials
$sql = "SELECT password FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "<script>alert('Login successful'); window.location.href = 'welcome.html';</script>";
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href = 'login.html';</script>";
    }
} else {
    echo "<script>alert('No user found with this email'); window.location.href = 'login.html';</script>";
}

$conn->close();
?>
