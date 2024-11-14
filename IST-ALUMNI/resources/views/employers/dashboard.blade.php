<x-app-layout>
    <x-slot name="header" class="flex items-center">
        <h2 class="bg-gradient-to-r from-gray-700 to-gray-900 text-white p-4 rounded-lg shadow-lg animate-fade-in">
            {{ __('Employers Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 animate-on-scroll">
                <!-- Create Job Posting Card -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Create Job Posting</h4>
                    <p class="text-gray-600">Post jobs on the platform to attract talented alumni.</p>
                    <a href="{{ route('employers.create_job') }}" class="text-red-500 hover:underline mt-4 block">Create a Job Post &rarr;</a>
                </div>

                <!-- View Alumni Profiles Card -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">View Alumni Profiles</h4>
                    <p class="text-gray-600">Explore detailed profiles of alumni, including their portfolios and skills.</p>
                    <a href="{{ route('employers.view_applicants') }}" class="text-red-500 hover:underline mt-4 block">Browse Profiles &rarr;</a>
                </div>

                <!-- View Alumni Projects Card -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">View Alumni Projects</h4>
                    <p class="text-gray-600">Check out projects published by alumni, showcasing their work.</p>
                    <a href="{{ route('employers.view_projects') }}" class="text-red-500 hover:underline mt-4 block">Explore Projects &rarr;</a>
                </div>
            </div>

            <!-- Analytics Section -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Platform Analytics</h3>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Pie Chart: Alumni Engagement -->
                    <div class="flex flex-col items-center justify-center animate-pie-chart">
                        <h4 class="text-lg font-semibold mb-4">Alumni Engagement by Industry</h4>
                        <canvas id="engagementChart" width="300" height="300"></canvas>
                    </div>

                    <!-- Bar Chart: Job Posting Stats -->
                    <div class="flex flex-col items-center justify-center animate-bar-chart">
                        <h4 class="text-lg font-semibold mb-4">Job Posting Performance</h4>
                        <canvas id="jobPostingChart" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>

            <!-- Talent Discovery and Job Matching Section -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Talent Discovery and Job Matching</h3>

                <div class="flex flex-col md:flex-row md:space-x-8 space-y-6 md:space-y-0">
                    <!-- Talent Discovery -->
                    <div class="w-full md:w-1/2 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105">
                        <h4 class="text-xl font-semibold text-gray-800 mb-3">Talent Discovery</h4>
                        <p class="text-gray-600">Browse alumni portfolios and projects to identify potential recruits.</p>
                        <a href="{{ route('employers.talent_discovery') }}" class="text-red-500 hover:underline mt-4 block">Discover Talent &rarr;</a>
                    </div>

                    <!-- Job Matching -->
                    <div class="w-full md:w-1/2 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105">
                        <h4 class="text-xl font-semibold text-gray-800 mb-3">Job Matching</h4>
                        <p class="text-gray-600">Utilize the system's matching feature to connect your job posts with alumni profiles.</p>
                        <a href="{{ route('employers.job_matching') }}" class="text-red-500 hover:underline mt-4 block">Match Jobs &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add CSS for Animations -->
    <style>
        /* Animations */
        body {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .animate-fade-in { 
            animation: fadeIn 1.5s ease-in-out forwards; 
        }

        @keyframes fadeIn { 
            from { opacity: 0; } 
            to { opacity: 1; } 
        }

        .animate-on-scroll { 
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 0.5s ease, transform 0.5s ease; 
        }

        .animate-on-scroll.visible { 
            opacity: 1; 
            transform: translateY(0); 
        }

        #engagementChart, #jobPostingChart {
            max-width: 100%;
            height: 300px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
    </style>

    <!-- Add JavaScript for Animations and Chart Setup -->
    <script>
        window.addEventListener('load', function () {
            document.body.style.opacity = '1'; // Show the page content after loading

            // **Scroll Animation**: Applying animation when elements come into the viewport
            const scrollElements = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            }, { threshold: 0.1 });

            scrollElements.forEach((el) => observer.observe(el));

            // **Chart.js for Analytics Visualization**
            // Check if Chart.js is loaded to prevent errors
            if (typeof Chart !== 'undefined') {
                // **Pie Chart for Alumni Engagement by Industry**
                const engagementCtx = document.getElementById('engagementChart')?.getContext('2d');
                if (engagementCtx) {
                    new Chart(engagementCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Technology', 'Finance', 'Healthcare', 'Education', 'Others'],
                            datasets: [
                                {
                                    data: [25, 20, 15, 30, 10], // Sample Data
                                    backgroundColor: ['#FA3535', '#4CAF50', '#FF9800', '#2196F3', '#9E9E9E'],
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: { position: 'top' },
                            },
                        },
                    });
                }

                // **Bar Chart for Job Posting Performance**
                const jobPostingCtx = document.getElementById('jobPostingChart')?.getContext('2d');
                if (jobPostingCtx) {
                    new Chart(jobPostingCtx, {
                        type: 'bar',
                        data: {
                            labels: ['Posted', 'Viewed', 'Applied'],
                            datasets: [
                                {
                                    label: 'Performance',
                                    data: [50, 75, 35], // Sample Data
                                    backgroundColor: '#FA3535',
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: { beginAtZero: true },
                            },
                        },
                    });
                }
            } else {
                console.error("Chart.js library is not loaded.");
            }
        });
    </script>
</x-app-layout>
