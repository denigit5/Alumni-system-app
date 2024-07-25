<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Job Postings') }}
        </h2>
    </x-slot>

    <div class="body">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($jobs as $job)
                    <div class="card bg-gray-700 rounded-lg shadow-md p-6 text-center">
                        <h3 class="text-red-500 font-semibold text-lg">{{ $job->title }}</h3>
                        <p class="text-white mt-2">{{ $job->description }}</p>
                        <a href="{{ route('alumni.job-details', ['id' => $job->id]) }}" class="text-red-500 hover:underline mt-4 inline-block">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .body {
            background-color: #222222;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            top: 0px;
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
    </style>
</x-app-layout>
