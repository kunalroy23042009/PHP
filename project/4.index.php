<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "trip_db";

$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$dbCreate = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $dbCreate)) {
    die("Database creation failed: " . mysqli_error($conn));
}

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$tableSql = "CREATE TABLE IF NOT EXISTS trip (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age VARCHAR(20),
    gender VARCHAR(20),
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    other_info TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, $tableSql)) {
    die("Table creation failed: " . mysqli_error($conn));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, trim($_POST['name'] ?? ''));
    $age = mysqli_real_escape_string($conn, trim($_POST['age'] ?? ''));
    $gender = mysqli_real_escape_string($conn, trim($_POST['gender'] ?? ''));
    $email = mysqli_real_escape_string($conn, trim($_POST['email'] ?? ''));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone'] ?? ''));
    $other = mysqli_real_escape_string($conn, trim($_POST['other'] ?? ''));

    if ($name == '' || $email == '' || $phone == '') {
        echo "Please fill in the required fields.";
        exit;
    }

    $sql = "INSERT INTO trip (name, age, gender, email, phone, other_info)
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Form submitted successfully!'); window.location.href='1.index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>