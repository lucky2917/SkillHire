<?php
session_start();
require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Fetch user with matching email and role
$sql = "SELECT * FROM users WHERE email = '$email' AND role = '$role'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: index.php");
        exit;
    } else {
        header("Location: login.php?error=wrongpass");
        exit;
    }
} else {
    header("Location: login.php?error=notfound");
    exit;
}
?>