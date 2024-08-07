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
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Insert into database
$sql = "INSERT INTO users (first_name, last_name, gender, email, password) VALUES ('$first_name', '$last_name', '$gender', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to login page with alert
    echo "<script>
            alert('You have successfully signed up.');
            window.location.href = 'login.html';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
