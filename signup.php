<?php
// ... keep existing PHP code unchanged ...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-4">Join <span class="gradient-text">SkillHire</span></h1>
                <p class="text-xl text-gray-600">Create your account to get started</p>
            </div>

            <!-- Role Selection -->
            <div class="flex gap-4 mb-8">
                <button type="button" id="jobseekerBtn" class="flex-1 py-3 px-6 text-lg font-medium rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                    Job Seeker
                </button>
                <button type="button" id="employerBtn" class="flex-1 py-3 px-6 text-lg font-medium rounded-xl bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                    Employer
                </button>
            </div>

            <!-- Signup Form -->
            <form action="send_otp.php" method="POST">
                <input type="hidden" name="role" id="roleInput" value="jobseeker">
                
                <!-- Common Fields -->
                <div id="step1" class="form-step active space-y-6">
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Full Name</label>
                        <input type="text" name="name" required 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
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
                    
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Confirm Password</label>
                        <input type="password" name="confirm_password" required 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <button type="button" onclick="nextStep()" 
                            class="w-full bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors">
                        Continue
                    </button>
                </div>
                
                <!-- Job Seeker Fields -->
                <div id="jobseekerFields" class="form-step space-y-6">
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Your Skills (comma separated)</label>
                        <input type="text" name="skills" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Resume Link (optional)</label>
                        <input type="url" name="resume" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Portfolio Link (optional)</label>
                        <input type="url" name="portfolio" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div class="flex gap-4">
                        <button type="button" onclick="prevStep()" 
                                class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors">
                            Back
                        </button>
                        <button type="submit" 
                                class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors">
                            Complete
                        </button>
                    </div>
                </div>
                
                <!-- Employer Fields -->
                <div id="employerFields" class="form-step space-y-6">
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Company Name</label>
                        <input type="text" name="company" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Your Position</label>
                        <input type="text" name="position" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Company Website (optional)</label>
                        <input type="url" name="website" 
                               class="w-full px-4 py-3 text-lg border border-gray-200 rounded-xl focus:outline-none focus:border-blue-500">
                    </div>
                    
                    <div class="flex gap-4">
                        <button type="button" onclick="prevStep()" 
                                class="flex-1 bg-gray-100 text-gray-600 text-lg font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-colors">
                            Back
                        </button>
                        <button type="submit" 
                                class="flex-1 bg-blue-600 text-white text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors">
                            Complete
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="mt-8 text-center">
                <p class="text-lg text-gray-600">
                    Already have an account? 
                    <a href="login.php" class="text-blue-600 hover:text-blue-700 font-medium">Log in</a>
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
        
        function nextStep() {
            document.getElementById('step1').classList.remove('active');
            if(roleInput.value === 'jobseeker') {
                document.getElementById('jobseekerFields').classList.add('active');
            } else {
                document.getElementById('employerFields').classList.add('active');
            }
        }
        
        function prevStep() {
            document.getElementById('jobseekerFields').classList.remove('active');
            document.getElementById('employerFields').classList.remove('active');
            document.getElementById('step1').classList.add('active');
        }
    </script>
</body>
</html>