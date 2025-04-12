<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiring Guide | SkillHire</title>
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
                    <a href="register.php" class="bg-blue-600 text-white px-6 py-2 rounded-xl hover:bg-blue-700 transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Your Guide to <span class="gradient-text">Smart Hiring</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Follow our comprehensive guide to find and hire the best talent through SkillHire's innovative platform
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-12">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl text-blue-600">1</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Create Your Profile</h3>
                            <p class="text-lg text-gray-600">Build a compelling company profile that showcases your mission, culture, and values to attract top talent.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl text-blue-600">2</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Post Real Job Tasks</h3>
                            <p class="text-lg text-gray-600">Create engaging job listings with real-world tasks that challenge and attract skilled professionals.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl text-blue-600">3</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Review Skill-Based Applications</h3>
                            <p class="text-lg text-gray-600">Evaluate candidates based on their practical skills and completed projects rather than just resumes.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl text-blue-600">4</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Select & Engage</h3>
                            <p class="text-lg text-gray-600">Make informed decisions by reviewing candidates' work, conducting interviews, and building your talent pool.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-blue-500/20 blur-[100px] rounded-full"></div>
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Hiring Process" 
                         class="relative rounded-2xl shadow-2xl border border-gray-100 animate-float w-full">
                    <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 bg-white px-8 py-4 rounded-xl shadow-lg">
                        <p class="text-lg font-medium text-gray-900">Start hiring better, faster, smarter</p>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <a href="signup.php" 
                   class="inline-block bg-blue-600 text-white text-lg font-medium py-4 px-8 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Create Your Employer Account
                </a>
            </div>
        </div>
    </section>
</body>
</html>