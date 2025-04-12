<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | SkillHire</title>
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
    <?php
    session_start();
    require 'config.php';

    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'jobseeker') {
        echo "Unauthorized access.";
        exit;
    }

    $user_id = $_SESSION['user_id'];

    // Fetch user details
    $user_query = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
    $user = mysqli_fetch_assoc($user_query);

    // Fetch jobseeker profile details
    $profile_query = mysqli_query($conn, "SELECT * FROM jobseeker_profiles WHERE user_id = $user_id");
    $profile = mysqli_fetch_assoc($profile_query);
    if (!$profile) {
        $profile = [
            'skills' => '',
            'portfolio' => '',
            'resume_link' => '',
            'github' => '',
            'linkedin' => '',
            'tenth_marks' => '',
            'twelfth_marks' => '',
            'certifications' => '',
            'bio' => '',
            'projects' => ''
        ];
    }

    // Fetch applied jobs
    $applied_sql = "SELECT jobs.* FROM jobs 
                    JOIN job_applications ON jobs.id = job_applications.job_id 
                    WHERE job_applications.jobseeker_id = $user_id";
    $applied_result = mysqli_query($conn, $applied_sql);
    ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg shadow-gray-100/50">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">
                    <span class="gradient-text">SkillHire</span>
                </h1>
                <div class="flex items-center space-x-6">
                    <a href="jobs/view_jobs.php" class="text-gray-600 hover:text-blue-600 font-medium">View Jobs</a>
                    <a href="index.php" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                    <a href="logout.php" class="text-red-600 hover:text-red-700 font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-12">
        <!-- Profile Section -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10 mb-10">
            <h2 class="text-4xl font-bold mb-8">Welcome, <span class="gradient-text"><?= htmlspecialchars($user['name']) ?></span></h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Personal Info -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Email</h3>
                        <p class="text-lg text-gray-700"><?= htmlspecialchars($user['email']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Skills</h3>
                        <p class="text-lg text-gray-700 break-words"><?= htmlspecialchars($profile['skills'] ?? 'Not updated yet') ?></p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Bio</h3>
                        <p class="text-lg text-gray-700 break-words"><?= htmlspecialchars($profile['bio'] ?? 'Not provided yet') ?></p>
                    </div>
                </div>

                <!-- Links & Education -->
                <div class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Portfolio</h3>
                            <?= !empty($profile['portfolio']) ? 
                                '<a href="' . htmlspecialchars($profile['portfolio']) . '" target="_blank" class="text-lg text-blue-600 hover:text-blue-700">' . htmlspecialchars($profile['portfolio']) . '</a>' : 
                                '<p class="text-lg text-gray-500">Not provided yet</p>' ?>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">GitHub</h3>
                            <?= !empty($profile['github']) ? 
                                '<a href="' . htmlspecialchars($profile['github']) . '" target="_blank" class="text-lg text-blue-600 hover:text-blue-700">' . htmlspecialchars($profile['github']) . '</a>' : 
                                '<p class="text-lg text-gray-500">Not provided yet</p>' ?>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">LinkedIn</h3>
                            <?= !empty($profile['linkedin']) ? 
                                '<a href="' . htmlspecialchars($profile['linkedin']) . '" target="_blank" class="text-lg text-blue-600 hover:text-blue-700">' . htmlspecialchars($profile['linkedin']) . '</a>' : 
                                '<p class="text-lg text-gray-500">Not provided yet</p>' ?>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Video Resume</h3>
                            <?= !empty($profile['resume_link']) ? 
                                '<a href="' . htmlspecialchars($profile['resume_link']) . '" target="_blank" class="text-lg text-blue-600 hover:text-blue-700">View Resume</a>' : 
                                '<p class="text-lg text-gray-500">Not provided yet</p>' ?>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">10th Marks</h3>
                            <p class="text-lg text-gray-700"><?= htmlspecialchars($profile['tenth_marks'] ?? 'Not provided yet') ?></p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">12th Marks</h3>
                            <p class="text-lg text-gray-700"><?= htmlspecialchars($profile['twelfth_marks'] ?? 'Not provided yet') ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Profile Button -->
            <div class="mt-10 flex justify-center">
                <a href="create_jobseeker_profile.php" 
                   class="inline-block bg-blue-600 text-white text-lg font-medium px-8 py-3 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Update Profile
                </a>
            </div>
        </div>

        <!-- Applied Jobs Section -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <h3 class="text-3xl font-bold mb-8">Applied Jobs</h3>
            
            <?php if (mysqli_num_rows($applied_result) > 0): ?>
                <div class="space-y-6">
                    <?php while ($job = mysqli_fetch_assoc($applied_result)): ?>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h4 class="text-xl font-semibold text-gray-900 mb-2"><?= htmlspecialchars($job['title']) ?></h4>
                            <p class="text-lg text-gray-700 mb-4"><?= htmlspecialchars($job['description']) ?></p>
                            <form action="jobs/withdraw_application.php" method="POST">
                                <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-700 font-medium text-lg">
                                    Withdraw Application
                                </button>
                            </form>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p class="text-xl text-gray-600">You haven't applied to any jobs yet.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>