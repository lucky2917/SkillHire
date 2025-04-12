<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Profile | SkillHire</title>
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
    <div class="min-h-screen py-12 px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Create Your <span class="gradient-text">Profile</span></h1>
                <p class="text-xl text-gray-600">Complete your profile to start applying for jobs</p>
            </div>

            <form action="save_jobseeker_profile.php" method="POST">
                <?php
                    require 'config.php';
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT * FROM jobseeker_profiles WHERE user_id = '$user_id'";
                    $result = mysqli_query($conn, $query);
                    $profile = mysqli_fetch_assoc($result);
                ?>
                <div class="space-y-8">
                    <!-- Personal Information -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Personal Information</h2>
                        
                        <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2">Skills (comma separated)</label>
                            <input type="text" name="skills" value="<?= htmlspecialchars($profile['skills'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2">Bio</label>
                            <textarea name="bio" rows="4" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($profile['bio'] ?? '') ?></textarea>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Education</h2>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">10th Marks</label>
                                <input type="text" name="tenth_marks" value="<?= htmlspecialchars($profile['tenth_marks'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">12th Marks</label>
                                <input type="text" name="twelfth_marks" value="<?= htmlspecialchars($profile['twelfth_marks'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Professional Links</h2>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">Portfolio URL</label>
                                <input type="url" name="portfolio" value="<?= htmlspecialchars($profile['portfolio'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">GitHub Profile</label>
                                <input type="url" name="github" value="<?= htmlspecialchars($profile['github'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">LinkedIn Profile</label>
                                <input type="url" name="linkedin" value="<?= htmlspecialchars($profile['linkedin'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label class="block text-lg font-medium text-gray-700 mb-2">Video Resume Link</label>
                                <input type="url" name="resume_link" value="<?= htmlspecialchars($profile['resume_link'] ?? '') ?>" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Projects & Certifications -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Additional Information</h2>
                        
                        <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2">Projects</label>
                            <textarea name="projects" rows="4" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($profile['projects'] ?? '') ?></textarea>
                        </div>
                        
                        <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2">Certifications</label>
                            <textarea name="certifications" rows="4" class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"><?= htmlspecialchars($profile['certifications'] ?? '') ?></textarea>
                        </div>
                    </div>

                    <div class="flex gap-4 pt-6">
                        <a href="jobseeker_dashboard.php" 
                           class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors text-center">
                            Cancel
                        </a>
                        <button type="submit" 
                                class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                            Save Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>