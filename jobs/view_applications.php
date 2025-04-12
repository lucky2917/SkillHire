<?php
session_start();
require '../config.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Authentication check
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    header("Location: ../login.php");
    exit;
}

$job_id = $_GET['job_id'] ?? null;
$employer_id = $_SESSION['user_id'];

if (!$job_id) {
    header("Location: post_jobs.php");
    exit;
}

// Verify job belongs to employer
$job_check = mysqli_prepare($conn, "SELECT title FROM jobs WHERE id = ? AND employer_id = ?");
if (!$job_check) {
    die("Query Preparation Failed: " . mysqli_error($conn));
}
mysqli_stmt_bind_param($job_check, "ii", $job_id, $employer_id);
if (!mysqli_stmt_execute($job_check)) {
    die("Query Execution Failed: " . mysqli_stmt_error($job_check));
}
$job_result = mysqli_stmt_get_result($job_check);
if (!$job_result) {
    die("Result Fetch Failed: " . mysqli_error($conn));
}
$job = mysqli_fetch_assoc($job_result);

if (!$job) {
    echo "<div style='padding: 20px; text-align:center; font-size: 18px; color: red;'>❌ Job not found or you are not authorized to view its applications.</div>";
    exit;
}

// Fetch applicants with prepared statement
$query = "SELECT ja.id AS application_id, ja.is_selected, ja.applied_at,
                 u.id AS user_id, u.name, u.email, 
                 jp.skills, jp.portfolio, jp.resume_link
          FROM job_applications ja
          JOIN users u ON ja.jobseeker_id = u.id
          LEFT JOIN jobseeker_profiles jp ON jp.user_id = u.id
          WHERE ja.job_id = ?
          ORDER BY ja.applied_at DESC";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $job_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applications for <?= htmlspecialchars($job['title'] ?? 'Job') ?> | SkillHire</title>
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
    <!-- Navigation -->
    <nav class="bg-white shadow-lg shadow-gray-100/50">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">
                    <span class="gradient-text">SkillHire</span>
                </h1>
                <div class="flex items-center space-x-6">
                    <a href="post_jobs.php" class="text-gray-600 hover:text-blue-600 font-medium">Back to Jobs</a>
                    <a href="../employer_dashboard.php" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Applications for <span class="gradient-text"><?= htmlspecialchars($job['title'] ?? 'Job') ?></span></h1>
                <p class="text-xl text-gray-600">Review and manage candidate applications</p>
            </div>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <div class="space-y-6">
                    <?php while ($app = mysqli_fetch_assoc($result)): ?>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 relative">
                            <?php if ($app['is_selected']): ?>
                                <div class="absolute top-4 right-4">
                                    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                        ✓ Selected Candidate
                                    </span>
                                </div>
                            <?php endif; ?>

                            <div class="mb-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($app['name']) ?></h3>
                                <p class="text-lg text-gray-600"><?= htmlspecialchars($app['email']) ?></p>
                                <p class="text-sm text-gray-500 mt-2">Applied: <?= date('F j, Y', strtotime($app['applied_at'])) ?></p>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <?php if ($app['skills']): ?>
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-700 mb-2">Skills</h4>
                                        <div class="flex flex-wrap gap-2">
                                            <?php foreach (explode(',', $app['skills']) as $skill): ?>
                                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">
                                                    <?= trim(htmlspecialchars($skill)) ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div>
                                    <h4 class="text-lg font-medium text-gray-700 mb-2">Links</h4>
                                    <div class="space-y-2">
                                        <?php if ($app['portfolio']): ?>
                                            <a href="<?= htmlspecialchars($app['portfolio']) ?>" target="_blank"
                                               class="block text-blue-600 hover:text-blue-700">
                                                📂 Portfolio
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($app['resume_link']): ?>
                                            <a href="<?= htmlspecialchars($app['resume_link']) ?>" target="_blank"
                                               class="block text-blue-600 hover:text-blue-700">
                                                📄 Resume
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <?php if (!$app['is_selected']): ?>
                                <div id="select-status-<?= $app['application_id'] ?>" class="mt-6 pt-6 border-t border-gray-200">
                                    <button onclick="selectCandidate(<?= $job_id ?>, <?= $app['user_id'] ?>, <?= $app['application_id'] ?>)"
                                            class="bg-blue-600 text-white text-lg font-medium py-2 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                        Select Candidate
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600 mb-2">No applications yet</p>
                    <p class="text-lg text-gray-500">Check back later for new applications</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
    function selectCandidate(jobId, jobseekerId, applicationId) {
        if (!confirm('Are you sure you want to select this candidate?')) {
            return;
        }

        const formData = new FormData();
        formData.append('job_id', jobId);
        formData.append('jobseeker_id', jobseekerId);
        formData.append('application_id', applicationId);

        fetch('select_candidate.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(() => {
            location.reload(); // Reload to show updated status
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Failed to select candidate. Please try again.");
        });
    }
    </script>
</body>
</html>