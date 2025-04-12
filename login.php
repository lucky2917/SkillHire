<?php
session_start();
require 'config.php';

$email = $password = $role = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SkillHire</title>
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
    <div class="min-h-screen flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Welcome to <span class="gradient-text">SkillHire</span></h1>
                <p class="text-xl text-gray-600">Login to continue your journey</p>
            </div>

            <!-- Role Selection -->
            <div class="flex gap-4 mb-8">
                <button type="button" id="jobseekerBtn" 
                        class="flex-1 py-3 px-6 text-lg font-medium rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                    Job Seeker
                </button>
                <button type="button" id="employerBtn" 
                        class="flex-1 py-3 px-6 text-lg font-medium rounded-xl bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                    Employer
                </button>
            </div>

            <?php if (isset($_GET['error'])): ?>
                <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-xl text-lg">
                    <?php
                    if ($_GET['error'] == "wrongpass") {
                        echo "Incorrect password. Please try again.";
                    } elseif ($_GET['error'] == "notfound") {
                        echo "User not found or role mismatch.";
                    }
                    ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form id="loginForm" action="login_process.php" method="POST" class="space-y-6">
                <input type="hidden" name="role" id="roleInput" value="jobseeker">
                
                <div>
                    <label class="block text-gray-700 text-lg mb-2">Email Address</label>
                    <input type="email" name="email" required 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                </div>
                
                <div>
                    <label class="block text-gray-700 text-lg mb-2">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" 
                               class="h-5 w-5 text-blue-600 border-gray-300 rounded-md focus:ring-blue-500">
                        <label class="ml-2 text-gray-700 text-lg">Remember me</label>
                    </div>
                    <a href="forgot_password.php" class="text-lg text-blue-600 hover:text-blue-700">Forgot password?</a>
                </div>
                
                <button type="submit" 
                        class="w-full bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors">
                    Login
                </button>
            </form>
            
            <div class="mt-8 text-center">
                <p class="text-lg text-gray-600">
                    Don't have an account? 
                    <a href="signup.php" class="text-blue-600 hover:text-blue-700 font-medium">Sign up</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        const jobseekerBtn = document.getElementById('jobseekerBtn');
        const employerBtn = document.getElementById('employerBtn');
        const roleInput = document.getElementById('roleInput');
        
        jobseekerBtn.addEventListener('click', () => {
            jobseekerBtn.classList.remove('bg-gray-100', 'text-gray-600');
            jobseekerBtn.classList.add('bg-blue-600', 'text-white');
            employerBtn.classList.remove('bg-blue-600', 'text-white');
            employerBtn.classList.add('bg-gray-100', 'text-gray-600');
            roleInput.value = 'jobseeker';
        });
        
        employerBtn.addEventListener('click', () => {
            employerBtn.classList.remove('bg-gray-100', 'text-gray-600');
            employerBtn.classList.add('bg-blue-600', 'text-white');
            jobseekerBtn.classList.remove('bg-blue-600', 'text-white');
            jobseekerBtn.classList.add('bg-gray-100', 'text-gray-600');
            roleInput.value = 'employer';
        });
    </script>
</body>
</html>