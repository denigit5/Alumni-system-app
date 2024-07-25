<x-app-layout>
    <style>
        body {
            background-color: #EFEFEF; /* Light background */
            color: #333; /* Dark grey text */
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #004A7C; /* Dark blue header */
            color: white;
            padding: 1rem;
            border-radius: 8px 8px 0 0;
        }
        .container {
            margin: auto;
            padding: 2rem;
            margin-top: 2%;
            background-color: white; /* White background for container */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 900px;
        }
        .nav-links a {
            display: block;
            padding: 0.5rem;
            margin-top: 1rem;
            color: #004A7C; /* Dark blue text */
            text-decoration: none;
            border: 1px solid #004A7C;
            border-radius: 4px;
            text-align: center;
        }
        .nav-links a:hover {
            background-color: #004A7C; /* Dark blue background on hover */
            color: white;
        }
    </style>

    <div class="container">
        <div class="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
        <div class="p-6">
            <p>{{ __("You're logged in!") }}</p>
        </div>
        <div class="nav-links">
            <a href="{{ route('admin.postJobs') }}">
                {{ __('Post Jobs') }}
            </a>
            <a href="{{ route('admin.manageJobPostings') }}">
                {{ __('Manage Job Postings') }}
            </a>
            <a href="{{ route('admin.moderateContent') }}">
                {{ __('Moderate Content') }}
            </a>
        </div>
    </div>
</x-app-layout>
