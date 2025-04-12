<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
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
                    <a href="signup.php" class="bg-blue-600 text-white px-6 py-2 rounded-xl hover:bg-blue-700 transition-colors">
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
                    Powerful <span class="gradient-text">Features</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover the tools and capabilities that make SkillHire the leading platform for skill-based hiring
                </p>
            </div>
        </div>
    </section>

    <!-- Main Features -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- AI Matching -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">🤖</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">AI-Powered Matching</h3>
                    <p class="text-gray-600">Advanced algorithms match candidates with jobs based on skills, experience, and cultural fit.</p>
                </div>

                <!-- Skill Assessment -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">📊</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Skill Assessment</h3>
                    <p class="text-gray-600">Comprehensive skill validation through practical tasks and real-world challenges.</p>
                </div>

                <!-- Video Profiles -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">🎥</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Video Profiles</h3>
                    <p class="text-gray-600">Showcase personality and soft skills through video introductions and project presentations.</p>
                </div>

                <!-- Analytics Dashboard -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">📈</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Analytics Dashboard</h3>
                    <p class="text-gray-600">Track hiring progress, candidate engagement, and recruitment metrics in real-time.</p>
                </div>

                <!-- Automated Screening -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Automated Screening</h3>
                    <p class="text-gray-600">Efficiently screen candidates with automated skill assessments and preliminary evaluations.</p>
                </div>

                <!-- Collaboration Tools -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-2xl">👥</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Collaboration Tools</h3>
                    <p class="text-gray-600">Team collaboration features for seamless hiring process and decision making.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Features -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Advanced Capabilities</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- For Employers -->
                <div class="space-y-8">
                    <h3 class="text-2xl font-bold text-blue-600 mb-6">For Employers</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Custom Assessment Creation</h4>
                                <p class="text-gray-600">Design tailored skill assessments for specific roles</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Talent Pool Management</h4>
                                <p class="text-gray-600">Build and manage pools of pre-qualified candidates</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Interview Scheduling</h4>
                                <p class="text-gray-600">Automated scheduling and calendar integration</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Job Seekers -->
                <div class="space-y-8">
                    <h3 class="text-2xl font-bold text-purple-600 mb-6">For Job Seekers</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Skill Development Tracking</h4>
                                <p class="text-gray-600">Monitor your progress and skill improvements</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Career Path Guidance</h4>
                                <p class="text-gray-600">Get personalized career development recommendations</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">✓</div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Application Tracking</h4>
                                <p class="text-gray-600">Real-time updates on your job applications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">
                Ready to Experience These <span class="gradient-text">Features</span>?
            </h2>
            <p class="text-xl text-gray-600 mb-10">
                Join SkillHire today and transform your hiring process
            </p>
            
        </div>
    </section>
</body>
</html>