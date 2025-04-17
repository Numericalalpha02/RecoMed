<?php
$conn = new mysqli("localhost", "root", "", "patient");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM patients WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "✅ Login successful!";
    // Redirect to dashboard: header("Location: dashboard.php");
} else {
    echo "❌ Invalid email or password.";
}

$conn->close();
?>
