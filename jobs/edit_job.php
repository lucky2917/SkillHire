<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    echo "Unauthorized access.";
    exit;
}

if (!isset($_GET['job_id'])) {
    echo "Job ID missing.";
    exit;
}

$job_id = (int) $_GET['job_id'];
$user_id = $_SESSION['user_id'];

// Fetch job details
$sql = "SELECT * FROM jobs WHERE id = ? AND employer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $job_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Job not found or access denied.";
    exit;
}

$job = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Job | SkillHire</title>
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
                    <a href="post_jobs.php" class="text-gray-600 hover:text-blue-600 font-medium">Back to Jobs</a>
                    <a href="../employer_dashboard.php" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="min-h-screen py-12 px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Edit <span class="gradient-text">Job Posting</span></h1>
                <p class="text-xl text-gray-600">Update your job listing details</p>
            </div>

            <form action="update_job.php" method="POST" class="space-y-8">
                <input type="hidden" name="job_id" value="<?= $job['id'] ?>">

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Job Title</label>
                    <input type="text" name="title" value="<?= htmlspecialchars($job['title']) ?>" 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           required>
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Job Description</label>
                    <textarea name="description" rows="4" required
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($job['description']) ?></textarea>
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Sample Task</label>
                    <textarea name="sample_task" rows="3" required
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($job['sample_task']) ?></textarea>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-lg font-medium text-gray-700 mb-2">Job Type</label>
                        <select name="job_type" 
                                class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            <option <?= $job['job_type'] == 'Full-time' ? 'selected' : '' ?>>Full-time</option>
                            <option <?= $job['job_type'] == 'Part-time' ? 'selected' : '' ?>>Part-time</option>
                            <option <?= $job['job_type'] == 'Internship' ? 'selected' : '' ?>>Internship</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-lg font-medium text-gray-700 mb-2">Location Type</label>
                        <select name="location_type" 
                                class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            <option <?= $job['location_type'] == 'Remote' ? 'selected' : '' ?>>Remote</option>
                            <option <?= $job['location_type'] == 'On-site' ? 'selected' : '' ?>>On-site</option>
                            <option <?= $job['location_type'] == 'Hybrid' ? 'selected' : '' ?>>Hybrid</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Salary Range</label>
                    <input type="text" name="salary_range" value="<?= htmlspecialchars($job['salary_range']) ?>" 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Required Skills</label>
                    <input type="text" name="required_skills" value="<?= htmlspecialchars($job['required_skills']) ?>"
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           required>
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Company Culture</label>
                    <textarea name="culture" rows="3"
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($job['culture']) ?></textarea>
                </div>

                <div class="flex gap-4 pt-6">
                    <a href="post_jobs.php" 
                       class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors text-center">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                        Update Job
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>