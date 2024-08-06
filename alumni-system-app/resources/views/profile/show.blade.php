@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <header class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900" style="color: crimson;">Profile</h1>
        <p class="text-lg text-gray-600 mt-2">View and edit your profile information below.</p>
    </header>

    <!-- Profile Header -->
    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
        <div class="flex flex-col items-center mb-6">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-32 h-32 rounded-full border-4 border-gray-200 shadow-lg">
            <div class="mt-4">
                <h1 class="text-3xl font-bold text-gray-800">John Doe</h1>
                <p class="text-xl text-gray-600">Software Engineer</p>
            </div>
        </div>
        <a href="{{ route('profile.edit') }}" style="background-color: transparent; color: crimson;" class="bg-blue-600 text-white px-6 py-3 rounded-md shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Edit Profile
        </a>
    </div>

    <!-- Profile Details -->
    <div class="bg-white shadow-lg rounded-lg p-6 mt-8">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Profile Details</h2>
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="font-medium text-gray-600">Email:</span>
                <span class="text-gray-800">john.doe@example.com</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-600">Phone:</span>
                <span class="text-gray-800">(123) 456-7890</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-600">Location:</span>
                <span class="text-gray-800">New York, NY</span>
            </div>
            <div class="flex justify-between">
                <span class="font-medium text-gray-600">Biography:</span>
                <span class="text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</span>
            </div>
        </div>
    </div>

    <!-- Activity Feed (Optional) -->
    <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Recent Activity</h2>
        <ul class="space-y-4">
            <li class="flex items-center">
                <svg style="transform: scale(0.3, 0.3); margin-top: -17rem; margin-bottom: -15rem;" class="w-6 h-6 text-green-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path>
                </svg>
                <span class="text-gray-800">Completed the "Advanced Laravel" course.</span>
            </li>
            <li class="flex items-center">
                <svg style="transform: scale(0.2, 0.2); margin-top: -20rem; margin-bottom: -17rem;" class="w-6 h-6 text-blue-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                <span class="text-gray-800">Applied for the "Senior Developer" position at TechCorp.</span>
            </li>
        </ul>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        margin-left: 20%;
        text-align: center;
    }
    .container {
        max-width: 800px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    header {
        font-family: 'Roboto', sans-serif;
    }
    .bg-blue-600 {
        background-color: #004d99;
    }
    .bg-blue-700 {
        background-color: #003366;
    }
</style>
@endpush
