<?php
session_start();
$entered_otp = $_POST['otp'];

if ($entered_otp == $_SESSION['otp']) {
    require 'config.php';

    $data = $_SESSION['signup_data'];
    $name = $data['name'];
    $email = $data['email'];
    $role = $data['role'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    // Save user
    $sql = "INSERT INTO users (name, email, password, role)
            VALUES ('$name', '$email', '$password', '$role')";
    $conn->query($sql);
    $user_id = $conn->insert_id;
    $_SESSION['user_id'] = $user_id;
$_SESSION['role'] = $role;

    // Clear OTP session
    unset($_SESSION['otp']);
    unset($_SESSION['signup_data']);
    header("Location: index.php");
    exit;
} else {
    echo "❌ Incorrect OTP!";
}
?>
