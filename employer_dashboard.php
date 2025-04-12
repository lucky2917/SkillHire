<?php

session_start();

require 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {

echo "❌ You are not logged in.";

exit;

}

$user_id = $_SESSION['user_id'];

// Get user details

$user_sql = "SELECT name, email FROM users WHERE id = $user_id";

$user_result = mysqli_query($conn, $user_sql);

$user = mysqli_fetch_assoc($user_result);

// Get employer profile

$profile_sql = "SELECT * FROM employer_profiles WHERE user_id = $user_id";

$profile_result = mysqli_query($conn, $profile_sql);

$profile = mysqli_fetch_assoc($profile_result);
// Fetch posted jobs
$job_sql = "SELECT * FROM jobs WHERE employer_id = $user_id ORDER BY created_at DESC";
$job_result = mysqli_query($conn, $job_sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employer Dashboard | SkillHire</title>
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
                    <a href="index.php" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                    <a href="logout.php" class="text-red-600 hover:text-red-700 font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-12">
        <!-- Profile Section -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10 mb-10">
            <h2 class="text-4xl font-bold mb-8">Welcome, <span class="gradient-text"><?= htmlspecialchars($profile['company_name']) ?></span></h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Your Name</h3>
                        <p class="text-lg text-gray-700"><?= htmlspecialchars($user['name']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Email</h3>
                        <p class="text-lg text-gray-700"><?= htmlspecialchars($user['email']) ?></p>
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Company Website</h3>
                        <a href="<?= htmlspecialchars($profile['website']) ?>" target="_blank" 
                           class="text-lg text-blue-600 hover:text-blue-700"><?= htmlspecialchars($profile['website']) ?></a>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">About Company</h3>
                        <p class="text-lg text-gray-700"><?= htmlspecialchars($profile['about']) ?></p>
                    </div>
                </div>
            </div>

            <!-- Update Profile Button -->
            <div class="mt-10 flex justify-center">
                <a href="create_employer_profile.php?edit=true" 
                   class="inline-block bg-blue-600 text-white text-lg font-medium px-8 py-3 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Update Profile
                </a>
            </div>

            <?php if (isset($_GET['error']) && $_GET['error'] == 'profile_exists'): ?>
                <div class="mt-6 p-4 bg-yellow-50 text-yellow-800 rounded-xl text-lg">
                    ⚠️ You already have a profile.
                </div>
            <?php endif; ?>
        </div>

        <!-- Posted Jobs Section -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-3xl font-bold">Posted Jobs</h3>
                <a href="jobs/post_job.php" 
                   class="bg-blue-600 text-white text-lg font-medium px-6 py-2 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Post New Job
                </a>
            </div>

            <?php if ($job_result->num_rows > 0): ?>
                <div class="space-y-6">
                    <?php while ($job = $job_result->fetch_assoc()): ?>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h4 class="text-2xl font-bold text-gray-900 mb-4"><?= htmlspecialchars($job['title']) ?></h4>
                            <p class="text-lg text-gray-700 mb-4"><?= nl2br(htmlspecialchars($job['description'])) ?></p>
                            
                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <span class="font-medium text-gray-900">Job Type:</span>
                                    <span class="text-gray-700"><?= htmlspecialchars($job['job_type']) ?></span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Location:</span>
                                    <span class="text-gray-700"><?= htmlspecialchars($job['location_type']) ?></span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Salary Range:</span>
                                    <span class="text-gray-700"><?= htmlspecialchars($job['salary_range']) ?></span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Posted:</span>
                                    <span class="text-gray-700"><?= date("F j, Y", strtotime($job['created_at'])) ?></span>
                                </div>
                            </div>

                            <div>
                                <span class="font-medium text-gray-900">Required Skills:</span>
                                <span class="text-gray-700"><?= htmlspecialchars($job['required_skills']) ?></span>
                            </div>

                            <div class="mt-6 flex gap-4">
                                <a href="jobs/view_applications.php?job_id=<?= $job['id'] ?>" 
                                   class="text-blue-600 hover:text-blue-700 font-medium">
                                    View Applicants
                                </a>
                                <a href="jobs/edit_job.php?job_id=<?= $job['id'] ?>" 
                                   class="text-blue-600 hover:text-blue-700 font-medium">
                                    Edit Job
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p class="text-xl text-gray-600 text-center py-10">You haven't posted any jobs yet.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>