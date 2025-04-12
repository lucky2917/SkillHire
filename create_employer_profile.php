<?php
session_start();
require 'config.php';

$user_id = $_GET['uid'] ?? $_SESSION['user_id'];
$is_edit = isset($_GET['edit']) && $_GET['edit'] === 'true';
$check = mysqli_query($conn, "SELECT * FROM employer_profiles WHERE user_id = $user_id");
$profile = mysqli_fetch_assoc($check);

if (!$is_edit && $profile) {
    header("Location: employer_dashboard.php?error=profile_exists");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Employer Profile | SkillHire</title>
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
        <div class="max-w-3xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-10">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">
                    <?= $is_edit ? 'Update' : 'Create' ?> 
                    <span class="gradient-text">Company Profile</span>
                </h1>
                <p class="text-xl text-gray-600">Tell us about your company</p>
            </div>

            <form action="save_employer_profile.php" method="POST" class="space-y-8">
                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                
                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" 
                           value="<?= htmlspecialchars($profile['company_name'] ?? '') ?>" 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                           required>
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">Company Website</label>
                    <input type="text" name="website" 
                           value="<?= htmlspecialchars($profile['website'] ?? '') ?>" 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-lg font-medium text-gray-700 mb-2">About the Company</label>
                    <textarea name="about" rows="6" 
                              class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500"
                              required><?= htmlspecialchars($profile['about'] ?? '') ?></textarea>
                </div>

                <div class="flex gap-4 pt-6">
                    <a href="employer_dashboard.php" 
                       class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors text-center">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                        <?= $is_edit ? 'Update' : 'Create' ?> Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>