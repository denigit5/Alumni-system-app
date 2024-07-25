<!-- resources/views/alumni/about.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="body">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">
            <div class="bg-gray-700 rounded-lg shadow-md p-6 text-center">
                <h3 class="text-red-500 font-semibold text-lg">About Alumni System</h3>
                <p class="text-white mt-4">
                    Welcome to the Alumni System, a platform designed to connect graduates, employers, and educational institutions.
                    Our goal is to create a vibrant community where alumni can showcase their portfolios, publish projects, and explore job opportunities.
                    Employers can discover talented individuals and post job openings, while educational institutions can track the progress and achievements of their graduates.
                </p>
                <p class="text-white mt-4">
                    Our features include:
                    <ul class="list-disc list-inside mt-2 text-left mx-auto max-w-3xl">
                        <li>Create and manage professional portfolios</li>
                        <li>Publish and edit projects to highlight your work</li>
                        <li>Search and apply for job postings</li>
                        <li>Connect with employers and fellow alumni</li>
                        <li>Receive updates on job application statuses</li>
                        <li>Participate in community events and discussions</li>
                    </ul>
                </p>
                <p class="text-white mt-4">
                    Whether you're a recent graduate looking to kickstart your career, an employer seeking top talent, or an institution aiming to support your alumni,
                    the Alumni System is here to facilitate these connections and foster professional growth.
                </p>
                <p class="text-white mt-4">
                    Join us today and be a part of this dynamic and supportive network!
                </p>
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
        }

        .bg-gray-700 {
            background-color: #303030;
        }

        .footer {
            margin-top: 2rem;
            background-color: #D21502;
            height: 50px;
            color: white;
            padding-top: 1rem;
        }

        .list-disc {
            list-style-type: disc;
        }

        .list-inside {
            list-style-position: inside;
        }
    </style>
</x-app-layout>
