<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight text-blue-600">
            {{ __('Explore & Connect: Your Talent Gateway') }}
        </h2>
    </x-slot>

    <div class="flex">
        <div class="navbar">
            <nav>
               <ul style="display: flex; width: 100%; background-color: #e8e8e8; height: 40px; margin-bottom: -1rem; margin-top: -0.5rem; list-style: none; gap: 2rem; padding-left: 74%; padding-top: 0.6%;">
                   <li><a href="" style="text-decoration: none; color: crimson; font-size: 17px;">Home</a></li>
                   <li><a href="" style="text-decoration: none; color: crimson; font-size: 17px;">About</a></li>
                   <li><a href="" style="text-decoration: none; color: crimson; font-size: 17px;"></a>Contact</li>
                </ul>
            </nav>
        </div>
        <!-- Sidebar -->
        <div style="background-color: #e8e8e8; width: 14%; height: 100vh; margin-bottom: -39.5rem; padding: 0.3rem;" class=" text-white h-screen p-6">
            <h3 class="text-xl font-semibold mb-4" style="margin-left: 20%; color:crimson; font-weight: 700; padding-top: 2rem;">Navigation</h3>
            <ul class="space-y-4" style="padding-top: 7px; list-style: none;">
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.dashboard') }}" class="hover:text-blue-300" style="text-decoration: none; color:#6c757d;">Dashboard</a></li>
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.talentDiscovery') }}" class="hover:text-blue-300" style="text-decoration: none; color:#6c757d;">Talent Discovery</a></li>
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.jobMatching') }}" class="hover:text-blue-300" style="text-decoration: none; color:#6c757d;">Job Matching</a></li>
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.postJob') }}" class="hover:text-blue-300" style="text-decoration: none; color:#6c757d;">Post a Job</a></li>
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.profile') }}" class="hover:text-blue-300" style="text-decoration: none; color:#6c757d;">Company Profile</a></li>
                <li style="font-size: 18px; width: 100%; font-weight: 500; margin-bottom: 1.6rem;"><a href="{{ route('employer.settings') }}" class="hover:text-blue-300"style="text-decoration: none; color:#6c757d;">Settings</a></li>
            </ul>
            <div class="image"></div>
        </div>

        <!-- Main Content -->
        <div style="margin-left: 18%;" class="w-3/4 py-12 px-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-xl" style="font-size: 25px;">Welcome to the Employer Dashboard</h3>
                        <p class="text-gray-600 mb-6" style="font-size: 18px; line-height: 30px; width: 60%;">
                            Discover top talent from our alumni network or find the perfect candidates for your job postings. Leverage our platform to streamline your recruitment process and connect with the right individuals.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="card p-6 bg-blue-100 rounded-lg shadow-md" style="padding: 1rem;">
                                <h4 class="text-lg font-semibold text-blue-800 mb-2">Talent Discovery</h4>
                                <p class="text-blue-700 mb-4">Browse alumni portfolios and projects to find the best talent for your organization.</p>
                                <a href="{{ route('employer.talentDiscovery') }}" class="btn bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Explore Talent</a>
                            </div>
                            <div class="card p-6 bg-green-100 rounded-lg shadow-md" style="padding: 1rem;">
                                <h4 class="text-lg font-semibold text-green-800 mb-2">Job Matching</h4>
                                <p class="text-green-700 mb-4">Match your job postings with suitable alumni profiles to find the right fit.</p>
                                <a href="{{ route('employer.jobMatching') }}" class="btn bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Find Matches</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="bg-gray-100 text-center p-4 rounded-lg shadow-md" style="background-color: #e8e8e8; height: 45px; margin-top: 2%; margin-left: -3rem; padding-top: 0.1rem; text-align: center;">
                    <p class="text-gray-600">&copy; 2024 Your Company. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    body {
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        overflow: hidden;
    }
    .image {
        width: 250px;
        height: 200px;
        margin-left: -2rem;
        margin-top: 4rem;
        background-image: url("{{ asset('images/ssss.png') }}");
        background-repeat: no-repeat;
        transform: scale(0.6, 0.6);
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        color: #fff;
    }

    .btn-primary {
        background-color: #3490dc;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .portfolio-list, .job-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .portfolio-item, .job-item {
        width: calc(33% - 20px);
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .portfolio-item:hover, .job-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Sidebar styles */
    
    /* Card styles */
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .bg-blue-100 {
        background-color: #ebf8ff;
    }

    .bg-green-100 {
        background-color: #f0fff4;
    }

    .text-blue-800 {
        color: #2c5282;
    }

    .text-green-800 {
        color: #2f855a;
    }

    .bg-blue-600 {
        background-color: #3182ce;
    }

    .bg-blue-700:hover {
        background-color: #2b6cb0;
    }

    .bg-green-600 {
        background-color: #38a169;
    }

    .bg-green-700:hover {
        background-color: #2f855a;
    }

    .btn {
        display: inline-block;
        text-align: center;
        text-decoration: none;
        font-weight: 600;
    }
</style>
