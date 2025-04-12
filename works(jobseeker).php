<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dream Career Starts Here | SkillHire for Job Seekers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .step-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        .step-card:hover {
            transform: translateY(-5px);
            border-left-color: #7c3aed;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .emoji-circle {
            background: linear-gradient(135deg, #a78bfa 0%, #7dd3fc 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .cta-button {
            background: linear-gradient(to right, #7c3aed, #0ea5e9);
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.4);
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.6);
        }
        .highlight-text {
            background: linear-gradient(120deg, #bae6fd 0%, #ddd6fe 100%);
            background-repeat: no-repeat;
            background-size: 100% 40%;
            background-position: 0 88%;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-800">
<section id="jobseeker-journey" class="py-20 bg-gradient-to-b from-primary-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Header -->
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-700 text-sm font-medium mb-4">
                For Ambitious Professionals
            </span>
            <h1 class="text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                Land Your <span class="highlight-text">Dream Job</span> by<br>Showcasing What You <span class="text-primary-600">Truly</span> Bring to the Table
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                SkillHire revolutionizes hiring by focusing on your <strong class="font-semibold text-primary-700">actual capabilities</strong> rather than just credentials. 
                We connect talented individuals with companies that value <strong class="font-semibold text-secondary-700">skills, potential, and growth</strong>.
            </p>
        </div>

        <!-- Journey Timeline -->
        <div class="relative">
            <!-- Vertical line -->
            <div class="hidden md:block absolute left-1/2 h-full w-0.5 bg-gradient-to-b from-primary-200 to-secondary-200"></div>
            
            <div class="space-y-16 md:space-y-24">
                <!-- Step 1 -->
                <div class="step-card relative flex flex-col md:flex-row items-center bg-white p-8 rounded-xl shadow-sm hover:shadow-md">
                    <div class="md:absolute md:left-1/2 md:transform md:-translate-x-1/2 -top-8 mb-6 md:mb-0">
                        <div class="emoji-circle flex items-center justify-center w-16 h-16 rounded-full text-3xl">
                            👤
                        </div>
                    </div>
                    <div class="md:w-5/12 md:pr-12">
                        <span class="inline-block text-sm font-semibold text-primary-600 mb-2">STEP 1</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Build Your Digital Showcase</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Create a profile that goes beyond the resume. Highlight your <strong class="font-medium">technical skills</strong>, 
                            showcase <strong class="font-medium">real projects</strong> (GitHub, Behance, etc.), and let employers see 
                            your potential through video introductions and detailed case studies.
                        </p>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Add unlimited skills with proficiency levels</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Embed portfolio items directly in your profile</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Record a 90-second video pitch</span>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden md:block md:w-5/12">
                        <div class="bg-gray-100 rounded-lg p-4 border border-gray-200">
                            <div class="bg-white p-6 rounded shadow-xs">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="h-4 bg-primary-200 rounded w-32 mb-2"></div>
                                        <div class="h-3 bg-gray-200 rounded w-24"></div>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="h-4 bg-gray-200 rounded w-full"></div>
                                    <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                                    <div class="h-4 bg-gray-200 rounded w-4/6"></div>
                                    <div class="h-4 bg-gray-200 rounded w-3/6"></div>
                                </div>
                                <div class="mt-6 pt-4 border-t border-gray-200">
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-primary-100 text-primary-800 text-xs font-medium rounded-full">JavaScript</span>
                                        <span class="px-3 py-1 bg-primary-100 text-primary-800 text-xs font-medium rounded-full">React</span>
                                        <span class="px-3 py-1 bg-primary-100 text-primary-800 text-xs font-medium rounded-full">UI/UX</span>
                                        <span class="px-3 py-1 bg-primary-100 text-primary-800 text-xs font-medium rounded-full">+3 more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-card relative flex flex-col md:flex-row items-center bg-white p-8 rounded-xl shadow-sm hover:shadow-md">
                    <div class="md:absolute md:left-1/2 md:transform md:-translate-x-1/2 -top-8 mb-6 md:mb-0">
                        <div class="emoji-circle flex items-center justify-center w-16 h-16 rounded-full text-3xl">
                            🔍
                        </div>
                    </div>
                    <div class="md:w-5/12 order-last">
                        <div class="bg-gray-100 rounded-lg p-4 border border-gray-200">
                            <div class="bg-white p-6 rounded shadow-xs">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <div class="h-4 bg-secondary-200 rounded w-40 mb-2"></div>
                                        <div class="h-3 bg-gray-200 rounded w-32"></div>
                                    </div>
                                    <div class="px-3 py-1 bg-secondary-100 text-secondary-800 text-xs font-medium rounded-full">98% Match</div>
                                </div>
                                <div class="space-y-3">
                                    <div class="h-4 bg-gray-200 rounded w-full"></div>
                                    <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                                </div>
                                <div class="mt-6 pt-4 border-t border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded">React</span>
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded">TypeScript</span>
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded">Redux</span>
                                        </div>
                                        <div class="h-8 bg-secondary-100 rounded-md w-24"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded shadow-xs mt-4">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <div class="h-4 bg-gray-200 rounded w-36 mb-2"></div>
                                        <div class="h-3 bg-gray-200 rounded w-28"></div>
                                    </div>
                                    <div class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">87% Match</div>
                                </div>
                                <div class="space-y-3">
                                    <div class="h-4 bg-gray-200 rounded w-full"></div>
                                    <div class="h-4 bg-gray-200 rounded w-5/6"></div>
                                </div>
                                <div class="mt-6 pt-4 border-t border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded">JavaScript</span>
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded">Node.js</span>
                                        </div>
                                        <div class="h-8 bg-gray-100 rounded-md w-24"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-5/12 md:pl-12 mb-6 md:mb-0">
                        <span class="inline-block text-sm font-semibold text-primary-600 mb-2">STEP 2</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Discover Perfect Opportunities</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Our advanced matching algorithm analyzes your skills, experience level, and career aspirations to surface 
                            <strong class="font-medium">the most relevant job openings</strong>. No more sifting through hundreds of listings — 
                            we prioritize quality matches based on what really matters.
                        </p>
                        <div class="mt-6 bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-blue-700">
                                        We match you based on <strong>skill proficiency</strong>, not just keywords. A "JavaScript" skill marked as 
                                        "Advanced" will prioritize different roles than one marked "Beginner".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-card relative flex flex-col md:flex-row items-center bg-white p-8 rounded-xl shadow-sm hover:shadow-md">
                    <div class="md:absolute md:left-1/2 md:transform md:-translate-x-1/2 -top-8 mb-6 md:mb-0">
                        <div class="emoji-circle flex items-center justify-center w-16 h-16 rounded-full text-3xl">
                            📝
                        </div>
                    </div>
                    <div class="md:w-5/12 md:pr-12">
                        <span class="inline-block text-sm font-semibold text-primary-600 mb-2">STEP 3</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Showcase Through Action</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Replace tedious cover letters with <strong class="font-medium">real-world problem solving</strong>. Employers on SkillHire 
                            provide practical tasks or challenges that let you demonstrate exactly how you'd approach their work.
                        </p>
                        <div class="mt-6 space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-6 w-6 rounded-md bg-secondary-500 text-white">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-600">
                                        <strong>Frontend Developer?</strong> Build a responsive component from a Figma design
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-6 w-6 rounded-md bg-secondary-500 text-white">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-600">
                                        <strong>Data Analyst?</strong> Analyze a sample dataset and present key findings
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="flex items-center justify-center h-6 w-6 rounded-md bg-secondary-500 text-white">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-600">
                                        <strong>Marketing Specialist?</strong> Create a campaign strategy for a hypothetical product
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block md:w-5/12">
                        <div class="bg-gray-100 rounded-lg p-4 border border-gray-200">
                            <div class="bg-white p-6 rounded shadow-xs">
                                <h4 class="font-medium text-gray-900 mb-3">Challenge: Build a React Component</h4>
                                <div class="space-y-3 text-sm text-gray-600 mb-4">
                                    <p>Create a responsive product card component with:</p>
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Product image, name, price, and description</li>
                                        <li>"Add to cart" button with hover effects</li>
                                        <li>Mobile-first design approach</li>
                                        <li>Bonus: Add a rating display</li>
                                    </ul>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between items-center">
                                        <div class="text-xs text-gray-500">
                                            <span class="font-medium">Time estimate:</span> 2-3 hours
                                        </div>
                                        <button class="px-4 py-2 bg-secondary-100 text-secondary-700 text-sm font-medium rounded-md hover:bg-secondary-200">
                                            Start Challenge
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="step-card relative flex flex-col md:flex-row items-center bg-white p-8 rounded-xl shadow-sm hover:shadow-md">
                    <div class="md:absolute md:left-1/2 md:transform md:-translate-x-1/2 -top-8 mb-6 md:mb-0">
                        <div class="emoji-circle flex items-center justify-center w-16 h-16 rounded-full text-3xl">
                            📊
                        </div>
                    </div>
                    <div class="md:w-5/12 order-last">
                        <div class="bg-gray-100 rounded-lg p-4 border border-gray-200">
                            <div class="bg-white p-6 rounded shadow-xs">
                                <h4 class="font-medium text-gray-900 mb-4">Your Application Dashboard</h4>
                                <div class="space-y-4">
                                    <div class="border-b border-gray-200 pb-4">
                                        <div class="flex justify-between items-start mb-1">
                                            <span class="font-medium">Frontend Developer @ TechCorp</span>
                                            <span class="px-2 py-0.5 bg-green-100 text-green-800 text-xs font-medium rounded-full">Shortlisted</span>
                                        </div>
                                        <div class="text-sm text-gray-500">Submitted 3 days ago</div>
                                        <div class="mt-2 text-sm text-gray-600">Your solution scored 4.8/5 from the hiring team.</div>
                                    </div>
                                    <div class="border-b border-gray-200 pb-4">
                                        <div class="flex justify-between items-start mb-1">
                                            <span class="font-medium">UI Designer @ CreativeStudio</span>
                                            <span class="px-2 py-0.5 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full">In Review</span>
                                        </div>
                                        <div class="text-sm text-gray-500">Submitted 1 week ago</div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-start mb-1">
                                            <span class="font-medium">Full Stack Engineer @ Startup</span>
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">Closed</span>
                                        </div>
                                        <div class="text-sm text-gray-500">Submitted 2 weeks ago</div>
                                        <div class="mt-2 text-sm text-gray-600">Position filled. Feedback available.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-5/12 md:pl-12 mb-6 md:mb-0">
                        <span class="inline-block text-sm font-semibold text-primary-600 mb-2">STEP 4</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Track & Grow</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Get full transparency into your application progress. See exactly where you stand with each opportunity 
                            and receive <strong class="font-medium">actionable feedback</strong> — even if you're not selected.
                        </p>
                        <div class="mt-6 bg-gray-50 p-6 rounded-lg">
                            <h4 class="font-medium text-gray-900 mb-3">Why this matters:</h4>
                            <ul class="space-y-3 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>No black holes:</strong> Know when positions are filled or closed</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Learn from feedback:</strong> Understand where you excelled or could improve</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-secondary-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Build your reputation:</strong> Strong performances lead to direct outreach from employers</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Final CTA -->
        <div class="mt-24 text-center bg-black text-white pt-8">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Job Search?</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">
                Join thousands of professionals who found better opportunities by showcasing what they <strong class="font-semibold text-primary-600">actually</strong> know — not just what their resume says.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="jobs/view_jobs.php" class="cta-button inline-flex items-center px-8 py-4 rounded-md text-lg font-semibold text-white">
                    Find Jobs, ASAP!!
                </a>
                <a href="index.php" class="inline-flex items-center px-8 py-4 border border-gray-300 rounded-md text-lg font-medium text-gray-700 bg-white hover:bg-gray-50">
                   
                 Return to Home
                </a>
            </div>
            <p class="mt-6 text-sm p-8">
                Lets make our belief Skill Matters is now LIVE
            </p>
        </div>
    </div>
</section>
</body>
</html>