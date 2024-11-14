@extends('backpack::layout')

@section('content')
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-6 text-red-500">Job Applications</h1>
        
        @foreach($applications as $application)
            <div class="bg-white p-6 mb-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <img src="{{ asset('storage/' . $application->alumnus->avatar) }}" alt="{{ $application->alumnus->name }}'s Avatar" class="w-16 h-16 rounded-full mr-6">
                    <div>
                        <h3 class="text-xl font-semibold">{{ $application->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $application->email }}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="text-lg font-medium text-gray-700">Job: <strong>{{ $application->job->title }}</strong></p>
                    <a href="{{ asset('storage/' . $application->resume) }}" class="text-blue-600" target="_blank">Download Resume</a>
                </div>
            </div>
        @endforeach

        @if($applications->isEmpty())
            <p class="text-center text-gray-600">No job applications yet.</p>
        @endif
    </div>
@endsection
