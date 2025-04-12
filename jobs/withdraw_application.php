<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'jobseeker') {
    echo "Unauthorized access.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['job_id'])) {
    $job_id = (int)$_POST['job_id'];
    $jobseeker_id = $_SESSION['user_id'];

    $sql = "DELETE FROM job_applications WHERE job_id = $job_id AND jobseeker_id = $jobseeker_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../jobseeker_dashboard.php?withdrawn=success");
        exit;
    } else {
        echo "Failed to withdraw application: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}