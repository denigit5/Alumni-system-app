<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Alumni Dashboard') }}
        </h2>
    </x-slot>

    <div class="body">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="navbar">
                <div class="flex items-center space-x-4" style="width: auto;">
                    <a href="{{ route('welcome') }}" class="text-gray-500 hover:text-gray-700">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-500 hover:text-gray-700">About Us</a>
                    <a href="{{ route('alumni.jobs') }}" class="text-gray-500 hover:text-gray-700">Jobs</a>
                </div>
            </nav>

            <!-- Cards for Alumni Actions -->
            <div style="display: flex;">
                <div class="alumnipic3"><img src="/images/alumnipic3.jpg" alt=""></div>
                
                <!-- Create Portfolio Card -->
                <div class="card card-one bg-gray-700 rounded-lg shadow-md p-6 text-center" style="background-color: transparent; box-shadow: none; text-align:start;">
                    <h3 class="text-red-500 font-semibold text-lg" style="color: #D0312D; font-size: 28px;">Create Portfolio</h3>
                    <p class="text-white mt-2" style="font-size: 1.5rem; width: 60%; height:200px;">Build and showcase your professional portfolio, including various projects and achievements that highlight your skills and experiences.</p>
                    <a href="{{ route('alumni.createPortfolio') }}" class="text-red-500 mt-4 inline-block" style="background-color: gray; color: white; padding: 1rem; text-decoration: none;">Build Portfolio</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" style="background: linear-gradient(to bottom, #87CEEB, #FFFFFF);">
                <!-- View Profile Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">View Profile</h3>
                    <p class="text-white mt-2">Check out your profile information and achievements. Ensure your profile is up-to-date and highlights your strengths.</p>
                    <a href="{{ route('profile.show') }}" class="text-red-500 hover:underline mt-4 inline-block">View Profile</a>
                </div>

                <!-- Publish Projects Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">Publish Projects</h3>
                    <p class="text-white mt-2">Share your projects with potential employers and peers. Demonstrate your capabilities through the projects you have worked on</p>
                    <a href="{{ route('alumni.publishProjects') }}" class="text-red-500 hover:underline mt-4 inline-block">Publish Now</a>
                </div>

                <!-- View Job Postings Card -->
                <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-red-500 font-semibold text-lg">View Job Postings</h3>
                    <p class="text-white mt-2">Explore available job opportunities. Find the job that best suits your skills and interests.</p>
                    <a href="{{ route('alumni.jobs') }}" class="text-red-500 hover:underline mt-4 inline-block">View Jobs</a>
                </div>
            </div>

            <!-- Apply for Jobs Card -->
            <div class="card card1 bg-gray-700 rounded-lg p-6 text-center" style="height: 400px; margin-top: -20rem;">
                <h3 class="text-red-500 font-semibold text-lg">Apply for Jobs</h3>
                <p class="text-white mt-2">Submit applications to desired job postings. Take the next step in your career by applying for jobs that match your qualifications.</p>
                <a href="{{ route('alumni.applyForJobs') }}" class="text-red-500 hover:underline mt-4 inline-block">Apply Now</a>
                <br><br>
                <h3 class="text-red-500 font-semibold text-lg" style="padding-top: 1rem;">View Applications</h3>
                <p class="text-white mt-2">Track the status of your job applications. Stay informed about your application progress and follow up as needed.</p>
                <a href="{{ route('alumni.viewOwnApplications') }}" class="text-red-500 hover:underline mt-4 inline-block">View Applications</a>
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
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                top: 0px;
            }
            .navbar {
                background-color: black;
                height: 50px;
                padding-left: 25%;
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
            .alumnipic3 {
                margin-top: -12rem;
            }
            .grid {
                margin-bottom: 10rem;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                padding: 7%;
                gap: 2rem;
                width: auto;
                height: 450px;
                box-shadow: 1px 2px 12px #87CEEB;
            }
            .card {
                transition: transform 0.3s ease-out, opacity 0.3s ease-out;
                opacity: 0;
                transform: translateY(20px);
                background-color: rgb(240, 239, 239);
                box-shadow: 0px 3px 1px #D0312D;
                padding: 1rem;
                text-align: center;
                height: 200px;
                width: 80%;
                margin-bottom: 1rem;
            }
            .card1 {
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
                background-position-y: 15%;
                width: 50%;
                margin-left: 25%;
                margin-bottom: 17rem;
                --bg-opacity: 0.1;
            }
            .card h3 {
                color: black;
            }
            .card p {
                color: #3B3B3B;
            }
            .card a {
                color: #D0312D;
            }
            .card:hover {
                transform: translateY(0);
            }
            .card:nth-child(1) {
                animation: slideUp 1s forwards 0.1s;
            }
            .card:nth-child(2) {
                animation: slideUp 1s forwards 0.2s;
            }
            .card:nth-child(3) {
                animation: slideUp 1s forwards 0.3s;
            }
            .card:nth-child(4) {
                animation: slideUp 1s forwards 0.4s;
            }
            .card:nth-child(5) {
                animation: slideUp 1s forwards 0.5s;
            }
            .card:nth-child(6) {
                animation: slideUp 1s forwards 0.6s;
            }
            .card:nth-child(7) {
                animation: slideUp 1s forwards 0.7s;
            }
            .card:nth-child(8) {
                animation: slideUp 1s forwards 0.8s;
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
            .footer {
                margin-top: -17%;
                background-color: #D21502;
                height: 50px;
                color: white;
                padding-top: 1rem;
            }

            /* Styles for Circular Photo Display */
            .circular-image {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid #D0312D;
            }

            /* Styles for the Photo Upload Section */
            .photo-upload {
                border: 2px solid #D0312D;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                background-color: #2d3748;
            }
        </style>
    </div>
</x-app-layout>
