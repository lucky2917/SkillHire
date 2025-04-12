<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    echo "Unauthorized access.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posted Jobs | SkillHire</title>
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
                    <a href="../employer_dashboard.php" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="../logout.php" class="text-red-600 hover:text-red-700 font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-4xl font-bold mb-2">Your Posted <span class="gradient-text">Jobs</span></h1>
                    <p class="text-xl text-gray-600">Manage all your job listings in one place</p>
                </div>
                <a href="create_job.php" 
                   class="bg-blue-600 text-white text-lg font-medium px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30 flex items-center">
                    <span class="mr-2">+</span> Post New Job
                </a>
            </div>

            <?php
            $employer_id = $_SESSION['user_id'];
            $stmt = $conn->prepare("SELECT * FROM jobs WHERE employer_id = ? ORDER BY created_at DESC");
            $stmt->bind_param("i", $employer_id);
            $stmt->execute();
            $jobs_result = $stmt->get_result();

            if ($jobs_result && $jobs_result->num_rows > 0): ?>
                <div class="space-y-6">
                    <?php while ($job = $jobs_result->fetch_assoc()): ?>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($job['title']) ?></h3>
                                <span class="px-4 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                    <?= htmlspecialchars($job['job_type']) ?>
                                </span>
                            </div>

                            <p class="text-lg text-gray-700 mb-6"><?= nl2br(htmlspecialchars($job['description'])) ?></p>
                            
                            <div class="grid md:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <span class="font-medium text-gray-900">Location:</span>
                                    <span class="text-gray-700"><?= htmlspecialchars($job['location_type']) ?></span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Salary Range:</span>
                                    <span class="text-gray-700"><?= htmlspecialchars($job['salary_range']) ?></span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <span class="font-medium text-gray-900">Required Skills:</span>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <?php foreach (explode(',', $job['required_skills']) as $skill): ?>
                                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">
                                            <?= trim(htmlspecialchars($skill)) ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-200">
                                <span class="text-gray-500">
                                    Posted: <?= date('d M Y, h:i A', strtotime($job['created_at'])) ?>
                                </span>
                                <div class="flex gap-4">
                                    <a href="edit_job.php?id=<?= $job['id'] ?>" 
                                       class="text-blue-600 hover:text-blue-700 font-medium">Edit Job</a>
                                    <a href="view_applications.php?job_id=<?= $job['id'] ?>" 
                                       class="text-blue-600 hover:text-blue-700 font-medium">View Applications</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600 mb-6">You haven't posted any jobs yet.</p>
                    <p class="text-lg text-gray-500">Create your first job posting to start finding talent!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>