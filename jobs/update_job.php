<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    echo "Unauthorized access.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = (int) $_POST['job_id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $sample_task = mysqli_real_escape_string($conn, $_POST['sample_task']);
    $salary_range = mysqli_real_escape_string($conn, $_POST['salary_range']);
    $job_type = mysqli_real_escape_string($conn, $_POST['job_type']);
    $location_type = mysqli_real_escape_string($conn, $_POST['location_type']);
    $culture = mysqli_real_escape_string($conn, $_POST['culture']);
    $required_skills = mysqli_real_escape_string($conn, $_POST['required_skills']);
    $employer_id = $_SESSION['user_id'];

    $sql = "UPDATE jobs SET title=?, description=?, sample_task=?, salary_range=?, job_type=?, location_type=?, culture=?, required_skills=? 
            WHERE id=? AND employer_id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssii", $title, $description, $sample_task, $salary_range, $job_type, $location_type, $culture, $required_skills, $job_id, $employer_id);

    if ($stmt->execute()) {
        header("Location: ../employer_dashboard.php?updated=success");
        exit;
    } else {
        echo "Failed to update job: " . $stmt->error;
    }
} else {
    echo "Invalid request.";
}
?>