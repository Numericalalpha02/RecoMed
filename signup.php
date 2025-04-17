<?php
$conn = new mysqli("localhost", "root", "", "patient");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Optional: Hash password for security
// $password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO patients (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
    // You can redirect: header("Location: index.html");
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
