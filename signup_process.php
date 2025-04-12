<?php
require 'config.php';
session_start();

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

// 1️⃣ Check for existing email
$check_query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $check_query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$check_result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($check_result) > 0) {
    // 2️⃣ Redirect to signup with error
    header("Location: signup.php?error=exists");
    exit;
}

// 3️⃣ Insert new user
$insert_query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $insert_query);
mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $role);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['role'] = $role;

    header("Location: index.php");
    exit;
} else {
    echo "❌ Signup failed. Please try again.";
}
?>

