<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'jobseeker') {
    echo "Unauthorized access.";
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT j.title, j.description, j.salary_range, j.job_type, j.location_type, j.culture, j.created_at
          FROM jobs j
          JOIN job_applications a ON j.id = a.job_id
          WHERE a.jobseeker_id = $user_id
          ORDER BY j.created_at DESC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selected Jobs | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg shadow-gray-100/50">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">
                    <span class="gradient-text">SkillHire</span>
                </h1>
                <div class="flex items-center space-x-6">
                    <a href="../jobseeker_dashboard.php" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="view_jobs.php" class="text-gray-600 hover:text-blue-600 font-medium">Browse Jobs</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-6 py-12">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Selected <span class="gradient-text">Jobs</span></h1>
                <p class="text-xl text-gray-600">Congratulations on your job selections!</p>
            </div>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <div class="space-y-6">
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="bg-gray-50 rounded-xl border border-gray-200 p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($row['title']) ?></h3>
                                    <p class="text-gray-500 mt-1">Posted on: <?= date('F j, Y', strtotime($row['created_at'])) ?></p>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span class="text-blue-600 font-medium"><?= htmlspecialchars($row['job_type']) ?></span>
                                    <span class="text-gray-500"><?= htmlspecialchars($row['location_type']) ?></span>
                                </div>
                            </div>

                            <?php if ($row['salary_range']): ?>
                                <div class="mb-4 inline-block px-4 py-1 bg-green-50 text-green-700 rounded-full text-sm">
                                    <?= htmlspecialchars($row['salary_range']) ?>
                                </div>
                            <?php endif; ?>

                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-lg font-medium text-gray-700 mb-2">Job Description</h4>
                                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                                </div>

                                <?php if ($row['culture']): ?>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-700 mb-2">Company Culture</h4>
                                        <p class="text-gray-600"><?= nl2br(htmlspecialchars($row['culture'])) ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-2xl text-gray-600 mb-2">No selections yet</p>
                    <p class="text-lg text-gray-500">Keep applying to jobs and showcasing your skills!</p>
                    <a href="view_jobs.php" 
                       class="mt-6 inline-block bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                        Browse Available Jobs
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>