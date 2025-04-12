<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-purple {
            background: linear-gradient(135deg, #7C3AED 0%, #9333EA 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
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
                    <a href="login.php" class="text-gray-600 hover:text-blue-600 font-medium">Login</a>
                    <a href="register.php" class="bg-blue-600 text-white px-6 py-2 rounded-xl hover:bg-blue-700 transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    How <span class="gradient-text">SkillHire</span> Works
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our platform revolutionizes the hiring process by focusing on skills, transparency, and fair opportunities for both job seekers and employers
                </p>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20">
                <!-- Job Seeker Journey -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-xl p-10">
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold mb-4">
                            <span class="gradient-purple">Job Seeker</span> Journey
                        </h2>
                        <p class="text-gray-600">Your path to finding the perfect role</p>
                    </div>

                    <div class="space-y-12">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-purple-600">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Create Your Profile</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Showcase your technical skills with validation</p>
                                    <p>• Upload project portfolios and GitHub repositories</p>
                                    <p>• Add certifications and educational background</p>
                                    <p>• Write a compelling bio that tells your story</p>
                                    <p>• Link your professional social profiles</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-purple-600">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Discover Matching Opportunities</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• AI-powered job matching based on your skills</p>
                                    <p>• Filter by location, job type, and company culture</p>
                                    <p>• View detailed job descriptions and requirements</p>
                                    <p>• See real-world tasks you'll be working on</p>
                                    <p>• Understand company values and work environment</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-purple-600">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Apply with Confidence</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• One-click applications for matching jobs</p>
                                    <p>• Track your application status in real-time</p>
                                    <p>• Receive feedback on your applications</p>
                                    <p>• Get notified when you're shortlisted</p>
                                    <p>• Schedule interviews through the platform</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-purple-600">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Get Selected & Grow</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Transparent selection process</p>
                                    <p>• Direct communication with employers</p>
                                    <p>• Receive offer letters through platform</p>
                                    <p>• Build your professional network</p>
                                    <p>• Access career growth resources</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-10 border-t border-gray-100">
                        <a href="register.php?type=jobseeker" 
                           class="block w-full bg-purple-600 text-white text-center text-lg font-medium py-4 rounded-xl hover:bg-purple-700 transition-colors shadow-lg shadow-purple-500/30">
                            Create Job Seeker Account
                        </a>
                    </div>
                </div>

                <!-- Employer Journey -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-xl p-10">
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold mb-4">
                            <span class="gradient-text">Employer</span> Journey
                        </h2>
                        <p class="text-gray-600">Your path to finding the perfect talent</p>
                    </div>

                    <div class="space-y-12">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-blue-600">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Build Your Employer Brand</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Create detailed company profile</p>
                                    <p>• Showcase company culture and values</p>
                                    <p>• Add team photos and office environment</p>
                                    <p>• Share employee testimonials</p>
                                    <p>• Highlight growth opportunities</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-blue-600">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Post Detailed Job Listings</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Define clear role requirements</p>
                                    <p>• List required and preferred skills</p>
                                    <p>• Add sample tasks or challenges</p>
                                    <p>• Specify compensation and benefits</p>
                                    <p>• Set application deadlines</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-blue-600">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Review Quality Applications</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Access pre-filtered candidate profiles</p>
                                    <p>• View skill match percentages</p>
                                    <p>• Examine portfolios and projects</p>
                                    <p>• Check certifications and validations</p>
                                    <p>• Read comprehensive candidate bios</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <span class="text-2xl text-blue-600">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Hire with Confidence</h3>
                                <div class="space-y-2 text-gray-600">
                                    <p>• Schedule interviews through platform</p>
                                    <p>• Communicate directly with candidates</p>
                                    <p>• Make and manage offers</p>
                                    <p>• Track hiring pipeline</p>
                                    <p>• Build talent pool for future</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-10 border-t border-gray-100">
                        <a href="register.php?type=employer" 
                           class="block w-full bg-blue-600 text-white text-center text-lg font-medium py-4 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                            Create Employer Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-6">
                    Platform <span class="gradient-text">Features</span>
                </h2>
                <p class="text-xl text-gray-600">Tools and features that make hiring better</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Cards -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Smart Matching</h3>
                    <p class="text-gray-600">AI-powered matching system that connects the right talent with the right opportunities</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">📊</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Skill Analytics</h3>
                    <p class="text-gray-600">Detailed insights into skill requirements and candidate capabilities</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">💬</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Direct Communication</h3>
                    <p class="text-gray-600">Built-in messaging system for seamless interaction between employers and candidates</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">📈</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Progress Tracking</h3>
                    <p class="text-gray-600">Real-time updates on application status and hiring pipeline</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Secure Platform</h3>
                    <p class="text-gray-600">Enterprise-grade security for your data and communications</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <span class="text-2xl">📱</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mobile Ready</h3>
                    <p class="text-gray-600">Access the platform anytime, anywhere from any device</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Transform Your <span class="gradient-text">Hiring</span>?
            </h2>
            <p class="text-xl text-gray-600 mb-10">
                Join thousands of companies and job seekers who are already experiencing the future of hiring
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="features.php" 
                   class="bg-blue-600 text-white text-lg font-medium py-4 px-8 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Features
                </a>
                <a href="support.php" 
                   class="bg-purple-600 text-white text-lg font-medium py-4 px-8 rounded-xl hover:bg-purple-700 transition-colors shadow-lg shadow-purple-500/30">
                    Contact Creators
                </a>
            </div>
        </div>
    </section>
</body>
</html>