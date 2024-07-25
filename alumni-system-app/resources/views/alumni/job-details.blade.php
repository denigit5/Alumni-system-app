<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Job Details') }}
        </h2>
    </x-slot>

    <div class="body">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gray-800 rounded-lg shadow-md p-6">
                <h1 class="text-3xl font-bold text-red-500 mb-4">{{ $job->title }}</h1>
                <p class="text-gray-300 mb-4"><strong>Company:</strong> {{ $job->company }}</p>
                <p class="text-gray-300 mb-4"><strong>Location:</strong> {{ $job->location }}</p>
                <p class="text-gray-300 mb-4"><strong>Posted on:</strong> {{ $job->created_at->format('M d, Y') }}</p>

                <div class="text-white mb-6">
                    <h2 class="text-xl font-semibold text-red-500 mb-2">Job Description</h2>
                    <p>{{ $job->description }}</p>
                </div>

                <div class="text-white mb-6">
                    <h2 class="text-xl font-semibold text-red-500 mb-2">Requirements</h2>
                    <p>{{ $job->requirements }}</p>
                </div>

                <div class="text-white mb-6">
                    <h2 class="text-xl font-semibold text-red-500 mb-2">How to Apply</h2>
                    <p>{{ $job->application_instructions }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('alumni.jobs') }}" class="text-red-500 hover:underline">Back to Job Listings</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .body {
            background-color: #222222;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .bg-gray-800 {
            background-color: #303030;
        }
        .text-red-500 {
            color: #D0312D;
        }
    </style>
</x-app-layout>
