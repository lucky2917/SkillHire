<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['application_id'])) {
    $applicationId = (int)$_POST['application_id'];

    $update = mysqli_query($conn, "UPDATE job_applications SET is_selected = 1 WHERE id = $applicationId");

    if ($update) {
        header("Location: employer_applications.php?selected=success");
        exit;
    } else {
        echo "Failed to select candidate: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>