<?php
// Start the session and include database configuration
session_start();
require '../config.php';

// Ensure the user is logged in as a jobseeker
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'jobseeker') {
    echo "Unauthorized access.";
    exit;
}

// Get the job ID from the URL and jobseeker ID from the session
$job_id = $_GET['job_id'] ?? null;
$jobseeker_id = $_SESSION['user_id'];

if ($job_id) {
    // Check if the jobseeker has already applied for this job
    $check = mysqli_query($conn, "SELECT * FROM job_applications WHERE job_id = $job_id AND jobseeker_id = $jobseeker_id");
    if (mysqli_num_rows($check) > 0) {
        $redirect = '../jobs/view_jobs.php' . (isset($_GET['filter']) && $_GET['filter'] === 'skills' ? '?filter=skills&applied=already' : '?applied=already');
        header("Location: $redirect");
        exit;
    }

    // If not already applied, insert the new job application
    $apply = mysqli_query($conn, "INSERT INTO job_applications (job_id, jobseeker_id) VALUES ($job_id, $jobseeker_id)");
    if ($apply) {
        // Redirect back to view_jobs with appropriate success or filtered message
        $redirect = '../jobs/view_jobs.php' . (isset($_GET['filter']) && $_GET['filter'] === 'skills' ? '?filter=skills&applied=success' : '?applied=success');
        header("Location: $redirect");
    } else {
        // Show error if application insert fails
        echo "Application failed: " . mysqli_error($conn);
    }
}
?>