<?php
session_start();
require '../config.php';

if (!isset($_POST['title'], $_POST['description'], $_POST['sample_task'], $_POST['employer_id'])) {
    echo "Missing required fields.";
    exit;
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$sample_task = mysqli_real_escape_string($conn, $_POST['sample_task']);
$salary_range = mysqli_real_escape_string($conn, $_POST['salary_range']);
$job_type = mysqli_real_escape_string($conn, $_POST['job_type']);
$location_type = mysqli_real_escape_string($conn, $_POST['location_type']);
$culture = mysqli_real_escape_string($conn, $_POST['culture']);
$required_skills = mysqli_real_escape_string($conn, $_POST['required_skills']);
$employer_id = (int) $_POST['employer_id'];

$sql = "INSERT INTO jobs (employer_id, title, description, sample_task, salary_range, job_type, location_type, culture, required_skills)
        VALUES ('$employer_id', '$title', '$description', '$sample_task', '$salary_range', '$job_type', '$location_type', '$culture', '$required_skills')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../employer_dashboard.php?posted=success");
    exit;
} else {
    echo "Failed to post job: " . mysqli_error($conn);
}
?>