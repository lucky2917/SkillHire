<?php
// Start the session and include configuration
session_start();
require '../config.php';

// Restrict access to only employers
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    echo "Unauthorized access.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post a New Job | SkillHire</title>
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
    <!-- Navigation Bar with links to Dashboard and Back to Jobs -->
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

    <!-- Main section for creating a new job posting -->
    <div class="min-h-screen py-12 px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Post a New <span class="gradient-text">Job</span></h1>
                <p class="text-xl text-gray-600">Create an attractive job posting to find the perfect candidate</p>
            </div>

            <!-- Job Posting Form -->
            <form action="save_job.php" method="POST" class="space-y-8">
                <input type="hidden" name="employer_id" value="<?= $_SESSION['user_id'] ?>">

                <!-- Job Title Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Job Title</label>
                    <input type="text" name="title" required
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           placeholder="e.g., Senior Software Engineer">
                </div>

                <!-- Job Description Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Job Description</label>
                    <textarea name="description" rows="4" required
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                              placeholder="Describe the role, responsibilities, and requirements"></textarea>
                </div>

                <!-- Sample Task Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Sample Task</label>
                    <textarea name="sample_task" rows="3" required
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                              placeholder="Provide a sample task or challenge for candidates"></textarea>
                </div>

                <!-- Job Type and Location Type Fields -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-lg font-medium text-gray-700 mb-2">Job Type</label>
                        <select name="job_type" 
                                class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            <option>Full-time</option>
                            <option>Part-time</option>
                            <option>Internship</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-lg font-medium text-gray-700 mb-2">Location Type</label>
                        <select name="location_type" 
                                class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            <option>Remote</option>
                            <option>On-site</option>
                            <option>Hybrid</option>
                        </select>
                    </div>
                </div>

                <!-- Salary Range Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Salary Range</label>
                    <input type="text" name="salary_range" 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           placeholder="e.g., $80,000 - $120,000">
                </div>

                <!-- Required Skills Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Required Skills</label>
                    <input type="text" name="required_skills" required
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           placeholder="e.g., JavaScript, React, Node.js">
                </div>

                <!-- Company Culture Field -->
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Company Culture</label>
                    <textarea name="culture" rows="3"
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                              placeholder="Describe your company culture and values"></textarea>
                </div>

                <!-- Form Actions: Cancel and Submit -->
                <div class="flex gap-4 pt-6">
                    <a href="post_jobs.php" 
                       class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors text-center">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                        Post Job
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>