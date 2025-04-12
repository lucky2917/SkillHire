<?php
session_start();
require '../config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'jobseeker') {
    echo "Unauthorized access.";
    exit;
}

$filterBySkills = isset($_GET['filter']) && $_GET['filter'] === 'skills';

// Fetch jobseeker's skills
$user_id = $_SESSION['user_id'];
$skill_query = mysqli_query($conn, "SELECT skills FROM jobseeker_profiles WHERE user_id = $user_id");
$user_skills = '';
if ($row = mysqli_fetch_assoc($skill_query)) {
    $user_skills = array_map('trim', explode(',', strtolower($row['skills'])));
}

function normalize_skills($skills, $synonyms) {
    $normalized = [];
    foreach ($skills as $skill) {
        $skill = strtolower(trim($skill));
        foreach ($synonyms as $main => $variants) {
            $variants = array_map('strtolower', $variants); // normalize synonyms
            if (in_array($skill, $variants)) {
                $normalized[] = $main;
                continue 2;
            }
        }
        $normalized[] = $skill;
    }
    return array_unique($normalized);
}

$synonyms = [
    'cpp' => ['c++', 'cpp'],
    'js' => ['javascript', 'js', 'ecmascript'],
    'react' => ['reactjs', 'react', 'react.js'],
    'node' => ['nodejs', 'node', 'node.js'],
    'html' => ['html5', 'html'],
    'css' => ['css3', 'css'],
    'python' => ['python', 'py'],
    'java' => ['java', 'jdk'],
    'c' => ['c'],
    'sql' => ['sql', 'mysql', 'postgresql', 'mssql', 'sqlite'],
    'mongodb' => ['mongodb', 'mongo'],
    'express' => ['express', 'expressjs'],
    'angular' => ['angular', 'angularjs'],
    'vue' => ['vue', 'vuejs'],
    'typescript' => ['typescript', 'ts'],
    'jquery' => ['jquery'],
    'django' => ['django'],
    'flask' => ['flask'],
    'spring' => ['spring', 'springboot', 'spring boot'],
    'php' => ['php', 'laravel', 'codeigniter'],
    'dotnet' => ['.net', 'dotnet', 'asp.net'],
    'kotlin' => ['kotlin'],
    'swift' => ['swift', 'ios'],
    'android' => ['android', 'android development'],
    'ml' => ['machine learning', 'ml'],
    'ai' => ['artificial intelligence', 'ai'],
    'nlp' => ['natural language processing', 'nlp'],
    'data science' => ['data science', 'datascience', 'data scientist'],
    'data analysis' => ['data analysis', 'data analyst'],
    'git' => ['git', 'version control'],
    'github' => ['github'],
    'docker' => ['docker', 'container'],
    'kubernetes' => ['kubernetes', 'k8s'],
    'aws' => ['aws', 'amazon web services'],
    'azure' => ['azure', 'microsoft azure'],
    'gcp' => ['gcp', 'google cloud'],
    'firebase' => ['firebase'],
    'linux' => ['linux', 'ubuntu', 'debian'],
    'shell scripting' => ['bash', 'shell', 'shell scripting'],
    'rest api' => ['rest', 'rest api', 'restful'],
    'graphql' => ['graphql'],
    'seo' => ['seo', 'search engine optimization'],
    'ui/ux' => ['ui', 'ux', 'ui/ux', 'user experience', 'user interface'],
    'figma' => ['figma'],
    'adobe xd' => ['adobe xd'],
    'wordpress' => ['wordpress'],
    'shopify' => ['shopify'],
    'jira' => ['jira'],
    'notion' => ['notion'],
    'postman' => ['postman'],
    'testing' => ['testing', 'unit testing', 'integration testing', 'jest', 'mocha'],
    'agile' => ['agile', 'scrum'],
    'matlab' => ['matlab'],
    'r' => ['r', 'r programming'],
    'tensorflow' => ['tensorflow'],
    'pytorch' => ['pytorch'],
    'scikit-learn' => ['scikit-learn', 'sklearn'],
    'pandas' => ['pandas'],
    'numpy' => ['numpy'],
    'opencv' => ['opencv'],
    'excel' => ['excel', 'ms excel'],
    'power bi' => ['power bi'],
    'tableau' => ['tableau'],
    'hadoop' => ['hadoop'],
    'spark' => ['spark'],
    'etl' => ['etl'],
    'airflow' => ['airflow'],
    'api' => ['api', 'web api'],
    'json' => ['json'],
    'xml' => ['xml'],
    'bootstrap' => ['bootstrap'],
    'tailwind' => ['tailwind', 'tailwindcss'],
    'sass' => ['sass', 'scss'],
    'redux' => ['redux'],
    'rxjs' => ['rxjs'],
    'nextjs' => ['nextjs', 'next.js'],
    'nuxtjs' => ['nuxtjs', 'nuxt.js'],
    'csharp' => ['c#', 'csharp'],
    'vb' => ['vb', 'visual basic'],
    'unity' => ['unity'],
    'unreal' => ['unreal', 'unreal engine'],
    'gamedev' => ['gamedev', 'game development'],
    'blockchain' => ['blockchain'],
    'solidity' => ['solidity'],
    'web3' => ['web3'],
    'metamask' => ['metamask'],
    'dapp' => ['dapp', 'decentralized app'],
    'devops' => ['devops'],
    'ci/cd' => ['ci/cd', 'jenkins', 'github actions', 'gitlab ci'],
    'supabase' => ['supabase'],
    'strapi' => ['strapi'],
    'sanity' => ['sanity'],
    'contentful' => ['contentful'],
];

