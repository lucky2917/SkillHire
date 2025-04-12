<?php
session_start();
require 'config.php';

$user_id = $_POST['user_id'];
$company_name = $_POST['company_name'];
$website = $_POST['website'];
$about = $_POST['about'];

// Check if employer already has a profile
$check = mysqli_query($conn, "SELECT * FROM employer_profiles WHERE user_id = '$user_id'");

if (mysqli_num_rows($check) > 0) {
    // Update existing profile
    $sql = "UPDATE employer_profiles 
            SET company_name = '$company_name',
                website = '$website',
                about = '$about'
            WHERE user_id = '$user_id'";
} else {
    // Insert new profile
    $sql = "INSERT INTO employer_profiles (user_id, company_name, website, about)
            VALUES ('$user_id', '$company_name', '$website', '$about')";
}

if (mysqli_query($conn, $sql)) {
    $_SESSION['user_id'] = $user_id;
    $_SESSION['role'] = 'employer';
    header("Location: employer_dashboard.php");
} else {
    echo "Failed to save profile: " . mysqli_error($conn);
}
?>