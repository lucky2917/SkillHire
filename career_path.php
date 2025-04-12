<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Path | SkillHire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
        }
        .progress-bar {
            transition: width 1s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Career Path Section -->
    <section id="career-roadmaps" class="py-24">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">Your Road to Tech Mastery</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Explore specialized tech career tracks, build real-world skills, and grow into an expert one step at a time.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Frontend Development Path -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-blue-600 bg-blue-50 px-4 py-1 rounded-full">6-8 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Frontend Development</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">HTML & CSS</span>
                                <span class="text-blue-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">JavaScript & React</span>
                                <span class="text-blue-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">UI/UX & Performance</span>
                                <span class="text-blue-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 6-8 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <!-- Backend Development Path -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-green-600 bg-green-50 px-4 py-1 rounded-full">8-10 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Backend Development</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Node.js & Express</span>
                                <span class="text-green-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Databases & API</span>
                                <span class="text-green-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Security & Scaling</span>
                                <span class="text-green-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 8-10 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <!-- Full Stack Path -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-purple-600 bg-purple-50 px-4 py-1 rounded-full">12-14 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Full Stack Development</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Frontend + Backend</span>
                                <span class="text-purple-600 font-medium">Comprehensive</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">MERN Stack</span>
                                <span class="text-purple-600 font-medium">Industry Standard</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">DevOps & Deployment</span>
                                <span class="text-purple-600 font-medium">Professional</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 12-14 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <!-- Additional Career Cards -->
                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-orange-600 bg-orange-50 px-4 py-1 rounded-full">6-8 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Mobile App Development</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Flutter & Dart</span>
                                <span class="text-orange-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-orange-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">React Native</span>
                                <span class="text-orange-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-orange-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">App Deployment</span>
                                <span class="text-orange-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-orange-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 6-8 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-yellow-600 bg-yellow-50 px-4 py-1 rounded-full">8-10 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cloud DevOps Engineering</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">AWS & Azure</span>
                                <span class="text-yellow-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-yellow-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">CI/CD Pipelines</span>
                                <span class="text-yellow-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-yellow-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Infrastructure as Code</span>
                                <span class="text-yellow-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-yellow-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 8-10 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-red-600 bg-red-50 px-4 py-1 rounded-full">6-8 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Cybersecurity Analyst</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Network Security</span>
                                <span class="text-red-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-red-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Ethical Hacking</span>
                                <span class="text-red-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-red-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Incident Response</span>
                                <span class="text-red-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-red-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 6-8 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-teal-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-teal-600 bg-teal-50 px-4 py-1 rounded-full">8-10 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">UI/UX Designer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Design Principles</span>
                                <span class="text-teal-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-teal-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Prototyping & Testing</span>
                                <span class="text-teal-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-teal-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">User Research</span>
                                <span class="text-teal-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-teal-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 8-10 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-indigo-600 bg-indigo-50 px-4 py-1 rounded-full">12-14 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">AI/ML Engineer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Machine Learning Basics</span>
                                <span class="text-indigo-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-indigo-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Deep Learning Techniques</span>
                                <span class="text-indigo-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-indigo-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">AI Applications</span>
                                <span class="text-indigo-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-indigo-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 12-14 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-gray-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-600 bg-gray-50 px-4 py-1 rounded-full">6-8 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Analyst</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Data Cleaning</span>
                                <span class="text-gray-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-gray-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Data Visualization</span>
                                <span class="text-gray-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-gray-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Statistical Analysis</span>
                                <span class="text-gray-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-gray-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 6-8 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-pink-600 bg-pink-50 px-4 py-1 rounded-full">8-10 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Game Developer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Game Design</span>
                                <span class="text-pink-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-pink-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Game Development</span>
                                <span class="text-pink-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-pink-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Game Deployment</span>
                                <span class="text-pink-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-pink-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 8-10 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-purple-600 bg-purple-50 px-4 py-1 rounded-full">12-14 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Embedded Systems Engineer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Microcontrollers</span>
                                <span class="text-purple-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Embedded C Programming</span>
                                <span class="text-purple-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Embedded Systems Design</span>
                                <span class="text-purple-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-purple-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 12-14 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-blue-600 bg-blue-50 px-4 py-1 rounded-full">6-8 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">AR/VR Developer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">3D Modeling</span>
                                <span class="text-blue-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Unity Development</span>
                                <span class="text-blue-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Deployment & Publishing</span>
                                <span class="text-blue-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-blue-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 6-8 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.5 4.5h4.5l-3.5 2.5 1.5 4.5-3.5-2.5-3.5 2.5 1.5-4.5-3.5-2.5h4.5z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-green-600 bg-green-50 px-4 py-1 rounded-full">8-10 months</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Technical Writer</h3>
                    <div class="space-y-4 mb-6">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">Technical Documentation</span>
                                <span class="text-green-600 font-medium">Beginner Friendly</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">User Manuals</span>
                                <span class="text-green-600 font-medium">Intermediate</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-600">API Documentation</span>
                                <span class="text-green-600 font-medium">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 text-gray-600 text-sm">
                        Estimated Time: 8-10 months<br>
                        Difficulty: Beginner to Advanced
                    </div>
                </div>
            </div>

    </section>
</body>
</html>