$user_skills = normalize_skills($user_skills, $synonyms);

if ($filterBySkills && !empty($user_skills)) {
    $jobs = mysqli_query($conn, "SELECT jobs.*, users.name AS employer_name 
                                 FROM jobs 
                                 JOIN users ON jobs.employer_id = users.id 
                                 ORDER BY created_at DESC");
    $filtered_jobs = [];

    while ($job = mysqli_fetch_assoc($jobs)) {
        $job_required_raw = array_map('trim', explode(',', strtolower($job['required_skills'] ?? '')));
        $job_skills = normalize_skills($job_required_raw, $synonyms);
        $match_count = count(array_intersect($user_skills, $job_skills));

        if ($match_count > 0) {
            $filtered_jobs[] = $job;
        }
    }
} else {
    $filtered_jobs = [];
    $jobs = mysqli_query($conn, "SELECT jobs.*, users.name AS employer_name 
                                 FROM jobs 
                                 JOIN users ON jobs.employer_id = users.id 
                                 ORDER BY created_at DESC");
    while ($job = mysqli_fetch_assoc($jobs)) {
        $filtered_jobs[] = $job;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Jobs | SkillHire</title>
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
    <!-- Navigation -->
    <nav class="bg-white shadow-lg shadow-gray-100/50">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">
                    <span class="gradient-text">SkillHire</span>
                </h1>
                <div class="flex items-center space-x-6">
                    <a href="../jobseeker_dashboard.php" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard</a>
                    <a href="../logout.php" class="text-gray-600 hover:text-blue-600 font-medium">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6 py-12">
        <?php if (isset($_GET['applied'])): ?>
            <div class="mb-8">
                <?php if ($_GET['applied'] === 'success'): ?>
                    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl flex items-center">
                        
                        Successfully applied to the job!
                    </div>
                <?php elseif ($_GET['applied'] === 'duplicate' || $_GET['applied'] === 'already'): ?>
                    <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-6 py-4 rounded-xl flex items-center">
                        <span class="text-xl mr-2">⚠️</span>
                        You have already applied to this job.
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Browse <span class="gradient-text">Jobs</span></h1>
            <p class="text-xl text-gray-600">Find the perfect opportunity that matches your skills</p>
        </div>

        <div class="mb-8 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <a href="view_jobs.php" 
                   class="<?= !$filterBySkills ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600' ?> px-6 py-3 rounded-xl font-medium hover:bg-opacity-90 transition-colors">
                    All Jobs
                </a>
                <a href="view_jobs.php?filter=skills" 
                   class="<?= $filterBySkills ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600' ?> px-6 py-3 rounded-xl font-medium hover:bg-opacity-90 transition-colors">
                    🎯 Matching Skills
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <?php foreach($filtered_jobs as $job): ?>
                <div class="bg-white rounded-2xl border border-gray-100 shadow-lg shadow-gray-100/50 p-8">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($job['title']) ?></h3>
                            <p class="text-lg text-gray-600 mt-1"><?= htmlspecialchars($job['employer_name']) ?></p>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="text-blue-600 font-medium"><?= htmlspecialchars($job['job_type']) ?></span>
                            <span class="text-gray-500"><?= htmlspecialchars($job['location_type']) ?></span>
                        </div>
                    </div>

                    <?php if ($job['salary_range']): ?>
                        
                    <?php endif; ?>

                    <div class="space-y-4 mb-6">
                        <div>
                            <h4 class="text-lg font-medium text-gray-700 mb-2">Description</h4>
                            <p class="text-gray-600"><?= nl2br(htmlspecialchars($job['description'])) ?></p>
                        </div>

                        <?php if ($job['required_skills']): ?>
                            <div>
                                <h4 class="text-lg font-medium text-gray-700 mb-2">Required Skills</h4>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach (explode(',', $job['required_skills']) as $skill): ?>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm">
                                            <?= trim(htmlspecialchars($skill)) ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($job['sample_task']): ?>
                            <div>
                                <h4 class="text-lg font-medium text-gray-700 mb-2">Sample Task</h4>
                                <p class="text-gray-600"><?= nl2br(htmlspecialchars($job['sample_task'])) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <a href="apply_job.php?job_id=<?= $job['id'] ?><?= $filterBySkills ? '&filter=skills' : '' ?>"
                           class="block w-full bg-blue-600 text-white text-center text-lg font-medium py-3 px-6 rounded-xl hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                            Apply Now
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (empty($filtered_jobs)): ?>
            <div class="text-center py-12">
                <p class="text-2xl text-gray-600 mb-2">No jobs found</p>
                <p class="text-lg text-gray-500">
                    <?= $filterBySkills ? 'Try viewing all jobs instead of filtering by skills' : 'Check back later for new opportunities' ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>