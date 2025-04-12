<?php
session_start();
require 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user_id from session (reliable source)
$user_id = $_SESSION['user_id'];

// Sanitize input data
$skills = mysqli_real_escape_string($conn, $_POST['skills'] ?? '');
$portfolio = mysqli_real_escape_string($conn, $_POST['portfolio'] ?? '');
$resume_link = mysqli_real_escape_string($conn, $_POST['resume_link'] ?? '');
$github = mysqli_real_escape_string($conn, $_POST['github'] ?? '');
$linkedin = mysqli_real_escape_string($conn, $_POST['linkedin'] ?? '');
$tenth_marks = mysqli_real_escape_string($conn, $_POST['tenth_marks'] ?? '');
$twelfth_marks = mysqli_real_escape_string($conn, $_POST['twelfth_marks'] ?? '');
$certifications = mysqli_real_escape_string($conn, $_POST['certifications'] ?? '');
$bio = mysqli_real_escape_string($conn, $_POST['bio'] ?? '');
$projects = mysqli_real_escape_string($conn, $_POST['projects'] ?? '');

// Check if a profile already exists
$check_sql = "SELECT id FROM jobseeker_profiles WHERE user_id = ?";
$check_stmt = mysqli_prepare($conn, $check_sql);
mysqli_stmt_bind_param($check_stmt, "i", $user_id);
mysqli_stmt_execute($check_stmt);
mysqli_stmt_store_result($check_stmt);

if (mysqli_stmt_num_rows($check_stmt) > 0) {
    // Update existing profile
    $update_sql = "UPDATE jobseeker_profiles SET 
        skills = ?, portfolio = ?, resume_link = ?, github = ?, linkedin = ?, 
        tenth_marks = ?, twelfth_marks = ?, certifications = ?, bio = ?, projects = ?
        WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $update_sql);
    mysqli_stmt_bind_param($stmt, "ssssssssssi", 
        $skills, $portfolio, $resume_link, $github, $linkedin,
        $tenth_marks, $twelfth_marks, $certifications, $bio, $projects, $user_id
    );
} else {
    // Insert new profile
    $insert_sql = "INSERT INTO jobseeker_profiles 
        (user_id, skills, portfolio, resume_link, github, linkedin, 
        tenth_marks, twelfth_marks, certifications, bio, projects)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insert_sql);
    mysqli_stmt_bind_param($stmt, "issssssssss", 
        $user_id, $skills, $portfolio, $resume_link, $github, $linkedin,
        $tenth_marks, $twelfth_marks, $certifications, $bio, $projects
    );
}
mysqli_stmt_close($check_stmt);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    $_SESSION['success_message'] = "Profile saved successfully!";
    header("Location: jobseeker_dashboard.php");
    exit();
} else {
    mysqli_stmt_close($stmt);
    $_SESSION['error_message'] = "Error saving profile.";
    header("Location: create_jobseeker_profile.php");
    exit();
}
?>