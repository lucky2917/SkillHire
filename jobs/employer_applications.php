<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    echo "Unauthorized access.";
    exit;
}

$employer_id = $_SESSION['user_id'];

$jobs_sql = "SELECT id, title FROM jobs WHERE employer_id = $employer_id";
$jobs_result = mysqli_query($conn, $jobs_sql) or die("Job Fetch Error: " . mysqli_error($conn));

$job_ids = [];
$job_titles = [];

while ($row = mysqli_fetch_assoc($jobs_result)) {
    $job_ids[] = $row['id'];
    $job_titles[$row['id']] = $row['title'];
}

$applications = [];

if (count($job_ids) > 0) {
    $job_ids_str = implode(',', $job_ids);
    $app_sql = "SELECT ja.job_id, ja.id AS application_id, ja.is_selected, u.name, u.email, jp.skills, jp.portfolio, jp.resume_link, jp.github, jp.linkedin, jp.tenth_marks, jp.twelfth_marks, jp.certifications, jp.bio, jp.projects
                FROM job_applications ja
                JOIN users u ON ja.jobseeker_id = u.id
                JOIN jobseeker_profiles jp ON jp.user_id = u.id
                WHERE ja.job_id IN ($job_ids_str)";
    $app_result = mysqli_query($conn, $app_sql) or die("Application Fetch Error: " . mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($app_result)) {
        $applications[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applications Received | SkillHire</title>
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
                    <a href="post_job.php" class="text-gray-600 hover:text-blue-600 font-medium">Post Job</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <?php if (isset($_GET['selected']) && $_GET['selected'] === 'success'): ?>
            <div class="mb-8 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl flex items-center">
                <span class="text-xl mr-2">Candidate successfully selected!</span>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Applications <span class="gradient-text">Received</span></h1>
                <p class="text-xl text-gray-600">Review and manage candidate applications</p>
            </div>

            <?php if (empty($applications)): ?>
                <div class="text-center py-12">
                    <p class="text-2xl text-gray-600 mb-2">No applications received yet</p>
                    <p class="text-lg text-gray-500">Post more jobs to attract candidates</p>
                    <a href="post_job.php" 
                       class="mt-6 inline-block bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                        Post a New Job
                    </a>
                </div>
            <?php else: ?>
                <div class="space-y-8">
                    <?php foreach ($applications as $app): ?>
                        <div class="bg-gray-50 rounded-xl border border-gray-200 p-6">
                            <div class="flex justify-between items-start mb-6">
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">
                                        <?= htmlspecialchars($job_titles[$app['job_id']]) ?>
                                    </h2>
                                    <h3 class="text-xl text-gray-700"><?= htmlspecialchars($app['name']) ?></h3>
                                    <p class="text-gray-600"><?= htmlspecialchars($app['email']) ?></p>
                                </div>
                                <?php if ($app['is_selected']): ?>
                                    <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                        Selected Candidate
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="grid md:grid-cols-2 gap-8">
                                <div class="space-y-6">
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

                                    <div>
                                        <h4 class="text-lg font-medium text-gray-700 mb-2">Education</h4>
                                        <div class="space-y-2">
                                            <p class="text-gray-600">10th Marks: <?= htmlspecialchars($app['tenth_marks']) ?></p>
                                            <p class="text-gray-600">12th Marks: <?= htmlspecialchars($app['twelfth_marks']) ?></p>
                                        </div>
                                    </div>

                                    <div>
                                        <h4 class="text-lg font-medium text-gray-700 mb-2">Links</h4>
                                        <div class="flex flex-wrap gap-4">
                                            <?php if ($app['portfolio']): ?>
                                                <a href="<?= htmlspecialchars($app['portfolio']) ?>" target="_blank"
                                                   class="flex items-center text-blue-600 hover:text-blue-700">
                                                    <span class="mr-1">Portfolio</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($app['resume_link']): ?>
                                                <a href="<?= htmlspecialchars($app['resume_link']) ?>" target="_blank"
                                                   class="flex items-center text-blue-600 hover:text-blue-700">
                                                    <span class="mr-1">Video Resume</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($app['github']): ?>
                                                <a href="<?= htmlspecialchars($app['github']) ?>" target="_blank"
                                                   class="flex items-center text-blue-600 hover:text-blue-700">
                                                    <span class="mr-1">GitHub</span>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($app['linkedin']): ?>
                                                <a href="<?= htmlspecialchars($app['linkedin']) ?>" target="_blank"
                                                   class="flex items-center text-blue-600 hover:text-blue-700">
                                                    <span class="mr-1">LinkedIn</span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    <?php if ($app['certifications']): ?>
                                        <div>
                                            <h4 class="text-lg font-medium text-gray-700 mb-2">Certifications</h4>
                                            <p class="text-gray-600"><?= nl2br(htmlspecialchars($app['certifications'])) ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($app['bio']): ?>
                                        <div>
                                            <h4 class="text-lg font-medium text-gray-700 mb-2">Bio</h4>
                                            <p class="text-gray-600"><?= nl2br(htmlspecialchars($app['bio'])) ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($app['projects']): ?>
                                        <div>
                                            <h4 class="text-lg font-medium text-gray-700 mb-2">Projects</h4>
                                            <p class="text-gray-600"><?= nl2br(htmlspecialchars($app['projects'])) ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if (!$app['is_selected']): ?>
                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <form action="select_candidate.php" method="POST">
                                        <input type="hidden" name="application_id" value="<?= $app['application_id'] ?>">
                                        <button type="submit" 
                                                class="bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                                            Select Candidate
                                        </button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>