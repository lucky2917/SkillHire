<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$role = $_SESSION['role'] ?? null;
$userId = $_SESSION['user_id'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHire | AI-Powered Hiring Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        @keyframes pulse {
            0% { opacity: 0.6; }
            50% { opacity: 1; }
            100% { opacity: 0.6; }
        }
        .animate-fade-in {
            animation: fadeIn 1.2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        .animate-pulse-slow {
            animation: pulse 3s ease-in-out infinite;
        }
        .gradient-primary {
            background: linear-gradient(135deg, #2563EB 0%, #3B82F6 100%);
        }
        .gradient-secondary {
            background: linear-gradient(135deg, #0EA5E9 0%, #38BDF8 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #1E40AF 0%, #2563EB 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-border {
            border-image: linear-gradient(135deg, #2563EB 0%, #3B82F6 100%) 1;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.1), 0 10px 10px -5px rgba(37, 99, 235, 0.04);
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #1F2937;
            letter-spacing: -0.025em;
        }
        .text-shadow {
            text-shadow: 0 2px 10px rgba(37, 99, 235, 0.2);
        }
    </style>
</head>
<body class="bg-white text-gray-900">

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-xl z-50 border-b border-gray-100">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <span class="text-3xl font-bold gradient-text tracking-tight">SkillHire</span>
        </div>
        
        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-10">
            <?php if (!$loggedIn): ?>
                <a href="how_it_works.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">How It Works</a>
                <a href="features.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Features</a>
                <a href="support.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Help</a>
            <?php elseif ($role === 'jobseeker'): ?>
                <a href="works(jobseeker).php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Dashboard</a>
                <a href="career_path.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Career Path</a>
                <a href="support.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Support</a>
            <?php elseif ($role === 'employer'): ?>
                <a href="hiring_guide.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Hiring Guide</a>
                <a href="jobs/employer_applications.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">All Applications</a>
                <a href="support.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Support</a>
            <?php endif; ?>
        </div>

        <!-- Auth Buttons -->
        <?php if (!$loggedIn): ?>
            <div class="flex items-center space-x-6">
                <a href="login.php" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Login</a>
                <a href="signup.php" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full transition-all duration-300 shadow-lg shadow-blue-600/20">
                    Get Started
                </a>
            </div>
        <?php else: ?>
            <div class="flex items-center space-x-6">
                <?php if ($role === 'employer'): ?>
                    <a href="jobs/post_job.php" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-full text-sm transition-all duration-300 shadow-lg shadow-blue-600/20">Post Job</a>
                <?php elseif ($role === 'jobseeker'): ?>
                    <a href="jobs/view_jobs.php" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-full text-sm transition-all duration-300 shadow-lg shadow-blue-600/20">Find Jobs</a>
                    <a href="jobs/job_selections.php" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-full text-sm transition-all duration-300 shadow-lg shadow-blue-600/20">Selections</a>
                <?php endif; ?>
                
                <a href="<?= $role === 'jobseeker' ? 'jobseeker_dashboard.php' : 'employer_dashboard.php' ?>" class="text-base text-gray-600 hover:text-blue-600 transition-colors duration-300">Dashboard</a>
                <a href="logout.php" class="text-base text-red-600 hover:text-red-800 transition-colors duration-300">Logout</a>
            </div>
        <?php endif; ?>
    </div>
</nav>

<!-- Hero Section -->
<section class="pt-40 pb-24 overflow-hidden bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-10 animate-fade-in">
                <h1 class="text-6xl lg:text-7xl font-bold leading-tight text-gray-900 tracking-tight">
                    Discover Skilled Candidates, Not Just Resumes
                </h1>
                <p class="text-xl lg:text-2xl text-gray-600 leading-relaxed tracking-tight">
                    Empower your hiring journey by focusing on real skills, practical challenges, and authentic talent visibility.
                </p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="#features" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full text-lg font-medium transition-all duration-300 shadow-lg shadow-blue-600/20 text-center">
                        Get Started
                    </a>
                    <a href="#demo" class="border border-blue-200 text-blue-600 hover:bg-blue-50 px-8 py-4 rounded-full text-lg font-medium transition-all duration-300 text-center">
                        Try Role RoadMap
                    </a>
                </div>
            </div>
            <div class="relative animate-fade-in" style="animation-delay: 0.3s">
                <div class="absolute inset-0 bg-blue-500/20 blur-[100px] rounded-full animate-pulse-slow"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="AI Hiring Platform" 
                     class="relative rounded-2xl shadow-2xl border border-gray-100 animate-float">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                Our <span class="gradient-text">Unique Approach</span>
            </h2>
            <p class="text-xl text-gray-600">Redefining hiring with transparency, skill, and purpose</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 card-hover">
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Challenge-Based Hiring</h3>
                <p class="text-gray-600 text-lg">Candidates complete real-world tasks that reflect the actual job role instead of uploading traditional resumes.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 card-hover">
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Blind Skill Matching</h3>
                <p class="text-gray-600 text-lg">Eliminating bias by focusing solely on demonstrated abilities for fair and inclusive hiring.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 card-hover">
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Transparent Job Posts</h3>
                <p class="text-gray-600 text-lg">Employers share actual work samples, culture values, and clear salary details to help candidates make informed decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section id="process" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                How It <span class="gradient-text">Works</span>
            </h2>
            <p class="text-xl text-gray-600">Skill-driven hiring, reimagined</p>
        </div>
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-12">
                <div class="flex items-start space-x-6">
                    <div class="bg-purple-100 text-purple-600 rounded-full w-12 h-12 flex items-center justify-center flex-shrink-0 text-xl font-semibold">1</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Build Your Profile</h3>
                        <p class="text-gray-600 text-lg">Sign up and create a detailed profile showcasing your real skills, past projects, and certifications.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6">
                    <div class="bg-purple-100 text-purple-600 rounded-full w-12 h-12 flex items-center justify-center flex-shrink-0 text-xl font-semibold">2</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Prove With Projects</h3>
                        <p class="text-gray-600 text-lg">Complete hands-on challenges provided by employers that mirror actual job requirements.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-6">
                    <div class="bg-purple-100 text-purple-600 rounded-full w-12 h-12 flex items-center justify-center flex-shrink-0 text-xl font-semibold">3</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Get Matched</h3>
                        <p class="text-gray-600 text-lg">Receive job opportunities based on your performance, skills, and relevant experience — not keywords.</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 bg-purple-500/20 blur-[100px] rounded-full animate-pulse-slow"></div>
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Skill-based hiring process" 
                     class="relative rounded-2xl shadow-2xl border border-gray-100 animate-float">
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section id="testimonials" class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                Success <span class="gradient-text">Stories</span>
            </h2>
            <p class="text-xl text-gray-600">Hear from our community</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 card-hover">
                <div class="flex items-start mb-6">
                    <div class="w-14 h-14 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xl mr-4">R</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Ravi Shankar</h4>
                        <p class="text-gray-600">Tech Lead, SkillHire</p>
                        <div class="flex mt-2 text-blue-600">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 text-lg italic">"Watching SkillHire grow from idea to impact has been an incredible journey. It's humbling to see how we're connecting real talent with real opportunities."</p>
            </div>
            <div class="bg-white p-10 rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 card-hover">
                <div class="flex items-start mb-6">
                    <div class="w-14 h-14 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xl mr-4">B</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 mb-1">Bhavya</h4>
                        <p class="text-gray-600">Co-Team Lead, SkillHire</p>
                        <div class="flex mt-2 text-blue-600">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 text-lg italic">"SkillHire isn't just a platform—it’s a mission. I'm proud of how we’re reshaping hiring to truly celebrate people’s skills and stories."</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-b from-white to-blue-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-8 text-gray-900">
            Ready to Transform <span class="gradient-text">Your Hiring?</span>
        </h2>
        <p class="text-xl text-gray-600 mb-12">Join the fair play today</p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white border-t border-gray-100 py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12">
            <div>
                <span class="text-2xl font-bold gradient-text">SkillHire</span>
                <p class="text-gray-600 mt-4">AI-Powered Hiring Platform</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-gray-900 mb-6">Platform</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Features</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Pricing</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Security</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-gray-900 mb-6">Company</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">About</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Careers</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-gray-900 mb-6">Legal</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Privacy</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Terms</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600 transition-colors duration-300">Security</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-100 mt-16 pt-8 text-center text-gray-600">
            <p>&copy; <?php echo date('Y'); ?> SkillHire. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Dropdown menu functionality
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    if (menuButton && dropdownMenu) {
        menuButton.addEventListener('mouseover', () => {
            dropdownMenu.classList.remove('hidden');
        });

        menuButton.addEventListener('mouseout', () => {
            setTimeout(() => {
                if (!dropdownMenu.matches(':hover')) {
                    dropdownMenu.classList.add('hidden');
                }
            }, 200);
        });

        dropdownMenu.addEventListener('mouseleave', () => {
            dropdownMenu.classList.add('hidden');
        });
    }

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

</body>
</html>