<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Alumni Dashboard') }}
        </h2>
    </x-slot>

    <!-- Navigation Bar -->

    <div class="body">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="navbar">
        <div class="navbar">
            <div class="flex items-center space-x-4">
                <a href="{{ route('welcome') }}" class="text-gray-500 hover:text-gray-700">Welcome</a>
                <a href="{{ route('about') }}" class="text-gray-500 hover:text-gray-700">About Us</a>
                <a href="{{ route('alumni.jobs') }}" class="text-gray-500 hover:text-gray-700">Jobs</a>
            </div>
        </div> 
        </nav>
            <!-- Cards for Alumni Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Create Portfolio Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Create Portfolio</h3>
                    <p class="text-white mt-2">Build and showcase your professional portfolio.</p>
                    <a href="{{ route('alumni.createPortfolio') }}" class="text-red-500 hover:underline mt-4 inline-block">Get Started</a>
                </div>

                <!-- Publish Projects Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Publish Projects</h3>
                    <p class="text-white mt-2">Share your projects with potential employers and peers.</p>
                    <a href="{{ route('alumni.publishProjects') }}" class="text-red-500 hover:underline mt-4 inline-block">Publish Now</a>
                </div>

                <!-- Edit Projects Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Edit Projects</h3>
                    <p class="text-white mt-2">Modify and update your existing projects.</p>
                    <a href="{{ route('alumni.editProjects') }}" class="text-red-500 hover:underline mt-4 inline-block">Edit Projects</a>
                </div>

                <!-- Delete Projects Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Delete Projects</h3>
                    <p class="text-white mt-2">Remove projects that are no longer relevant.</p>
                    <a href="{{ route('alumni.deleteProjects') }}" class="text-red-500 hover:underline mt-4 inline-block">Delete Projects</a>
                </div>

                <!-- View Job Postings Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">View Job Postings</h3>
                    <p class="text-white mt-2">Explore available job opportunities.</p>
                    <a href="{{ route('alumni.jobs') }}" class="text-red-500 hover:underline mt-4 inline-block">View Jobs</a>
                </div>

                <!-- Apply for Jobs Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Apply for Jobs</h3>
                    <p class="text-white mt-2">Submit applications to desired job postings.</p>
                    <a href="{{ route('alumni.applyForJobs') }}" class="text-red-500 hover:underline mt-4 inline-block">Apply Now</a>
                </div>

                <!-- View Profile Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">View Profile</h3>
                    <p class="text-white mt-2">Check out your profile information and achievements.</p>
                    <a href="{{ route('profile.show') }}" class="text-red-500 hover:underline mt-4 inline-block">View Profile</a>
                </div>

                <!-- Edit Profile Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Edit Profile</h3>
                    <p class="text-white mt-2">Update your personal and professional details.</p>
                    <a href="{{ route('profile.edit') }}" class="text-red-500 hover:underline mt-4 inline-block">Edit Profile</a>
                </div>

                <!-- View Applications Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">View Applications</h3>
                    <p class="text-white mt-2">Track the status of your job applications.</p>
                    <a href="{{ route('alumni.viewOwnApplications') }}" class="text-red-500 hover:underline mt-4 inline-block">View Applications</a>
                </div>
            </div>
        </div>
        <footer class="footer bg-gray-800 border-t border-gray-200 mt-12">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center text-white">
                <div>
                    &copy; {{ date('Y') }} Alumni System. All rights reserved.
                </div>
            </div>
        </footer>
    </div>

    <style>
        .body {
            background-color: #222222;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            top: 0px;
        }
        .navbar {
            background-color: #8BA887;
            height: 50px;
        }
        .flex {
            margin-left: 35%;
            padding: 1rem;
        }
        .flex a {
            margin-right: 4rem;
            text-decoration: none;
            color: white;
            font-size: 19px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            padding: 7%;
            gap: 2rem;
        }

        .card {
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
            opacity: 0;
            transform: translateY(20px);
            background-color: #303030;
            padding: 1rem;
            border-radius: 10px;
        }

        .card h3 {
            color: #D0312D;
        }
        .card p {
            color: white;
        }
        .card a {
            color: #8BA887;
        }

        .card:hover {
            transform: translateY(0);
        }

        .card:nth-child(1) {
            animation: slideUp 0.5s forwards 0.1s;
        }
        .card:nth-child(2) {
            animation: slideUp 0.5s forwards 0.2s;
        }
        .card:nth-child(3) {
            animation: slideUp 0.5s forwards 0.3s;
        }
        .card:nth-child(4) {
            animation: slideUp 0.5s forwards 0.4s;
        }
        .card:nth-child(5) {
            animation: slideUp 0.5s forwards 0.5s;
        }
        .card:nth-child(6) {
            animation: slideUp 0.5s forwards 0.6s;
        }
        .card:nth-child(7) {
            animation: slideUp 0.5s forwards 0.7s;
        }
        .card:nth-child(8) {
            animation: slideUp 0.5s forwards 0.8s;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .social-icon {
            width: 3%;
            height: 3%;
            color: darkslategrey;
        }
        .footer{
            margin-top: -17%;
            background-color: #D21502;
            height: 50px;
            color: white;
            padding-top: 1rem;
        }
    </style>
</x-app-layout>
